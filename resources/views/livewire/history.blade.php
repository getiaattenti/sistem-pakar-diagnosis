<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Diagnosa Penyakit</th>
            <th>Saran</th>
            <th width="150px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($diagnosis as $diagnosa)
        <tr>
            <td>{{ ++$index }}</td>
            <td>{{ $diagnosa->user }}</td>
            <td>{{ $diagnosa->out_disease->name }}</td>
            <td>{{ $diagnosa->out_disease->suggestion }}</td>
            <td>
                <button wire:click="detail({{ $diagnosa->id }})" class="btn btn-primary btn-sm">Detail</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>