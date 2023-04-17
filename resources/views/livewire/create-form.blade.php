<div>
   
<form wire:submit.prevent="createArticle">
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" wire:model="title" >
    </div>

    <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" wire:model="description">
    </div>

    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea class="form-control" cols="30" rows="10" wire:model="body"></textarea>   
     </div>

     <button type="submit" class="btn btn-danger" > Submit</button>

</form>

</div>
