<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class globalController extends Controller
{
    public static function updateStock(int $id,int $stock){
        try {
            // sleep(10);
            Barang::where("kode_barang",$id)->update(["stock"=>$stock]);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
