@extends('dashboard.layouts.main')

@section('container')



    <div class="card mt-3">
        <div class="card-header">
            <h5 class="card-title">Nama parkiran</h5>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-5">

                    <img src="https://source.unsplash.com/500x400?parking" width="500" height="300">

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

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>data kendaraan</h3>
    </div>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($posts as $post )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td> <a href="/dashboard/post/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                         <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                         <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a></td>
                    </tr>
                    @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>

@endsection
