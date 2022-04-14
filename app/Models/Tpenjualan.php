<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tpenjualan extends Model
{
    use HasFactory;

    protected $table = 'transaksi_penjualan';
    protected $fillable = ["stok", "jumlah_terjual", "nama_barang_id"];

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            function ($query, $search) {
                return $query
                    ->whereHas('barang_penjualan')
                    ->join('barang_penjualan', 'barang_penjualan.id', '=', 'transaksi_penjualan.nama_barang_id')
                    ->where('nama_barang', 'like', '%' . $search . '%')
                    ->orwhere('created_at', 'like', '%' . $search . '%')
                    ->orWhere('updated_at', 'like', '%' . $search . '%');
                // ->join('jenis_penjualan', 'jenis_penjualan.id', '=', 'barang_penjualan.jenis_penjualan_id');
            }
        );
    }


    public function barang_penjualan()
    {
        return $this->belongsTo('App\Models\Bpenjualan', 'nama_barang_id');
    }
}