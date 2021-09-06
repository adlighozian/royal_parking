@extends('dashboard.template.navbar')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Parkiran 1</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Parkiran bojong soang</h5>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">

                                    <img src="{{ url('/foto/1.png') }}" width="500" height="300">

                                </div>
                                <!-- /.col -->
                                <div class="col-md">
                                    <p>keterangan parkiran, Lokasi alamat</p>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./card-body -->
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i
                                                class="fas fa-caret-up"></i> 17%</span>
                                        <h5 class="description-header">3000</h5>
                                        <span class="description-text">TOTAL KENDARAAN</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-warning"><i
                                                class="fas fa-caret-left"></i> 0%</span>
                                        <h5 class="description-header">2000</h5>
                                        <span class="description-text">TOTAL KENDARAAN RODA EMPAT</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block border-right">
                                        <span class="description-percentage text-success"><i
                                                class="fas fa-caret-up"></i> 20%</span>
                                        <h5 class="description-header">1000</h5>
                                        <span class="description-text">TOTAL KENDARAAN RODA DUA</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 col-6">
                                    <div class="description-block">
                                        <span class="description-percentage text-danger"><i
                                                class="fas fa-caret-down"></i> 18%</span>
                                        <h5 class="description-header">Rp. 50.000.000</h5>
                                        <span class="description-text">TOTAL PENDAPATAN</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.card-footer -->

                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">jenis kendaraan</th>
                            <th scope="col">no kendaraan</th>
                            <th scope="col">durasi parkir</th>
                            <th scope="col">jam datang</th>
                            <th scope="col">jam keluar</th>
                            <th scope="col">harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>mobil</td>
                            <td>B 2345 sd</td>
                            <td>120 menit</td>
                            <td>21:28:19</td>
                            <td>23:28:19</td>
                            <td>Rp. 5000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>mobil</td>
                            <td>B 2345 sd</td>
                            <td>120 menit</td>
                            <td>21:28:19</td>
                            <td>23:28:19</td>
                            <td>Rp. 5000</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>mobil</td>
                            <td>B 2345 sd</td>
                            <td>120 menit</td>
                            <td>21:28:19</td>
                            <td>23:28:19</td>
                            <td>Rp. 5000</td>
                        </tr>
                    </tbody>
                </table>


            </div>
            <!-- /.row -->

            <!-- Main row -->

        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
