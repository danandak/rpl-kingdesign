<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function index() {
        return view('layanan', [
            'layanan' => Jasa::all()
        ]);
    }
}
