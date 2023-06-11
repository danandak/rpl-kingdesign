<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Layanan_DetailsController extends Controller
{
    public function index() {
        return view('layanan_details');
    }
}
