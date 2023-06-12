{{-- @dd($pesanan) --}}
@extends('layouts.main')

@section('content')
  <div style="padding-bottom: 6rem; background-color: #D9D9D9">
    <div class="container-lg" style="padding: 8rem">
      <h1 class="text-center">Riwayat Pesanan Anda di <span style="color: #F9C306">King</span>Design</h1>
    </div>

    {{-- nav tabs --}}
    <nav class="">
      <div class="nav nav-tabs pesanan-tabs d-flex justify-content-around bg-warning pb-2" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button"
          role="tab" aria-controls="nav-home" aria-selected="true">Semua Pesanan</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button"
          role="tab" aria-controls="nav-profile" aria-selected="false">Sedang Diproses</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button"
          role="tab" aria-controls="nav-contact" aria-selected="false">Revisi Design</button>
        <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled" type="button"
          role="tab" aria-controls="nav-disabled" aria-selected="false">Pesanan Selesai</button>
      </div>
    </nav>

    {{-- nav content --}}
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
        <div class="container-sm">
          @if (count($pesanan_all) == 0)
            <div class="row" style="height: 1000px; margin-top: 300px;">
              <center>
                <div class="col">
                  <img src="/assets/img/Keranjang.png" alt="" style="height: 83px;">
                </div>
                <div class="col" style="color: black;">
                  <h1>Belum ada pesanan</h1>
                </div>
              </center>
            </div>
          @else
            @foreach ($pesanan_all as $item)
              <div class="card mt-3 p-2" style="border: 2px solid black">
                <div class="card-body text-dark">
                  <div class="row">
                    <h3 class="text-danger text-end"><u>{{ $item->status->pesan }}</u></h3>
                  </div>
                  <div class="row mb-2">
                    <div class="col-auto">
                      <svg width="186" height="172" viewBox="0 0 186 172" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M55.005 105.415C39.4049 94.9585 29.2993 78.2249 29.2993 59.3659C29.2993 27.6836 57.8187 2 92.9993 2C128.18 2 156.699 27.6836 156.699 59.3659C156.699 77.9491 146.887 94.4688 131.674 104.952"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M93 59.366L184 170H2L93 59.366Z" fill="#2F88FF"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="col-8">
                      <h3>Layanan Jasa Pembuatan {{ $item->jasa->nama_jasa }}</h3>
                      <p>{!! $item->deskripsi_pesanan !!}</p>
                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                      @if ($item->status->id == 1)
                        <a href="/layanan">
                          <button type="button" class="btn btn-primary px-4 bg-danger">Beli lagi</button>
                        </a>
                      @else
                        <a href="https://wa.me/6289525070926"><button type="button" class="btn btn-primary px-4 text-dark bg-warning">Hubungi Penjual</button></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>

      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        <div class="container-sm">
          @if (count($pesanan_proses) == 0)
            <div class="row" style="height: 1000px; margin-top: 300px;">
              <center>
                <div class="col">
                  <img src="/assets/img/Keranjang.png" alt="" style="height: 83px;">
                </div>
                <div class="col" style="color: black;">
                  <h1>Belum ada pesanan</h1>
                </div>
              </center>
            </div>
          @else
            @foreach ($pesanan_proses as $item)
              <div class="card mt-3 p-2" style="border: 2px solid black">
                <div class="card-body text-dark">
                  <div class="row mb-2">
                    <div class="col-auto">
                      <svg width="186" height="172" viewBox="0 0 186 172" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M55.005 105.415C39.4049 94.9585 29.2993 78.2249 29.2993 59.3659C29.2993 27.6836 57.8187 2 92.9993 2C128.18 2 156.699 27.6836 156.699 59.3659C156.699 77.9491 146.887 94.4688 131.674 104.952"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M93 59.366L184 170H2L93 59.366Z" fill="#2F88FF"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="col-8">
                      <h3>Layanan Jasa Pembuatan {{ $item->jasa->nama_jasa }}</h3>
                      <p>{!! $item->deskripsi_pesanan !!}</p>
                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                      @if ($item->status->id == 1)
                        <a href="/layanan">
                          <button type="button" class="btn btn-primary px-4 bg-danger">Beli lagi</button>
                        </a>
                      @else
                         <a href="https://wa.me/6289525070926"><button type="button" class="btn btn-primary px-4 text-dark bg-warning">Hubungi Penjual</button></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>

      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
       <div class="container-sm">
          @if (count($pesanan_revisi) == 0)
            <div class="row" style="height: 1000px; margin-top: 300px;">
              <center>
                <div class="col">
                  <img src="/assets/img/Keranjang.png" alt="" style="height: 83px;">
                </div>
                <div class="col" style="color: black;">
                  <h1>Belum ada pesanan</h1>
                </div>
              </center>
            </div>
          @else
            @foreach ($pesanan_revisi as $item)
              <div class="card mt-3 p-2" style="border: 2px solid black">
                <div class="card-body text-dark">
                  <div class="row mb-2">
                    <div class="col-auto">
                      <svg width="186" height="172" viewBox="0 0 186 172" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M55.005 105.415C39.4049 94.9585 29.2993 78.2249 29.2993 59.3659C29.2993 27.6836 57.8187 2 92.9993 2C128.18 2 156.699 27.6836 156.699 59.3659C156.699 77.9491 146.887 94.4688 131.674 104.952"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M93 59.366L184 170H2L93 59.366Z" fill="#2F88FF"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="col-8">
                      <h3>Layanan Jasa Pembuatan {{ $item->jasa->nama_jasa }}</h3>
                      <p>{!! $item->deskripsi_pesanan !!}</p>
                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                      @if ($item->status->id == 1)
                        <a href="/layanan">
                          <button type="button" class="btn btn-primary px-4 bg-danger">Beli lagi</button>
                        </a>
                      @else
                         <a href="https://wa.me/6289525070926"><button type="button" class="btn btn-primary px-4 text-dark bg-warning">Hubungi Penjual</button></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>

      <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
        <div class="container-sm">
          @if (count($pesanan_selesai) == 0)
            <div class="row" style="height: 1000px; margin-top: 300px;">
              <center>
                <div class="col">
                  <img src="/assets/img/Keranjang.png" alt="" style="height: 83px;">
                </div>
                <div class="col" style="color: black;">
                  <h1>Belum ada pesanan</h1>
                </div>
              </center>
            </div>
          @else
            @foreach ($pesanan_selesai as $item)
              <div class="card mt-3 p-2" style="border: 2px solid black">
                <div class="card-body text-dark">
                  <div class="row mb-2">
                    <div class="col-auto">
                      <svg width="186" height="172" viewBox="0 0 186 172" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M55.005 105.415C39.4049 94.9585 29.2993 78.2249 29.2993 59.3659C29.2993 27.6836 57.8187 2 92.9993 2C128.18 2 156.699 27.6836 156.699 59.3659C156.699 77.9491 146.887 94.4688 131.674 104.952"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M93 59.366L184 170H2L93 59.366Z" fill="#2F88FF"
                          stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </div>
                    <div class="col-8">
                      <h3>Layanan Jasa Pembuatan {{ $item->jasa->nama_jasa }}</h3>
                      <p>{!! $item->deskripsi_pesanan !!}</p>
                    </div>
                    <div class="col d-flex align-items-end justify-content-end">
                      @if ($item->status->id == 1)
                        <a href="/layanan">
                          <button type="button" class="btn btn-primary px-4 bg-danger">Beli lagi</button>
                        </a>
                      @else
                         <a href="https://wa.me/6289525070926"><button type="button" class="btn btn-primary px-4 text-dark bg-warning">Hubungi Penjual</button></a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
