<?php

namespace App\Livewire;

use App\Models\News as ModelsNews;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Attributes\Url;
class News extends Component
{
    public $news;
    #[url(keep: true)]
    public $search = '';
    public function mount(){

        if (empty($this->search)) {
            $this->news = ModelsNews::where('status','=','public')->get();
        } else {
            $this->news = ModelsNews::where('post', 'like', "%{$this->search}%")
                                    ->where('status','=','public')->get();
        }
    }
    public function delete($id)
    {
        $news = ModelsNews::findOrFail($id);
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        session()->flash('delete', 'News deleted successfully.');
        $this->redirectRoute('news');

    }
    public function searchAll(){
        if (empty($this->search)) {
            $this->news = ModelsNews::where('status','=','public')->get();
            $this->js('window.location.reload()');
        } else {
            $this->news = ModelsNews::where('post', 'like', "%{$this->search}%")
                                    ->where('status','=','public')->get();
            $this->js('window.location.reload()');
        }
    }
    public function render()
    {

        return view('livewire.news',[
            'news' => $this->news,
        ]);
    }
}

