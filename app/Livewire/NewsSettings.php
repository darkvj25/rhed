<?php

namespace App\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;

class NewsSettings extends Component
{
    public $news;
    #[url(keep: true)]
    public $search = '';
    public function mount(){
        if (empty($this->search)) {
            $this->news = News::where('user_id', '=', Auth::user()->id)->get();
        } else {
            $this->news = News::where('post', 'like', "%{$this->search}%")
                                    ->where('user_id', '=', Auth::user()->id)->get();
        }

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->news = News::where('user_id', '=', Auth::user()->id)->get();
            $this->js('window.location.reload()');
        } else {
            $this->news = News::where('post', 'like', "%{$this->search}%")
                                    ->where('user_id', '=', Auth::user()->id)->get();
            $this->js('window.location.reload()');
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
        $this->redirectRoute('news-settings');

    }
    public function render()
    {
        return view('livewire.news-settings');
    }
}
