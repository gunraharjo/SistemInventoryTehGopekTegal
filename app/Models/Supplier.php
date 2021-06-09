<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_telp'

    ];
    public function barangmasuk()
    {
        return $this->hasMany(barangmasuk::class);
    }
    public function barangkeluar()
    {
        return $this->hasMany(barangkeluar::class);
    }
}
