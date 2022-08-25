@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-6">
                <h1>Diagnosa Penyakit</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card card-info">
            <div class="card-header">
            <h3 class="card-title">Hasil Penyakit</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        Nama Pasien : 
                    </div>
                    <div class="col">
                        {{ $diagnose->user }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Diagnosis Penyakit :
                    </div>
                    <div class="col">
                        <h3>
                            {{ $disease->name }} / <span style="color:blue;">{{ ($diagnose->percentages)*100 }} % ({{ $diagnose->percentages }})</span>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        {{ $disease->description }}
                    </div>
                </div>
            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Saran</h3>
            </div>
            <div class="card-body">
              {{ $disease->suggestion }}
            </div>
          </div>
    </section>
@endsection