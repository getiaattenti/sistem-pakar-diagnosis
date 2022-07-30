

<div>
    @foreach($symptoms as $symptom)
    <div class="mt-1">
        <label class="inline-flex items-center">
        <input type="checkbox" value="{{ $symptom->id }}" wire:model="selectedtypes" class="form-checkbox h-6 w-6 text-green-500">
            <span class="ml-3 text-sm">{{ $symptom->name }}</span>
        </label>
    </div>
    @endforeach
    <button wire:click="diagnose" id="lalala" class="btn btn-success">Save</button>
</div>  

