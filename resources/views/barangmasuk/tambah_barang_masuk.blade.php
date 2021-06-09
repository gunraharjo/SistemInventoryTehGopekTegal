@extends('main')
@section('content')
<section class="content" >
<h4><center> Masukan Data Barang Masuk</center></h4>
    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{route('barangmasuk.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-11">
        <label class="col-md-2 col-xs-1 control-label">Nama Supplier</label>
        <div class="col-md-2 col-xs-6">
            <select class="form-control select" name="nama_supplier">
                <option>-- Pilih Supplier --</option>
                @foreach ($supplier as $sup)
                    <option value="{{ $sup->nama_supplier }}"> {{ $sup->nama_supplier}}
                    </option>
                @endforeach
            </select>
        </div>
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
                <label class="col-md-3 control-label">Jumlah Barang Masuk</label>
                <div class="col-md-3">
                    <input type="number" class="form-control" name="jumlah_masuk" required placeholder="Jumlah barang Masuk"/>
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
