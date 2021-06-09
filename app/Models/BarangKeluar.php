<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;
    protected $fillable = [

        'kode_barang',
        'jumlah_keluar',
        'keluar_kemana'

    ];
    public function supplier(){
        return $this->belongsTo(supplier::class, 'id');
    }
    public function product(){
        return $this->belongsTo(Barang::class, 'kode_barang','kode_barang');
    }
}
