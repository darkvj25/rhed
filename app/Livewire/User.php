<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\Attributes\Url;
class User extends Component
{


    public $users;
    #[url(keep: true)]
    public $search = '';

    public function mount(){

        if (empty($this->search)) {
            $this->users = ModelsUser::query()->where('accept',1)
                    ->where('role','student')->get();
        } else {
            $this->users = ModelsUser::where('name', 'like', "%{$this->search}%")
                                ->where('first_name', 'like', "%{$this->search}%")
                                ->where('last_name', 'like', "%{$this->search}%")
                                ->where('accept',1)
                                ->where('role','student')->get();
        }

    }
    public function searchAll(){

        if (empty($this->search)) {
            $this->users = ModelsUser::query()->where('accept',1)
                    ->where('role','student')->get();
        } else {
            $this->users = ModelsUser::where('name', 'like', "%{$this->search}%")
                                ->where('first_name', 'like', "%{$this->search}%")
                                ->where('last_name', 'like', "%{$this->search}%")
                                ->where('accept',1)
                                ->where('role','student')->get();
        }
    }
    public function render()
    {
        return view('livewire.user');
    }
}
