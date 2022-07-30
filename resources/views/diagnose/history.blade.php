@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <h1>Riwayat Diagnosa</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Riwayat Diagnosa</h3>
            </div>
            <div class="card-body">
                @livewire('history')
            </div>
        </div>
    </section>
@endsection