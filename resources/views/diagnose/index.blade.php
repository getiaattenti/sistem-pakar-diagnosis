@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <h1>Diagnosa Penyakit</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Diagnosa penyakit</h3>
            </div>
            <div class="card-body">
                @livewire('diagnose')
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
@endsection