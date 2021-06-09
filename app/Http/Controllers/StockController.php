<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $barang = Barang::with('barangmasuk','barangkeluar')->get();
        $new_barang = [];

        foreach ($barang as $key => $value) {
            $countbm = 0;
            $countbk= 0;
            foreach ($value["barangmasuk"] as $key => $bm) {
                $countbm += $bm->jumlah_masuk;
            }
            foreach ($value["barangkeluar"] as $key => $bk) {
                $countbk += $bk->jumlah_keluar;
            }

            $sementara = $value;
            $sementara ["total_barang_keluar"] = $countbk;
            $sementara["total_barang_masuk"] = $countbm;
            array_push($new_barang,$sementara);
        }
        // dd($new_barang);
        return view('stock.main',compact('new_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
