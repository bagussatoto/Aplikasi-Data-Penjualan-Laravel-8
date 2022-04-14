<?php

namespace Database\Seeders;


use App\Models\Jpenjualan;
use App\Models\Bpenjualan;
use App\Models\Tpenjualan;
use App\Models\Wtransakasi;
use DateTime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Barang
        Bpenjualan::create([
            'nama_barang' => 'Kopi',
            'jenis_penjualan_id' => '1',
        ]);

        Bpenjualan::create([
            'nama_barang' => 'Pasta Gigi',
            'jenis_penjualan_id' => '2',
        ]);

        Bpenjualan::create([
            'nama_barang' => 'Sabun Mandi',
            'jenis_penjualan_id' => '2',
        ]);

        Bpenjualan::create([
            'nama_barang' => 'Sampo',
            'jenis_penjualan_id' => '2',
        ]);

        Bpenjualan::create([
            'nama_barang' => 'Teh',
            'jenis_penjualan_id' => '1',
        ]);
        //Barang

        //jenis_penjualan
        Jpenjualan::create([
            'jenis_penjualan' => 'Konsumsi',
        ]);

        Jpenjualan::create([
            'jenis_penjualan' => 'Pembersih',
        ]);
        //jenis_penjualan

        //Transaksi
        Tpenjualan::create([
            'stok' => '90',
            'jumlah_terjual' => '15',
            'nama_barang_id' => '1',
            'created_at' => date('2021-10-05'),
            'updated_at' => date('2021-10-05'),
        ]);

        Tpenjualan::create([
            'stok' => '100',
            'jumlah_terjual' => '20',
            'nama_barang_id' => '3',
            'created_at' => date('2021-11-05'),
            'updated_at' => date('2021-11-05'),
        ]);

        Tpenjualan::create([
            'stok' => '100',
            'jumlah_terjual' => '30',
            'nama_barang_id' => '4',
            'created_at' => date('2021-11-05'),
            'updated_at' => date('2021-11-05'),
        ]);

        Tpenjualan::create([
            'stok' => '100',
            'jumlah_terjual' => '25',
            'nama_barang_id' => '5',
            'created_at' => date('2021-12-05'),
            'updated_at' => date('2021-12-05'),
        ]);

        Tpenjualan::create([
            'stok' => '81',
            'jumlah_terjual' => '5',
            'nama_barang_id' => '2',
            'created_at' => date('2021-12-05'),
            'updated_at' => date('2021-12-05'),
        ]);
        //Transaksi Penjualan

        //Waktu Transaksi
        Wtransakasi::create([
            'stok' => '100',
            'jumlah_terjual' => '10',
            'nama_barang' => 'Kopi',
            'created_at' => date('2021-1-05'),
            'updated_at' => date('2021-1-05'),
            'jenis_penjualan' => 'Konsumsi',
        ]);

        Wtransakasi::create([
            'stok' => '100',
            'jumlah_terjual' => '19',
            'nama_barang' => 'Pasta Gigi',
            'created_at' => date('2021-5-05'),
            'updated_at' => date('2021-5-05'),
            'jenis_penjualan' => 'Pembersih',

        ]);

        Wtransakasi::create([
            'stok' => '90',
            'jumlah_terjual' => '15',
            'nama_barang' => 'Kopi',
            'created_at' => date('2021-10-05'),
            'updated_at' => date('2021-10-05'),
            'jenis_penjualan' => 'Konsumsi',

        ]);

        Wtransakasi::create([
            'stok' => '100',
            'jumlah_terjual' => '20',
            'nama_barang' => 'Sabun Mandi',
            'created_at' => date('2021-11-05'),
            'updated_at' => date('2021-11-05'),
            'jenis_penjualan' => 'Pembersih',
        ]);

        Wtransakasi::create([
            'stok' => '100',
            'jumlah_terjual' => '30',
            'nama_barang' => 'Sampo',
            'created_at' => date('2021-11-05'),
            'updated_at' => date('2021-11-05'),
            'jenis_penjualan' => 'Pembersih',

        ]);

        Wtransakasi::create([
            'stok' => '100',
            'jumlah_terjual' => '25',
            'nama_barang' => 'Teh',
            'created_at' => date('2021-12-05'),
            'updated_at' => date('2021-12-05'),
            'jenis_penjualan' => 'Konsumsi',

        ]);

        Wtransakasi::create([
            'stok' => '81',
            'jumlah_terjual' => '5',
            'nama_barang' => 'Pasta Gigi',
            'created_at' => date('2021-12-05'),
            'updated_at' => date('2021-12-05'),
            'jenis_penjualan' => 'Pembersih',
        ]);
        //Transaksi
    }
}