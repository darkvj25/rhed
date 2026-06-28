<?php

namespace App\Livewire;

use App\Models\Conversation as ModelsConversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Conversation extends Component
{
    public $convos;

    public function delete($id){
        $deleteMessage = ModelsConversation::findOrFail($id);
        $deleteMessage->delete();
    }
    public function render()
    {
        $userId = Auth::user()->id;
        $this->convos = ModelsConversation::whereIn('sender_id', [$userId])
                                          ->orWhereIn('reciever_id', [$userId])
                                          ->with('message')
                                          ->orderBy(
                                              Message::select('created_at')
                                                          ->whereColumn('conversation_id', 'conversations.id')
                                                          ->orderBy('created_at', 'desc')
                                                          ->limit(1),
                                              'desc'
                                          )
                                          ->get();
        return view('livewire.conversation',[
            'convos' => $this->convos,
        ]);
    }
}
