<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts.head")
    <title>Aplikasi Data Penjualan | Halaman 404 error </title>
</head>

<body>
    <!-- Error page -->
    <div class="container min-vh-100 d-flex justify-content-center
      align-items-center">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <!-- content -->
                <div class="text-center">
                    <div class="mb-3">
                        <!-- img -->
                        <img src="../assets/images/error/404-error-img.png" alt="" class="img-fluid">
                    </div>
                    <!-- text -->
                    <h1 class="display-4 fw-bold">Oops! the page not found.</h1>
                    <p class="mb-4">Buka Halaman yang sudah di sediakan jika, ingin fitur atau menu tambahan bisa
                        hubungi
                        saya, untuk info tentang saya bisa klik tautan ini. <br><a href="{{ url('about-me') }}">Creator
                            : Eko
                            Muchamad
                            Haryono</a>
                    </p>
                    <!-- button -->
                    <a href="{{ url('/') }}" class="btn btn-primary">Pergi Ke dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    @include("layouts.scripts")
</body>

</html>
