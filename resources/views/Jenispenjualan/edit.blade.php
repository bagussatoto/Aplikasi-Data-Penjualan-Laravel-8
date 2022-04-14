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
                        <h1 class="mb-2">Edit Data Penjualan</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <!-- Card -->
                    <div class="card">
                        <div class="d-flex justify-content-center mt-3 mb-3 ms-3 me-3">
                            <div class="col-4 ms-4">
                                <a href="{{ route('master-penjualan.create') }}"
                                    class="m-2 btn btn-outline-success my-1 btn-sm">
                                    <i data-feather="plus"></i> Tambah Data Master Penjualan
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
                                <form action="/jenis-penjualan/{{ $jpenjualan->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <!-- Input -->
                                    <div class="mb-3">
                                        @error('jenis_penjualan')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                        <label class="form-label" for="textInput">Jenis Penjualan</label>
                                        <input type="text" id="jenis_penjualan" class="form-control"
                                            placeholder="Masukan Jenis Penjualan" name="jenis_penjualan"
                                            value="{{ $jpenjualan->jenis_penjualan }}">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-outline-success">Submit</button>
                                        </div>
                                        <div class="col"></div>
                                        <div class="col-3">
                                            <a href="{{ route('jenis-penjualan.index') }}"
                                                class="btn btn-outline-warning text-end">Kembali</a>
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
