@extends('booking.layouts.main')

@section('isi')

{{$id}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

               <h3 class="text-center">{{ $nama }}</h3>
            </div>
            <div class="col-md-6">
                <form action="/booking" method="POST">
                    @csrf

                    <input type="hidden" name="status" class="form-control" value="0">
                    <input type="hidden" name="parkiran_id" class="form-control" value="{{ $id }}">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Jenis Kendaraan</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_kendaraan" required>
                        <option selected>Jenis Kendaraan</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Motor">Motor</option>
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="no_polisi" class="form-label">No Polisi</label>
                        <input type="text" name="no_polisi" id="no_polisi" class="form-control @error('no_polisi') is-invalid @enderror" required>
                        @error('no_polisi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Lama hari</label>
                    <select class="form-select" aria-label="Default select example" name="durasi" required>
                        <option value="3" selected>rawat 3 hari. Mobil 25rb, Motor 15rb</option>
                        <option value="Mobil">rawat seminggu. Mobil 100rb, motor 50rb</option>
                        <option value="Motor">rawat sebulan. Mobil 200rb, Motor 100rb</option>
                    </select>
                    </div>

                    <div class="mb-3">
                        <label for="no_tiket" class="form-label">No tiket</label>
                        <input class="form-control @error('no_tiket') is-invalid @enderror" id="no_tiket" name="no_tiket" type="text">
                        @error('no_tiket')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">bukti foto</label>
                        <input name="foto" class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


@endsection
