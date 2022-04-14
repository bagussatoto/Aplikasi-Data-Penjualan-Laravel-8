<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jpenjualan extends Model
{
    use HasFactory;

    protected $table = 'jenis_penjualan';
    protected $fillable = ["jenis_penjualan", "created_at", "updated_at"];

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('jenis_penjualan', 'like', '%' . $search . '%')
                ->orWhere('created_at', 'like', '%' . $search . '%')
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

    public function barang_penjualan()
    {
        return $this->hasMany('App\Models\Bpenjualan');
    }
}