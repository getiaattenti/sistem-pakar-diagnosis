@extends('app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <h1>Blank Page</h1>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">Title</h3>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @livewire('posts')
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection