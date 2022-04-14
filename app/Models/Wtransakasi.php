<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wtransakasi extends Model
{
    use HasFactory;

    protected $table = 'waktu_transaksi';
    protected $fillable = ["nama_barang", "jenis_penjualan", "stok", "jumlah_terjual", "created_at", "updated_at"];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_barang', 'like', '%' . $search . '%')
                ->orwhere('created_at', 'like', '%' . $search . '%')
                ->orWhere('updated_at', 'like', '%' . $search . '%');
        });
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y H:i:s');
    }

    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['updated_at'])->translatedFormat('l, d F Y H:i:s');
    }
}