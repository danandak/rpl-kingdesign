@extends('pesanan.index')

@section('content')
  <div class="container-sm overflow-y-hidden" style="margin-bottom: 6rem;">
    <div class="card p-3 mt-5" style="border: 1px solid black">
      <div class="card-body">
        <h3>Produk Dipesan</h3>
        <div class="row pb-3 mb-3" style="border-bottom: 3px solid #F9C306">
          <div class="col-3 mt-3">
            <svg width="239" height="150" viewBox="0 0 239 204" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M70.4404 125.113C50.2974 112.665 37.249 92.7439 37.249 70.2927C37.249 32.5757 74.0735 2 119.499 2C164.925 2 201.749 32.5757 201.749 70.2927C201.749 92.4156 189.08 112.082 169.437 124.562"
                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
              <path fill-rule="evenodd" clip-rule="evenodd" d="M119.5 70.2925L237 202H2L119.5 70.2925Z" fill="#2F88FF"
                stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
          <div class="col">
            <h3>Layanan Jasa Pembuatan <span class="text-warning">{{ $layanan->nama_jasa }}</span></h3>
            <p>{{ $layanan->deskripsi_jasa }}</p>
          </div>
        </div>

        <div class="row">
          <h3>Deskripsi Pembelian</h3>
        </div>
        <form action="/pesanan/order" method="POST">
          @csrf
          <div class="row mb-4">
            <div class="col-1">
              <label for="nama">Nama :</label>
            </div>
            <div class="col">
              <input type="text" name="nama_pembeli" class="w-100" id="nama">
            </div>
          </div>
          <div class="row">
            <div class="col-1">
              <label for="nama">No. Hp :</label>
            </div>
            <div class="col">
              <input type="text" name="no_telp" class="w-100" id="nama">
            </div>
          </div>
          <div class="row mt-3">
            <label for="desk" class="mb-3">Deskripsi Pesanan :</label>
            {{-- <textarea name="deskripi" id="desk" cols="10" rows="5"></textarea> --}}
            <input id="desk" type="hidden" name="deskripsi_pesanan" value="{{ old('deskripsi') }}">
            <trix-editor input="desk"></trix-editor>
            {{-- @error('body')
              <p class="text-danger">{{ $message }}</p>
            @enderror --}}
          </div>

          <input type="hidden" name="jasa_id" value="{{ $layanan->id }}">
          <input type="hidden" name="status_id" value="2">

          <div class="d-flex justify-content-end mt-4">
            <button type="submit" class="btn btn-warning fw-bold">Buat Pesanan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
