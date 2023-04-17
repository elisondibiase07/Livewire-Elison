<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    public function render()
    {
        return view('livewire.articles-table', 
        [
            'articles' => Article::all(),
        ]);
    }
    
    public function delete($id){
        Article::find($id)->delete();
    }
}
