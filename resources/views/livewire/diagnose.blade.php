<div>
    <div class="form-group" wire:ignore>
        <label for="exampleFormControlInput2">User :</label>
        <select class="form-control" id="select2-dropdown" wire:model="user">
            <option value="">Pilih User</option>
            @foreach($users as $user)
                <option value="{{ $user }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    @foreach($symptoms as $symptom)
    <div class="mt-1">
        <label class="inline-flex items-center">
        <input type="checkbox" value="{{ $symptom->id }}" wire:model="selectedtypes" class="form-checkbox h-6 w-6 text-green-500">
            <span class="ml-3 text-sm">{{ $symptom->name }}</span>
        </label>
    </div>
    @endforeach
    <button wire:click="diagnose" class="btn btn-success">Save</button>
</div>  
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#select2-dropdown').select2();
            $('#select2-dropdown').on('change', function (e) {
                let data = $(this).val();
                @this.set('user', data);
            });
        });  
    </script>
@endpush