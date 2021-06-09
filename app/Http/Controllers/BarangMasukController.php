<?php

namespace App\Http\Controllers;

use App\Jobs\barang_masuk_job;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $masuk= barangmasuk::with("barang")->get();
        $total = barangmasuk::all()->count('jumlah_masuk');
        return view('barangmasuk.main',compact('masuk','total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $supplier = supplier::all();
        $barang = Barang::all();
        return view('barangmasuk.tambah_barang_masuk',compact('supplier','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
                $data = [
                    'nama_supplier' => $request->nama_supplier,
                    'kode_barang' => $request->kode_barang,
                    'jumlah_masuk'=>$request->jumlah_masuk
                ];

              $barang =  BarangMasuk::create($data);
              $tbl_barang = Barang::where("kode_barang",$request->kode_barang)->first();
              $stock_sekarang = $tbl_barang->stock + $request->jumlah_masuk;

              globalController::updateStock($barang->kode_barang,$stock_sekarang); //slow run

            // barang_masuk_job::dispatch(["id"=>$barang->kode_barang,"stock"=>$stock_sekarang]); //fast run
            return redirect()->route('barangmasuk.index');
        } catch (\Throwable $th) {
            return Redirect::back()->withErrors([$th->getMessage()]);
        }

    }
    public function barangmasuk(Request $request){
        $barangmasuk= [
            'nama_supplier' => $request->nama_supplier,
            'kode_barang' => $request->kode_barang,
            'jumlah_masuk'=>$request->jumlah_masuk
        ];
        return $barangmasuk;
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
        $barangmasuk = barangmasuk::find($id);
        $barangmasuk->delete();
        return back();
    }
}
