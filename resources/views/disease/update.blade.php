
<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Kode :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan kode" wire:model="code">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Nama:</label>
        <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="name" placeholder="Masukan nama">
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Deskripsi:</label>
        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Masukan deskripsi"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <button type="button" wire:click.prevent="create()" data-dismiss="modal" class="btn">Tutup</button>
    <button type="button" wire:click.prevent="update()" data-dismiss="modal" class="btn btn-primary">Update</button>
</form>