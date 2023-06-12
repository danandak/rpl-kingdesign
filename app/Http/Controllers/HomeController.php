<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        // $layanan = Jasa::all();
        // dd($layanan);
        return view('landing_page', [
            'layanan' => Jasa::all()
        ]);
    }
}
