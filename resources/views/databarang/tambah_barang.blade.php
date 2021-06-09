@extends('main')
@section('content')
<section class="content" >
<h4><center> Masukan Barang</center></h4>
    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{route('databarang.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Kode Barang</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="kode_barang" required placeholder="masukan kode barang"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nama Barang</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama_barang" required placeholder="nama barang"/>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-9">
        <button class="btn btn-success" type="submit">Tambah</button>
        </div>
        </div>
    </div>
</form>
</div>
@endsection
