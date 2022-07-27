
<form>
    <div class="form-group">
        <label for="code">Kode :</label>
        <input type="text" class="form-control" id="code" placeholder="Masukan kode" wire:model="code">
        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Nama:</label>
        <input class="form-control" id="exampleFormControlInput2" wire:model="name" placeholder="Masukan nama">
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <label for="description">Deskripsi:</label>
        <textarea class="form-control" id="exampleFormControlInput2" wire:model="description" placeholder="Masukan deskripsi"></textarea>
        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
    </div>
    <div class="form-group" wire:ignore>
        <label for="symptoms">Gejala:</label>
        <select class="form-control" id="select2-dropdown" multiple wire:model="diseaseHasSymptoms">
            @foreach($symptoms as $symptom)
                <option value="{{ $symptom->id }}">{{ $symptom->code }} : {{ $symptom->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="button" wire:click.prevent="create()" data-dismiss="modal" class="btn">Tutup</button>
    <button type="button" wire:click.prevent="update()" data-dismiss="modal" class="btn btn-primary">Update</button>
</form>
