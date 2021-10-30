@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Parkiran </h1>
</div>


<div class="container">
    <div class="row">

            {{-- <div class="col-md-4 mb-3">
                <div class="card">

                    <a href="/dashboard/{{ $parkiran->slug }}" class="text-decoration-none">
                        <img class="card-img-top"
                            src="https://source.unsplash.com/500x400?{{ $parkiran->gambar }}"
                            alt="{{ $parkiran->gambar }}">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"> <a href="/dashboard/{{ $parkiran->slug }}"
                                class="text-decoration-none">
                                {{ $parkiran->nama }} </a></h5>

                        <p class="card-text">{{ $parkiran->nama }}</p>
                        <a href="/dashboard/{{ $parkiran->nama }}" class="text-decoration-none btn btn-primary">Read
                            more.. </a>
                    </div>
                </div>
            </div> --}}

    </div>
</div>



@endsection
