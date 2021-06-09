<ul class="x-navigation">
    <li class="xn-logo">
        <a href="{{ route('home.index') }}">SI Inventory</a>
        <a href="#" class="x-navigation-control"></a>
    </li>
    <li class="xn-profile">
        <a href="#" class="profile-mini">
            <img src="{{ asset('template/assets/images/users/avatar.jpg') }}" alt="John Doe" />
        </a>
        <div class="profile">
            <div class="profile-image">
                <img src="{{ asset('template/assets/images/users/avatar.jpg') }}" alt="John Doe" />
            </div>
            <div class="profile-data">
                <div class="profile-data-name"></div>
                <div class="profile-data-title"></div>
            </div>
        </div>
    </li>
    <li class="xn-title">Navigation</li>
    <li class="active">
        <a href="{{route('home.index')}}"><span class="fa fa-desktop"></span> <span
                class="xn-text">Dashboard</span></a>
    </li>
    <li class="xn-title">Data Master</li>
    <li><a href="{{route('barangmasuk.index')}}"><span class="fa fa-arrow-circle-left"></span>Barang Masuk</a>
    </li>
    <li><a href="{{route('barangkeluar.index')}}"><span class="fa fa-arrow-circle-right"></span> Barang Keluar</a></li>
    <li><a href="{{route('supplier.index')}}"><span class="fa fa-users"></span> Supplier</a></li>
    <li><a href="{{route('stock.index')}}"><span class="fa fa-cubes"></span> Stok</a></li>
    {{--  <li><a href=""><span class="fa fa-file-text"></span> Riwayat Keluar Masuk</a></li>  --}}
    {{-- <li class="xn-title">Components</li>
    <li><a href="#"><span class="fa fa-file"></span> Data Seluruh Kapal</a></li> --}}
</ul>
