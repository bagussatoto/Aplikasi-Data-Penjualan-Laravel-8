@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Dashboard
@endsection
@section('content')
<div class="bg-dark pt-10 pb-21"></div>
<div class="container-fluid mt-n22 px-6">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mb-2 mb-lg-0">
                        <h3 class="mb-0 fw-bold text-white">Aplikasi Data Penjualan</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Jenis Data</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>

                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $jpenjualancount }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $jpenjualancount }}</span>Jumlah Jenis Data
                            Penjualan
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('jenis-penjualan.index') }}" class="btn btn-dark">Menu Jenis Data</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Barang</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $bpenjualancount }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $bpenjualancount }}</span>Jumlah Barang Data
                            Penjualan</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('barang-penjualan.index') }}" class="btn btn-dark">Menu Barang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Master</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $mpenjualancount }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $mpenjualancount }}</span>Jumlah Master Data
                            Penjualan
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('master-penjualan.index') }}" class="btn btn-dark">Menu Master</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                    mb-3">
                        <div>
                            <h4 class="mb-0">Data Transaksi</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                      rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $wtransaksicount }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $wtransaksicount }}</span>Jumlah Data
                            Log
                            Transaksi</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('transaksi-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Stok Barang Terbanyak</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>

                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $maxstok }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $maxstok }}</span>Jumlah Stok Barang
                            Terbanyak
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('jenis-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Barang Terjual Terbanyak</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $maxterjual }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $maxterjual }}</span>Jumlah Barang Data
                            Penjualan</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('barang-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Stok Barang Terendah</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $minstok }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $minstok }}</span>Jumlah Stok Barang
                            Terendah
                        </p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('master-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
            <!-- card -->
            <div class="card rounded-3">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center
                        mb-3">
                        <div>
                            <h4 class="mb-0">Barang Terjual Terendah</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-dark
                          rounded-1">
                            <i data-feather="database" class="fs-4"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">{{ $minterjual }}</h1>
                        <p class="mb-0"><span class="text-dark me-2">{{ $minterjual }}</span>Jumlah Barang Terjual
                            Terendah</p>
                    </div>
                    <div class="mt-5">
                        <a href="{{ route('transaksi-penjualan.index') }}" class="btn btn-dark">Menu Transaksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row  -->
    <div class="row mt-6">
        <div class="col-md-12 col-12">
            <!-- card  -->
            <div class="card">
                <!-- card header  -->
                <div class="card-header bg-white border-bottom-0 py-4">
                    <h4 class="mb-0">Log Transaksi Data Penjualan</h4>
                </div>
                <!-- table  -->
                <div class="table-responsive text-center">
                    <table class="table text-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Jumlah Terjual</th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Dibuat</th>
                                <th scope="col">Diperbarui</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wtransaksi as $wt => $key)
                            <tr>
                                <th scope="row">{{ $wt + 1 }}</th>
                                <td>{{ $key->nama_barang }}</td>
                                <td>{{ $key->stok }}</td>
                                <td>{{ $key->jumlah_terjual }}</td>
                                <td>{{ $key->jenis_penjualan }}</td>
                                <td>{{ $key->created_at }}</td>
                                <td>{{ $key->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- card footer  -->
                <div class="card-footer bg-white text-center">
                    <a class="text-dark" href="{{ route('transaksi-penjualan.index') }}">Lihat Semua Log Transaksi</a>
                </div>
            </div>
        </div>
    </div>
    <!-- row  -->
    <div class="row my-6">
    </div>
</div>

@push('scripts')
@endpush
@endsection
