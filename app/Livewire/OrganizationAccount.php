<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Url;
class OrganizationAccount extends Component
{
    public $users;
    #[url(keep: true)]
    public $search = '';
    public function mount(){
        $this->users = User::query()->where('accept',1)
                    ->where('role','org')->get();
    }
    public function searchAll(){

        $this->users = User::where('name', 'like', "%{$this->search}%")
                            ->where('accept',1)
                            ->where('role','org')->get();
    }
    public function delete($id){
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();

        session()->flash('delete', 'User deleted successfully.');
        $this->redirectRoute('user',['request'=> 'user_request']);
    }
    public function render()
    {
        return view('livewire.organization-account');
    }
}
