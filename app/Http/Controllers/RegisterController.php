<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(Request $request) {
        // return @dd($request->all());
        $validatedData = $request->validate([
            'nama' => ['required', 'max:225'],
            'email' => 'required|email:dns|unique:t_users',
            'password' => 'required|min:8|max:225|unique:t_users',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData); // memasukkan data yang sudah tervalidasi ke db

        // $request->session()->flash('status', 'Registrasi Berhasil, gas login!');
        // cara mengirim flash message sekaligus redirecting
        return redirect('/login')->with('status', 'Registrasi Berhasil, silahkan login!');
    }
}
