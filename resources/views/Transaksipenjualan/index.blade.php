@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Menu Data Penjualan
@endsection
@section('content')
<div class="py-6">
    <div class="row mb-6">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="examples" class="mb-4">
                <h2>Log Transaksi Data Penjualan</h2>
            </div>
            <div class="card">
                <div class="d-flex justify-content-around mt-3 mb-3 ms-3 me-3">
                    <div class="col-6 ms-4">
                        <a href="{{ route('transaksi-penjualan.reset') }}"
                            class="m-2 btn btn-outline-danger my-1 btn-sm">
                            <i data-feather="trash"></i> Reset Log Transaksi Penjualan
                        </a>
                    </div>
                    <div class="col-6 me-4">
                        <form action="/transaksi-penjualan" class="d-flex align-items-end">
                            <input type="text" class="form-control" placeholder="Cari Data" name="search" />
                            <div class="ms-2 me-2" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-dark">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr <!-- Tab content -->
                <div class="tab-content p-4" id="pills-tabContent-table">
                    <div class="tab-pane tab-example-design fade show
                      active" id="pills-table-design" role="tabpanel" aria-labelledby="pills-table-design-tab">
                        <!-- Basic table -->
                        <div class="table-responsive">
                            <table class="table table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Jumlah Terjual</th>
                                        <th scope="col">Barang Tersedia</th>
                                        <th scope="col">Jenis Barang</th>
                                        <th scope="col">Dibuat</th>
                                        <th scope="col">Diperbarui</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wtransaksi as $item => $key)
                                    <tr>
                                        <th scope="row">{{ $item + 1 }}</th>
                                        <td>{{ $key->nama_barang }}</td>
                                        <td>{{ $key->stok }}</td>
                                        <td>{{ $key->jumlah_terjual }}</td>
                                        <td>{{ $key->stok - $key->jumlah_terjual }}</td>
                                        <td>{{ $key->jenis_penjualan }}</td>
                                        <td>{{ $key->created_at }}</td>
                                        <td>{{ $key->updated_at }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <div class="d-flex justify-content-end">
                                    {{ $wtransaksi->links('vendor.pagination.custom') }}
                                </div>
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
