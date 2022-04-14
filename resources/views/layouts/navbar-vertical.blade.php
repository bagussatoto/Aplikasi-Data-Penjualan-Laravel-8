<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="#">
            <div class="h3 text-white text-center">Aplikasi Data <br>Penjualan</div>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow {{ ($active === "dashboard") ? 'active' : '' }}" href="{{ url('/') }}">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Menu Penjualan</div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "jenis_penjualan") ? 'active' : '' }}"
                    href="{{ route('jenis-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Jenis Barang
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "barang_penjualan") ? 'active' : '' }}"
                    href="{{ route('barang-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Barang
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "master_penjualan") ? 'active' : '' }}"
                    href="{{ route('master-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Master Penjualan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "transaksi_penjualan") ? 'active' : '' }}"
                    href="{{ route('transaksi-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Data Log Transaksi
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "perbandingan_penjualan") ? 'active' : '' }}"
                    href="{{ route('perbandingan-penjualan.index') }}">
                    <i data-feather="database" class="nav-icon icon-xs me-2">
                    </i>
                    Perbandingan Jenis Data
                </a>
            </li>

            <li class="nav-item">
                <div class="navbar-heading">Menu Tambahan</div>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "about_me") ? 'active' : '' }}" href="{{ url('about-me') }}">
                    <i data-feather="user" class="nav-icon icon-xs me-2">
                    </i>
                    Pembuat Website
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ ($active === "dokumentasi_web") ? 'active' : '' }}"
                    href="{{ url('dokumentasi-web') }}">
                    <i data-feather="book" class=" nav-icon icon-xs me-2">
                    </i>
                    Dokumentasi Singkat
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Documentation</div>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://github.com/ekomh170" target="_blank">
                    <i data-feather="user" class="nav-icon icon-xs me-2">
                    </i> My Portfolio
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://github.com/ekomh170" target="_blank">
                    <i data-feather="github" class="nav-icon icon-xs me-2">
                    </i> My Github
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://gitlab.com/ekomh170">
                    <i data-feather="gitlab" class="nav-icon icon-xs me-2" target="_blank">
                    </i> My Gitlab
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow @@if (context.page === 'docs') { active }"
                    href="https://github.com/ekomh170/aplikasi_data_penjualan.git">
                    <i data-feather="book" class="nav-icon icon-xs me-2" target="_blank">
                    </i> Dokumentasi
                </a>
            </li>
        </ul>
    </div>
</nav>
