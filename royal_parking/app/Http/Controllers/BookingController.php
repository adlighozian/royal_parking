<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\parkiran;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {

        return view('booking.main.booking',[
            'parkiran' => parkiran::all()
        ]);

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {



        $ValidateData = $request->validate([
            'status' => 'required',
            'parkiran_id' => 'required',
            'nama' => 'required',
            'jenis_kendaraan' => 'required',
            'no_polisi' => 'required',
            'durasi' => 'required',
            'no_tiket' => 'required',
            'foto' => 'image|file|max:1024',
        ]);

        if($request->file('foto')){
            $ValidateData['foto'] = $request->file('foto')->store('post-images');
        }

        booking::create($ValidateData);

        return redirect('/booking')->with('berhasil','data berhasil di kirim');
    }


    public function show(parkiran $booking)
    {
        return view ('booking.main.show',[
            'id'=>$booking->id,
            'nama'=>$booking->nama,
        ]);
    }

    public function edit(booking $booking)
    {
        //
    }

    public function update(Request $request, booking $booking)
    {
        //
    }

    public function destroy(booking $booking)
    {
        //
    }
}
