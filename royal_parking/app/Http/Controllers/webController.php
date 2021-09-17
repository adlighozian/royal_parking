<?php

namespace App\Http\Controllers;

use App\Models\parkiran;
use App\Models\kendaraan;
use App\Models\user;
use Illuminate\Http\Request;

class webController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function dashboard()
    {
        return view('dashboard.main.home', [
            'parkiran' => parkiran::get()

        ]);
    }

    public function parkiran_slug(parkiran $post)
    {
        return view('dashboard.main.parkiran', [
            "nama" => $post->id,
        ]);
    }

    public function booking()
    {
        return view('booking.main.booking');
    }

}

