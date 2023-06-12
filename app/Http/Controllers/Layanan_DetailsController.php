<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class Layanan_DetailsController extends Controller
{
    public function index(Jasa $jasa) {
        return view('layanan_details', [
            'layanan' => $jasa
        ]);
    }
}
