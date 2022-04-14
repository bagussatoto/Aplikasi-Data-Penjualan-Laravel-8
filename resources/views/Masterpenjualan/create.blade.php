@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Form Data Penjualan
@endsection
@section('content')

<div class="row">
    <div class="offset-xl-1 col-xl-10 col-lg-12 col-md-12 col-sm-12 col-12">
        <!-- Content -->
        <div class="docs-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb-7" id="intro">
                        <h1 class="mb-2">Tambah Data Master Penjualan</h1>
                    </div>
                </div>
            </div>

            <!-- basic-forms -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="d-flex justify-content-center mt-3 mb-3 ms-3 me-3">
                            <div class="col-4 ms-4">
                                <a href="{{ route('jenis-penjualan.create') }}"
                                    class="m-2 btn btn-outline-success my-1 btn-sm">
                                    <i data-feather="plus"></i> Tambah Data Jenis Penjualan
                                </a>
                            </div>
                            <div class="col-4 me-4">
                                <a href="{{ route('barang-penjualan.create') }}"
                                    class="m-2 btn btn-outline-success my-1 btn-sm">
                                    <i data-feather="plus"></i> Tambah Data Barang Penjualan
                                </a>
                            </div>
                        </div>
                        <hr>
                        <!-- Tab content -->
                        <div class="tab-content p-4" id="pills-tabContent-basic-forms">
                            <div class="tab-pane tab-example-design fade show active" id="pills-basic-forms-design"
                                role="tabpanel" aria-labelledby="pills-basic-forms-design-tab">
                                <form action="/master-penjualan" method="POST">
                                    @csrf
                                    <!-- Input -->
                                    @error('nama_barang_id')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label" for="selectOne">Nama Barang</label>
                                        <select id="selectOne" class="form-select" name="nama_barang_id">
                                            <option>Masukan Nama Barang</option>
                                            @foreach ($barang_penjualan as $bp)
                                            <option value="{{ $bp->id }}">{{ $bp->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Jumlah Stok</label>
                                        <input type="number" id="stok" class="form-control"
                                            placeholder="Masukan Jumlah Stok" name="stok">
                                    </div>

                                    @error('jumlah_terjual')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="mb-3">
                                        <label class="form-label" for="textInput">Jumlah Terjual</label>
                                        <input type="number" id="jumlah_terjual" class="form-control"
                                            placeholder="Masukan Jumlah Stok" name="jumlah_terjual">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-outline-success">Submit</button>
                                        </div>
                                        <div class="col-3">
                                            <a href="{{ route('master-penjualan.index') }}"
                                                class="btn btn-outline-danger text-end">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
@endpush
@endsection
