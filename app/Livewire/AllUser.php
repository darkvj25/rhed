<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Faculty;
use App\Models\Student;
use App\Models\User;
use App\Models\Year;
use Livewire\Component;

class AllUser extends Component
{
    public $user;
    public $course;
    public $year;

    public function mount($id){
        $this->user = User::where('id', $id)->first();
        $this->course = Course::where('id', $this->user->course)->first();
        $this->year = Year::where('id', $this->user->year)->first();

    }
    public function update($id){
       $acceptUser = User::findOrFail($id);
       $acceptUser->accept = 1;

        if ($acceptUser->role === 'faculty'){
        $data = [
                'user_id' => $acceptUser->id,
                'first_name' => $acceptUser->first_name,
                'last_name' => $acceptUser->last_name,
                'position' => $acceptUser->position,
            ];
            $acceptUser->save();
            Faculty::create($data);
        }elseif($acceptUser->role === 'student'){
            $acceptUser->save();
            Student::create([
                'user_id' => $acceptUser->id,
                'first_name' => $acceptUser->first_name,
                'last_name' => $acceptUser->last_name,
                'course_id' => $acceptUser->course,
                'year_id' => $acceptUser->year,
                'block_id' => $acceptUser->block,
                'gender' => $acceptUser->gender,
            ]);
        }else{
            $acceptUser->save();
        }
       session()->flash('accept', 'User accepted successfully.');
        return redirect()->route('user');
    }
    public function delete($id){
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();

        session()->flash('delete', 'User deleted successfully.');
        $this->redirectRoute('user',['request'=> 'user_request']);
    }
    public function render()
    {
        return view('livewire.all-user');
    }
}
