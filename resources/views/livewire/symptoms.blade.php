<div>

    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#symptoms-modal">
        Tambah
    </button>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($symptoms as $symptom)
            <tr>
                <td>{{ $symptom->id }}</td>
                <td>{{ $symptom->code }}</td>
                <td>{{ $symptom->name }}</td>
                <td>
                    <button wire:click="edit({{ $symptom->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $symptom->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @include('symptoms.create')
</div>
