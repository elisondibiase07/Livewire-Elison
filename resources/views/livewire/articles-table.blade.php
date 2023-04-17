<div class="my-5">
    {{-- <p>Ricerca Per titolo : </p>
    <input type="text" wire:model="search"> --}}
    <table class="table border table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Body</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->body}}</td>
                    <td>
                        <button wire:click="delete({{$article->id}})" class="btn btn-danger">Cancella</button>
                        <a href="{{route('articles.edit' , $article->id)}}" class="btn btn-primary">Modifica</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
      </table>
</div>

