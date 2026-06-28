<?php

namespace App\Livewire;

use App\Models\Forum as ModelsForum;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class Forum extends Component
{

    #[url]
    public $search ='';
    public $forums =[];


    public function mount(){

        $year_id = Auth::user()->year;

        if (empty($this->search)) {
                $this->forums = ModelsForum::where('status','=','public')
                            ->orderBy('created_at', 'desc')->get();


        } else {
             $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                            ->orderBy('created_at', 'desc')
                                            ->where('status','=','public')->get();
        }

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->forums = ModelsForum::where('status','=','public')
                                            ->orderBy('created_at', 'desc')->get();

            $this->js('window.location.reload()');
        } else {
            $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                            ->orderBy('created_at', 'desc')
                                            ->where('status','=','public')->get();
             $this->js('window.location.reload()');
        }
    }
    public function render()
    {


        return view('livewire.forum',[
            'forums' => $this->forums,
        ]);
    }
}
