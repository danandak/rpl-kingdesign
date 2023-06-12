@extends('layouts.main')

@section('content')
  <div class="biodata">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="fw-bold">
            Jasa Kreatif
          </h2>
          <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.
          </p>
          <div class="borderlanjut">
            <center>
              <a class="lanjut" href="/about">
                Lanjutkan
              </a>
            </center>
          </div>
          <br>
        </div>
        <div class="col">
          <center>
            <img class="logoC" src="/assets/img/logo.png" alt="">
          </center>
        </div>      </div>
    </div>
  </div>
  <div class="layanan1">
    <center>
      <h1 style="padding-top: 30px;">Layanan KingDesign</h1>
      <br><br>
   <div class="carousel-container">
    <div class="carousel-slide">
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Logo_layanan.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Brosur.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Flyer.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Presentasi.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Kemasan.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Website.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Aplikasi.png"></div>
      <div class="carousel-item"><img class="gambar4" src="/assets/img/Infografis.png"></div>
    </div>
</div>
    </center>

  </div>
  <div class="pertanyaan">
    <center>
      <h1>Punya Pertanyaan Lebih Lanjut?</h1>
      <div class="borderpertanyaan">
        <a href="/kontak">
          <h4>Hubungi Kami</h4>
        </a>
      </div>
    </center>
  </div>
@endsection
