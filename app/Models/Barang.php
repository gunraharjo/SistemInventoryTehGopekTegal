<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        "stock"
    ];
    public function barangmasuk()
    {
        return $this->hasMany(barangmasuk::class,"kode_barang","kode_barang");
    }
    public function barangkeluar()
    {
        return $this->hasMany(barangkeluar::class,"kode_barang","kode_barang");
    }
}
