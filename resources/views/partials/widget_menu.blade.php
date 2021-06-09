@extends('main')
@section('content')
    <section class="content">
        <!-- START WIDGETS -->
        <div class="row">
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-arrow-circle-left"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count"></div>
                        <div class="widget-title">Total Barang Masuk</div>
                        <div class="widget-subtitle">0</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-arrow-circle-right"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count"></div>
                        <div class="widget-title">Total Barang Keluar</div>
                        <div class="widget-subtitle">0</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-users"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count"></div>
                        <div class="widget-title">Supplier</div>
                        <div class="widget-subtitle">0</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
            <div class="col-md-3">
                <!-- START WIDGET MESSAGES -->
                <div class="widget widget-default widget-item-icon" onclick="location.href='#';">
                    <div class="widget-item-left">
                        <span class="fa fa-cubes"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-int num-count"></div>
                        <div class="widget-title">Stock</div>
                        <div class="widget-subtitle">0</div>
                    </div>
                </div>
                <!-- END WIDGET MESSAGES -->
            </div>
        </div>
        <!-- END WIDGETS -->

    </section>
@endsection
