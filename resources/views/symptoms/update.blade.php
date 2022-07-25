<div class="modal" id="symptoms-modal">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Update Gejala</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama : </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan nama" wire:model.defer="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput2">Kode : </label>
                <input type="text" class="form-control" id="exampleFormControlInput2" wire:model.defer="code" placeholder="Masukan kode">
            </div>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Update</button>
    </div>
</div>