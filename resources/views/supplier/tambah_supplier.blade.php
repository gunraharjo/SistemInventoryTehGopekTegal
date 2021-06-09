@extends('main')
@section('content')
<section class="content" >
<h4><center> Masukan Nama Supplier</center></h4>
    <form enctype="multipart/form-data" class="form-horizontal" role="form" action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 control-label">Nama Supplier</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="nama_supplier" required placeholder="masukan nama supplier"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Alamat</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="alamat" required placeholder="alamat"/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Nomor Telepon</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="no_telp" required placeholder="nomor telepon"/>
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
