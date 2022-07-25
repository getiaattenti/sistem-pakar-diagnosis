<div>
    <div class="form-group">
        <label for="exampleFormControlInput1New">Nama : </label>
        <input type="text" class="form-control" id="exampleFormControlInput1New" placeholder="Masukan nama" wire:model.defer="name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2New">Kode : </label>
        <input type="text" class="form-control" id="exampleFormControlInput2New" wire:model.defer="code" placeholder="Masukan kode">
    </div>
    <button type="button" wire:click.prevent="create()" data-dismiss="modal" class="btn">Tutup</button>
    <button type="button" wire:click.prevent="update()" data-dismiss="modal" class="btn btn-primary">Update</button>
</div>
