<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{   

    public $title;
    public $description;
    public $body;


    public function createArticle(){
        Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'body' => $this->body
        ]);
        $this->resetForm();
    }

    public function resetForm(){
        $this->title = '';
        $this->description = '';
        $this->body = '';
    }

   

    public function render()
    {
        return view('livewire.create-form');
    }
}
