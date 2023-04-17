<x-layout>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1> {{$article->title}}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:edit-article articleId="{{$article->id}}"/>
        </div>
    </div>
</div>
</x-layout>












{{-- <div>
    <form  wire:submit.prevent="updateArticle">
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input type="text" class="form-control" wire:model="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrizione</label>
            <input type="text" class="form-control" wire:model="description">
        </div>
        <div class="mb-3">
            <label class="form-label">Corpo del Testo</label>
            <textarea id="" cols="30" rows="10" class="form-control" wire:model="body"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div> --}}
