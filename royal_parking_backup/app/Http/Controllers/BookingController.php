<?php

namespace App\Http\Controllers;

use App\Models\parkiran;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking.tampilan.index',[
            'parkiran' => parkiran::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parkiran  $parkiran
     * @return \Illuminate\Http\Response
     */
    public function show(parkiran $parkiran)
    {

        return $parkiran;

        // return view ('booking.tampilan.show',[
        //     'id'=> parkiran::all(),
        //     'nama'=> $parkiran->nama,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parkiran  $parkiran
     * @return \Illuminate\Http\Response
     */
    public function edit(parkiran $parkiran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parkiran  $parkiran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parkiran $parkiran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parkiran  $parkiran
     * @return \Illuminate\Http\Response
     */
    public function destroy(parkiran $parkiran)
    {
        //
    }
}
