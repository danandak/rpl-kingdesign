<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index() {
        return view('pesanan.riwayat');
    }

    public function form() {
        return view('pesanan.order');
    }

    
}
