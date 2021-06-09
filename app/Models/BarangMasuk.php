<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_supplier',
        'kode_barang',
        'jumlah_masuk'
    ];
    // public function supplier(){
    //     return $this->belongsTo(supplier::class, 'id');
    // }
    public function Barang(){
        return $this->belongsTo(Barang::class, 'kode_barang',"kode_barang");
    }

}
