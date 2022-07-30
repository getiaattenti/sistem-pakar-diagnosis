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
                <th>Saran</th>
                <th width="150px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($diseases as $disease)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $disease->code }}</td>
                <td>{{ $disease->name }}</td>
                <td>{{ $disease->description }}</td>
                <td>{{ $disease->suggestion }}</td>
                <td>
                    <button wire:click="edit({{ $disease->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $disease->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#select2-dropdown').select2();
            $('#select2-dropdown').on('change', function (e) {
                let data = $(this).val();
                @this.set('diseaseHasSymptoms', data);
            });
            window.addEventListener('reset-form', event => {
                $('#select2-dropdown').val('').change();
            })

            window.addEventListener('update-form', event => {
                $('#select2-dropdown').val(event.detail.diseaseHasSymptoms).change();
            })
        });  
    </script>
@endpush