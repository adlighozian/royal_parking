@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">booking </h1>
    </div>

    <a href="/exel"><button type="button" class="btn btn-primary mb-3"><span data-feather="printer"></span> Print</button></a>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Lokasi parkir</th>
                        <th scope="col">Status</th>
                        <th scope="col">bukti pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($post as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $post->nama }}</td>
                            <td>{{ $post->parkiran->nama }}</td>
                            <td> <a href="/bookingdashboard/{{ $post->id }}" class="badge bg-info"><span
                                        data-feather="eye"></span></a>
                            </td>
                            <td><img class="card-img-top"
                                    src="{{ asset('storage/' . $post->foto) }}" width="200" height="300" alt="{{ $post->foto }}">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
