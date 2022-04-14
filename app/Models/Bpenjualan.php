<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bpenjualan extends Model
{
    use HasFactory;

    protected $table = 'barang_penjualan';
    protected $fillable = ["nama_barang", "jenis_penjualan_id"];
    public $timestamps = false;

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query
                ->whereHas('jenis_penjualan')
                // ->join('jenis_penjualan', 'barang_penjualan.id ', '=', 'j;enis_penjualan.jenis_penjualan_id')
                ->where('nama_barang', 'like', '%' . $search . '%');
            // ->orwhere('jenis_penjualan', 'like', '%' . $search . '%');
        });
    }

    public function jenis_penjualan()
    {
        return $this->belongsTo('App\Models\Jpenjualan');
    }

    public function transaksi_penjualan()
    {
        return $this->hasMany('App\Models\Tpenjualan');
    }
}