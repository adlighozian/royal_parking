<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kendaraan;
use App\Models\parkiran;

class webController extends Controller
{
    public function index()
    {
        return view('page2.layouts.home', [
            "title" => "Royal Parking | Home",
            "parkir"=> parkiran::all()
        ]);
    }

    public function kendaraan()
    {
        return view('page1.layouts.home', [
            "title" => "royal Parking | kendaraan"
        ]);
    }
}
