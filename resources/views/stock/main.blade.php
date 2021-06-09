@extends('main')
@section('content')
<section class="content">
    <!-- START DEFAULT DATATABLE -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Data Stok Barang </h3><br><br>
            {{--  <a href="{{route('supplier.create')}}" class="btn btn-success">Tambah Supplier</a>  --}}


            <ul class="panel-controls">
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
        </div>

        <div class="panel-body">
            <table class="table datatable">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Jumlah Total Barang Masuk</th>
                        <th>Jumlah Total Barang Keluar</th>
                        <th>Stok Saat Ini</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($new_barang as $new)
                    <tr>
                        <td>{{$new->nama_barang}}</td>
                        <td>{{$new->total_barang_masuk}}</td>
                        <td>{{$new->total_barang_keluar}}</td>
                        <td>{{$new->stock}}</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END DEFAULT DATATABLE -->

</section>
@endsection
