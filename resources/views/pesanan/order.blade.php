@extends('pesanan.index')

@section('content')
<div class="container-sm" style="margin-bottom: 6rem;">
  <div class="card p-3 mt-5" style="border: 1px solid black">
    <div class="card-body">
      <h3>Produk Dipesan</h3>
      <div class="row pb-3 mb-3" style="border-bottom: 3px solid #F9C306">
        <div class="col-3 mt-3">
          <svg width="239" height="150" viewBox="0 0 239 204" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M70.4404 125.113C50.2974 112.665 37.249 92.7439 37.249 70.2927C37.249 32.5757 74.0735 2 119.499 2C164.925 2 201.749 32.5757 201.749 70.2927C201.749 92.4156 189.08 112.082 169.437 124.562" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M119.5 70.2925L237 202H2L119.5 70.2925Z" fill="#2F88FF" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            
        </div>
        <div class="col">
          <h3>Layanan Jasa Pembuatan <span class="text-warning">Layanan</span></h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quam eaque porro ut iste ipsum aut quasi voluptatum maxime voluptatem dolor nihil quis obcaecati voluptates doloremque tempore repellat laboriosam earum velit ullam, natus est quia? Porro deserunt corporis accusamus nam.</p>
        </div>
        {{-- <center>
          <hr class="mt-3" style="margin: 0 -32px; border:5px solid rgba(0, 0, 0, 1);">  
        </center> --}}
      </div>
      <div class="row">
        <h3>Deskripsi Pembelian</h3>
        {{-- <span style="white-space:nowrap">
          <label for="nama">Nama : </label>
          <input type="text" style="background-color: gray; border: none;" id="nama">        
        </span>
        
        <span style="white-space:nowrap">
          <label for="telp" class="d-inline">No. Hp : </label>
          <input type="phone" class="d-inline" id="telp">
        </span> --}}
      </div>

      <div class="row mb-4">
        <div class="col-1">
          <label for="nama">Nama :</label>
        </div>
        <div class="col">
          <input type="text" class="w-100" id="nama">
        </div>
      </div>
      <div class="row">
        <div class="col-1">
          <label for="nama">No. Hp :</label>
        </div>
        <div class="col">
          <input type="text" class="w-100" id="nama">
        </div>
      </div>
      <div class="row mt-3">
        <label for="desk" class="mb-3">Deskripsi Pesanan :</label>
        <textarea name="deskripsi" id="desk" cols="10" rows="5"></textarea>
      </div>
      <div class="d-flex justify-content-end mt-4">
        <a href="/" <button type="button" class="btn btn-warning fw-bold">Buat Pesanan</button></a>
      </div>
    </div>
  </div>
</div>
@endsection
