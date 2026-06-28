<?php

namespace App\Livewire;

use App\Models\Conversation;
use App\Models\Message as ModelsMessage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\MessageNotification;
use Livewire\Component;

class Message extends Component
{
    use WithFileUploads;

    public $user;
    public $reciever_id;
    public $reply;
    public $sender;
    public $photo;
    public $fetch_messages;
    public function mount($reciever,$sender){

        $this->sender = $sender;
        $this->reciever_id = $reciever;
        if(Auth::user()->id === intval($reciever)){
            $this->user = User::where('id',$sender)->first();
        }else{
            $this->user = User::where('id',$reciever)->first();

        }


    }
    public function fetchMessages()
    {
        $this->fetch_messages = ModelsMessage::where(function ($query) {
                $query->where('sender_id', auth()->id())
                      ->where('reciever_id', $this->reciever_id);
            })
            ->orWhere(function ($query) {
                $query->where('sender_id', $this->reciever_id)
                      ->where('reciever_id', auth()->id());
            })
            ->orderBy('created_at')
            ->get();

        // Mark unread messages as read
        ModelsMessage::where('reciever_id', auth()->id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    }
    public function save(){

        $this->validate([
            'photo' => 'nullable|image|max:10240', // 10MB Max
            'reply' => 'required_without:photo',
        ]);

        $imagePath =null;
        if ($this->photo) {
            $imagePath = $this->photo->store('upload-photos', 'public'); // Store the file in the 'public/uploads' directory
        }
        $con = Conversation::where(function($query) {
            $query->where('sender_id', $this->sender)
                  ->where('reciever_id', $this->reciever_id);
        })
        ->orWhere(function($query) {
            $query->where('sender_id', $this->reciever_id)
                  ->where('reciever_id', $this->sender);
        })
        ->first();
        if($con === null){
            $conversation = [
                'sender_id' =>   Auth::user()->id,
                'reciever_id' => $this->reciever_id
            ];
            $createCon = Conversation::create($conversation);
            $message =[
                'conversation_id' =>$createCon->id,
                'reciever_id' => $this->reciever_id,
                'sender_id' =>   Auth::user()->id,
                'body' => $this->reply,
                'photo' =>  $imagePath,
            ];
            $messages = ModelsMessage::create($message);
            MessageNotification::create([
                'user_id' => $messages->reciever_id,
                'content' => $messages->body,

                ]);

        }else{
            $message =[
                'conversation_id' =>$con->id,
                'reciever_id' => intval($this->reciever_id) === Auth::user()->id ? $this->sender : $this->reciever_id,
                'sender_id' => Auth::user()->id,
                'body' => $this->reply,
                'photo' =>  $imagePath,

            ];
            $messages = ModelsMessage::create($message);
            MessageNotification::create([
               'user_id' => $messages->reciever_id,
                'content' => $messages->body,
                ]);
        }

        $this->redirectRoute('messages', ['reciever'=>$this->reciever_id,'sender'=>$this->sender]);

    }

    public function delete($id){
        $deleteMessage = ModelsMessage::findOrFail($id);
        if($deleteMessage->sender_id === Auth::user()->id){
            $deleteMessage->delete();
        }else{
            $deleteMessage->unsent = 1;
            $deleteMessage->save();
        }

    }
    public function render()
    {
        $messages = ModelsMessage::where(function($query) {
            $query->where('sender_id', $this->sender)
                  ->where('reciever_id', $this->reciever_id);
        })
        ->orWhere(function($query) {
            $query->where('sender_id', $this->reciever_id)
                  ->where('reciever_id', $this->sender);
        })
        ->get();
        $this->fetchMessages();
        return view('livewire.message',[
            'messages' => $messages
        ]);
    }
}
