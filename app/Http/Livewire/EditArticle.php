<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditArticle extends Component
{

    public $articleId;
    public $title;
    public $description;
    public $body;


    public function updateArticle(){
        $article=Article::find($this->articleId);
        $article->update(
            [
                'title'=>$this->title,
                'description'=>$this->description,
                'body'=>$this->body
            ]
            );
            return redirect()->route('index');
    }


    public function mount($articleId)
    {
     
        $article = Article::find($articleId);

        $this->articleId = $article -> id;
        $this->title = $article -> title;
        $this->description = $article -> description;
        $this->body = $article -> body;
    }


    public function render()
    {
      return view('livewire.edit-article');
    }
}
