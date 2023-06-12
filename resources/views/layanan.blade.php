{{-- @dd($layanan) --}}
@extends('layouts.main')

@section('content')
  <div class="layanan">
    <h1 class="layananText"> Layanan yang dapat kami berikan </h1>
  </div>
  <div style="background-color: rgba(184, 184, 184, 100%); height: 1000px;">
    <div class="container" style="display: block;">

      @for ($x = 0; $x < count($layanan); $x+=2)
        <div class="row-12 layanan2">
          <a href="/layanan/{{ $layanan[$x]->id }}">
            <div class="col-6 layanan3">
              <h3 class="fw-bold mt-0">{{ $layanan[$x]->nama_jasa }}</h3>
              <p class="">{{ $layanan[$x]->deskripsi_jasa }}</p>
            </div>
          </a>
          <a href="/layanan/{{ $layanan[$x+1]->id }}">
            <div class="col-6 layanan3">
              <h3 class="fw-bold mt-0">{{ $layanan[$x+1]->nama_jasa }}</h3>
              <p>{{ $layanan[$x+1]->deskripsi_jasa }}</p>
            </div>
          </a>
        </div>
      @endfor
    </div>
  </div>
@endsection
