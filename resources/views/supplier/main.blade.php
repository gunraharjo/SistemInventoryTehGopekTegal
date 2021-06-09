@extends('main')
@section('content')
<section class="content">
    <!-- START DEFAULT DATATABLE -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Data Supplier</h3><br><br>
            <a href="{{route('supplier.create')}}" class="btn btn-success">Tambah Supplier</a>


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
                        <th>Nama Supplier</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Aksi date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supplier as $sup)
                    <tr>
                        <td>{{ $sup->nama_supplier }}</td>
                        <td>{{ $sup->alamat }}</td>
                        <td>{{ $sup->no_telp }}</td>
                        <form method="POST" action="{{route('supplier.destroy', $sup->id)}}">
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
