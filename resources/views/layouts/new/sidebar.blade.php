<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <a href="{{ asset('/') }}index3.html" class="brand-link">
        <img src="{{ asset('/') }}dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Pakar</span>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-id-card-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            @if ( Auth::user()->role == "ADMIN")
            <li class="nav-item">
                <a href="/symptoms" class="nav-link">
                    <i class="nav-icon fas fa-id-card-alt"></i>
                    <p>
                        Gejala
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/diseases" class="nav-link">
                    <i class="nav-icon fas fa-id-card-alt"></i>
                    <p>
                        Penyakit
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/diagnoses" class="nav-link">
                    <i class="nav-icon fas fa-id-card-alt"></i>
                    <p>
                        Diagnosa
                    </p>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a href="/diagnostic-history" class="nav-link">
                    <i class="nav-icon fas fa-id-card-alt"></i>
                    <p>
                        Riwayat diagnosa
                    </p>
                </a>
            </li>
        </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

</aside>