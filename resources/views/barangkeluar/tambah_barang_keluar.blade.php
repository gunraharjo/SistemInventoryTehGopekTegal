@extends('main')
@section('content')
<section class="content" >

<h4><center> Masukan Data Barang Keluar</center></h4>
    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{route('barangkeluar.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-11">

        <div class="col-md-11">
            <label class="col-md-2 col-xs-1 control-label">Nama Barang</label>
            <div class="col-md-3 col-xs-6">
                <select class="form-control select" name="kode_barang">
                    <option>-- Pilih Barang --</option>
                    @foreach ($barang as $bar)
                        <option value="{{ $bar->kode_barang }}"> {{ $bar->nama_barang}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Jumlah Barang Keluar</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="jumlah_keluar" required placeholder="Jumlah barang keluar"/>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Keluar Kemana</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="keluar_kemana" required placeholder="keluar kemana"/>
                </div>
            </div>
        <div class="form-group">
        <label class="col-md-6 control-label"></label>
        <div class="col-md-6">
        <button class="btn btn-success" type="submit">Tambah</button>
        </div>
        </div>
    </div>
</form>
</div>
@endsection
