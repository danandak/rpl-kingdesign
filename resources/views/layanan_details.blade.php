{{-- @dd($layanan) --}}
@extends('layouts.main')

@section('content')
  <div class="judul_layanan">
    <center>
      <h1 class="judul_layananText"> Jasa Design <span class="jasaText">{{ $layanan->nama_jasa }}</span> by KingDesign </h1>
    </center>
  </div>
  <div class="detail_layanan">
    <center>
      <h1 class="layanan_detailsText"> {{ $layanan->deskripsi_jasa }} </h1>
    </center>
  </div>
  <div class="beli_layanan">
    <center>
      <h1 class="beli_layananText"> Berminat memakai jasa design <span class="jasaText">{{ $layanan->nama_jasa }}</span> di KingDesign? Klik link dibawah ini </h1>
      <div class="border_beliLayanan">
        <a href="/pesanan/order/{{ $layanan->id }}">
          <h4>Pesan</h4>
        </a>
      </div>
    </center>
  </div>
@endsection
