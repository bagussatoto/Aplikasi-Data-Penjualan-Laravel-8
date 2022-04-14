@extends('layouts.master')
@push('style')
@endpush
@section('judul')
Aplikasi Data Penjualan
@endsection
@section('judul_sub')
Menu Tambahan
@endsection
@section('content')
<div class="py-6">
    <div class="row mb-6">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div id="examples" class="mb-4">
                <h2>Dokumentasi Singkat</h2>
            </div>
            <div class="card">
                <div class="container-fluid text-dark">
                    <div class="h3 text-center mt-4 mb-4" class="fw-bold">Aplikasi Data Penjualan</div>
                    <div class="fw-bold">Penjelasan :</div>
                    <div class="mb-4">Aplikasi Berbasis Web Data Penjualan dengan Menggunakan Laravel 8, Yang Bertujuan
                        Untuk Presentasi Kepada Tester. Aplikasi Berbasis Web Data Penjualan dengan Laravel 8 adalah
                        aplikasi yang berfungsi untuk melakukan pendataan penjualan.</div>
                    <div class="fw-bold">Alat yang digunakan dalam aplikasi :</div>
                    <div>
                        <ol class="list-group-numbered">
                            <li>Menggunakan ReactJs/VueJs/NodeJs/AngularJs (Framework CI/Laravel/Lumen)</li>
                            <li>Menggunakan database mysql/mssql/Postgree</li>
                        </ol>
                    </div>
                    <div class="fw-bold">Spesifikasi Aplikasi :</div>
                    <ol class="list-group-numbered">
                        <li>Lakukan normalisasi terhadap data diatas dengan menerapkannya di database</li>
                        <li>
                            Buatlah backend & frontend CRUD (Create Read Update Delete) untuk data table hasil dari
                            soal 1
                        </li>
                        <li>
                            Buatlah backend & frontend dengan adanya fitur searching dan bisa mengurutkan data
                            berdasarkan nama barang, tanggal transaksi
                        </li>
                        <li>
                            Buatlah backend & frontend untuk membandingkan jenis barang dengan menampilkan data
                            transaksi terbanyak terjual atau terendah
                        </li>
                        <li>
                            Buatlah filter terhadap soal 4 untuk memilih rentang waktu tertentu
                        </li>
                    </ol>

                    <div class="fw-bold">Tambahan :</div>
                    <div>
                        <ol class="list-group-numbered">
                            <li>Menggunakan interface API agar aplikasi lain dapat mengambil data secara terprogram dan
                                terstruktur</li>
                            <li>Tampilan frontend(UI/UX) menjadi point tambahan jika aplikasi berjalan sesuai bagaimana
                                mestinya</li>
                            <li>Hasil codenya dipublish di repository git (github/gitlab)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
    @endsection
