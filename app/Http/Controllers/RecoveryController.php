<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RecoveryController extends Controller
{
    public function index() {
        return view('code');
    }
}
