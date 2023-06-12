<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index() {
        $pesanan_all = Pesanan::where('user_id', auth()->user()->id)->get();
        $pesanan_proses = $pesanan_all->where('status_id', 2);
        $pesanan_selesai = $pesanan_all->where('status_id', 1);
        $pesanan_revisi = $pesanan_all->where('status_id', 3);

        // dd($pesanan_revisi);
        return view('pesanan.riwayat', [
            'pesanan_all' => Pesanan::where('user_id', auth()->user()->id)->get(),
            'pesanan_proses' => $pesanan_proses,
            'pesanan_selesai' => $pesanan_selesai,
            'pesanan_revisi' => $pesanan_revisi
        ]);
    }

    public function form(Jasa $jasa) {
        // dd(now());
        return view('pesanan.order', [
            'layanan' => $jasa
        ]);
    }

    public function order(Request $request) {
        $rules = [
            'jasa_id' => 'required',
            'status_id' => 'required',
            'nama_pembeli' => 'required|max:225',
            'no_telp' => 'required|max:255',
            'deskripsi_pesanan' => 'required|max:225',
            // 'tanggal_pemesanan' => 'required|date',
            // 'tanggal_selesai' => 'nullable|date',
        ];

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['tanggal_pemesanan'] = now();
        $validatedData['tanggal_selesai'] = now();

        Pesanan::create($validatedData);
        return redirect('/pesanan');
    }
}
