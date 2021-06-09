@extends('main')
@section('content')
<section class="content">
    <!-- START DEFAULT DATATABLE -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Barang Keluar</h3><br><br>
            <a href="{{route('barangkeluar.create')}}" class="btn btn-success">Tambah Barang Keluar</a>



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
                        <th>Nama Barang</th>
                        <th>Jumlah Barang Keluar</th>
                        <th>Keluar Kemana</th>
                        <th>Tanggal Keluar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keluar as $k )
                    <tr>
                        <td>{{$k->product->nama_barang}}</td>
                        <td>{{$k->jumlah_keluar}}</td>
                        <td>{{$k->keluar_kemana}}</td>
                        <td>{{$k->created_at}}</td>


                        <form method="POST" action="{{route('barangkeluar.destroy', $k->id)}}">
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
