<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')

    <title>@yield('judul') | @yield('judul_sub')</title>
</head>

<body>
    @include('sweetalert::alert')
    <div id="db-wrapper">
        <!-- navbar vertical -->
        @include('layouts.navbar-vertical')
        <!-- Page content -->
        <div class="preloader">
            <div class="loading">
                <img src="{{ asset('assets/images/preloader/preloader.gif') }}" width="80">
                <div class="fw-bold text-dark">Harap Tunggu</div>
            </div>
        </div>
        <div id="page-content">
            @include('layouts.header')
            <!-- Container fluid -->
            <div class="container-fluid px-6 py-4">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="border-bottom pb-4">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 fw-bold">@yield('judul_sub')</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @include('layouts.scripts')


</body>

</html>
