<div>

    @if ($updateMode)
        @include('disease.update')
    @else
        @include('disease.create')
    @endif

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diseases as $disease)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $disease->code }}</td>
                <td>{{ $disease->name }}</td>
                <td>{{ $disease->name }}</td>
                <td>
                    <button wire:click="edit({{ $disease->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $disease->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>