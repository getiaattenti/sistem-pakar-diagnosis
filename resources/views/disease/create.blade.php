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
    <div class="form-group" wire:ignore>
        <label for="exampleFormControlInput2">Gejala:</label>
        <select class="form-control" id="select2-dropdown" multiple wire:model="diseaseHasSymptoms">
            @foreach($symptoms as $symptom)
                <option value="{{ $symptom->id }}">{{ $symptom->code }} : {{ $symptom->name }}</option>
            @endforeach
        </select>
    </div>
    <button wire:click.prevent="store()" id="save-btn" class="btn btn-success">Save</button>
</form>

