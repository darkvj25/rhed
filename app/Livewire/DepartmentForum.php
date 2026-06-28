<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Forum as ModelsForum;
use App\Models\Year;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class DepartmentForum extends Component
{
    #[url]
    public $search ='';
    public $forums =[];
    public $forum_course;

    public function mount(){
        $course_id = Auth::user()->course;
        $course = Course::where('id', $course_id)->first();
        $this->forum_course = $course->course;
      
        $user_year =  Auth::user()->year;
        $year  = Year::where('id', $user_year)->first();
  
        if (empty($this->search)) {
                if(Auth::user()->role === 'admin'){
                    $this->forums = ModelsForum::where('status','=','private')
                                    ->where('course',$this->forum_course)
                                    ->orderBy('created_at', 'desc')->get();
                }else{
                    $this->forums = ModelsForum::where('status', 'private')
                                            ->where('course', $this->forum_course)
                                            ->where(function ($query) use ($year) {
                                                $query->where('year', $year->year)  // Only show forums for the user's year
                                                      ->orWhere('user_id', Auth::user()->id);  // Show forums that the user has posted
                                            })
                                            ->orderBy('created_at', 'desc')
                                            ->get();
                   
                }
                
                
        } else {
                    if(Auth::user()->role === 'admin'){
                         $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                                ->where('status','=','private')
                                                ->where('course',$this->forum_course)
                                                ->orderBy('created_at', 'desc')->get();
                    }else{
                         $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                            ->where('status', 'private')
                                            ->where('course', $this->forum_course)
                                            ->where(function ($query) use ($year) {
                                                $query->where('year', $year->year)  // Only show forums for the user's year
                                                      ->orWhere('user_id', Auth::user()->id);  // Show forums that the user has posted
                                            })
                                            ->orderBy('created_at', 'desc')
                                            ->get();
                   
                    }
        }

    }
    public function searchAll(){
        
         $user_year =  Auth::user()->year;
        $year  = Year::where('id', $user_year)->first();
        
        
        if (empty($this->search)) {
             if(Auth::user()->role === 'admin'){
                    $this->forums = ModelsForum::where('status','=','private')
                                    ->where('course',$this->forum_course)
                                    ->orderBy('created_at', 'desc')->get();
                }else{
                     $this->forums = ModelsForum::where('status', 'private')
                                            ->where('course', $this->forum_course)
                                            ->where(function ($query) use ($year) {
                                                $query->where('year', $year->year)  // Only show forums for the user's year
                                                      ->orWhere('user_id', Auth::user()->id);  // Show forums that the user has posted
                                            })
                                            ->orderBy('created_at', 'desc')
                                            ->get();
                   
                }
                 $this->js('window.location.reload()');              
        } else {
            
                    if(Auth::user()->role === 'admin'){
                         $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                                ->where('status','=','private')
                                                ->where('course',$this->forum_course)
                                                ->orderBy('created_at', 'desc')->get();
                    }else{
                         $this->forums = ModelsForum::where('post', 'like', "%{$this->search}%")
                                            ->where('status', 'private')
                                            ->where('course', $this->forum_course)
                                            ->where(function ($query) use ($year) {
                                                $query->where('year', $year->year)  // Only show forums for the user's year
                                                      ->orWhere('user_id', Auth::user()->id);  // Show forums that the user has posted
                                            })
                                            ->orderBy('created_at', 'desc')
                                            ->get();
                   
                    }
                   $this->js('window.location.reload()');                              
        }
    }
    public function render()
    {
        return view('livewire.department-forum');
    }
}
