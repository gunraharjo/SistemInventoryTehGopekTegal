<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\Supplier;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BarangKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $keluar= BarangKeluar::with('product')->get();
        return view('barangkeluar.main',compact('keluar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = Supplier::all();
        $barang = Barang::all();

        return view('barangkeluar.tambah_barang_keluar',compact('supplier','barang'));
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
        try {
           $barang = Barang::where("kode_barang",$request->kode_barang)->first();
           if ($barang->stock < $request->jumlah_keluar) {
               throw new Error("Stock kurang dari {$request->jumlah_keluar}");
           }
            BarangKeluar::create($this->barangkeluar($request));
           $stoksekarang = $barang->stock - $request->jumlah_keluar;
           globalController::updateStock($barang->kode_barang,$stoksekarang);
        return redirect()->route('barangkeluar.index');
        } catch (\Throwable $th) {
            return Redirect::back()->withErrors([$th->getMessage()]);
        }

    }
    public function barangkeluar(Request $request){
        $barangkeluar= [
            'kode_barang' => $request->kode_barang,
            'jumlah_keluar'=>$request->jumlah_keluar,
            'keluar_kemana'=>$request->keluar_kemana
        ];
        return $barangkeluar;
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
        $barangkeluar = barangkeluar::find($id);
        $barangkeluar->delete();
        return back();
    }
}
