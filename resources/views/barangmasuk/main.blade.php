@extends('main')
@section('content')
<section class="content">
    <!-- START DEFAULT DATATABLE -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Barang Masuk</h3><br><br>
            <a href="{{route('barangmasuk.create')}}" class="btn btn-success">Tambah Barang Masuk</a>
            <a href="{{route('databarang.create')}}" class="btn btn-success">Tambah Data Barang</a>


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
                        <th>Supplier</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang Masuk</th>
                        <th>Tanggal Masuk</th>

                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masuk as $m )
                    <tr>
                        <td>{{$m->nama_supplier}}</td>
                        <td>{{$m->barang->nama_barang}}</td>
                        <td>{{$m->jumlah_masuk}}</td>
                        <td>{{$m->created_at}}</td>

                        <form method="POST" action="{{route('barangmasuk.destroy', $m->id)}}">
                            @csrf
                            @method('DELETE')
                            <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>
                          </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END DEFAULT DATATABLE -->

</section>
@endsection
