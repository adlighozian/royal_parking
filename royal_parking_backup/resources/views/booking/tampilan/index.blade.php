@extends('booking.layouts.main')

@section('isi')

    @if (session()->has('berhasil'))
        <div class="alert alert-success" role="alert">
            {{ session('berhasil') }}
        </div>
    @endif

    <h1 class="h2 text-center mb-5">Pilih tempat booking </h1>

    {{-- <div class="container">
        <div class="row">
            @foreach ($parkiran as $parkiran)
                <div class="col-md-4 mb-3">
                    <div class="card">

                        <a href="/booking/{{ $parkiran->id }}" class="text-decoration-none">
                            <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $parkiran->gambar }}"
                                alt="{{ $parkiran->gambar }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"> <a href="/booking/{{ $parkiran->id }}"
                                    class="text-decoration-none">
                                    {{ $parkiran->nama }} </a></h5>

                            <p class="card-text">{{ $parkiran->nama }}</p>
                            <a href="/booking/{{ $parkiran->id }}" class="text-decoration-none btn btn-primary">Booking
                                now </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}

@endsection
