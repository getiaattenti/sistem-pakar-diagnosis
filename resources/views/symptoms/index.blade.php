@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <h1>Gejala Penyakit</h1>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Gejala penyakit</h3>
            </div>
            <div class="card-body">
                @livewire('symptoms')
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
@endsection