<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class CourseNews extends Component
{
    public $news;
    #[url(keep: true)]
    public $search = '';
    public $news_course;
    public function mount(){
        $course_id = Auth::user()->course;
        $course = Course::where('id', $course_id)->first();
        $this->news_course = $course->course;
        if (empty($this->search)) {
            $this->news = News::where('status','=','private')
                                ->where('course',$this->news_course)->get();

        } else {
            $this->news = News::where('post', 'like', "%{$this->search}%")
                                    ->where('status','=','private')
                                    ->where('course',$this->news_course)->get();
        }
    }
    public function delete($id)
    {
        $news = News::findOrFail($id);
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        session()->flash('delete', 'News deleted successfully.');
        $this->redirectRoute('course-news');

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->news = News::where('status','=','private')
                                ->where('course',$this->news_course)->get();
            $this->js('window.location.reload()');
        } else {
            $this->news = News::where('post', 'like', "%{$this->search}%")
                                    ->where('course',$this->news_course)
                                    ->where('status','=','private')->get();
            $this->js('window.location.reload()');
        }
    }
    public function render()
    {
        return view('livewire.course-news',[
            'news' => $this->news,
        ]);
    }
}
