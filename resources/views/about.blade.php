@extends('layouts.main')

@section('content')
  <div class="biodata">
    <div class="container" style="display: block; margin-left: -150px">
      <div class="row-12" style="width: 1000px; display: flex;">
        <div class="col-6" style="width: 500px;">
          <h2 class="fw-bold">Jasa Kreatif</h2>
          <p style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
            unknown printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="col-6">
          <center>
            <img class="logoC" src="/assets/img/logo.png">
          </center>
        </div>
      </div>
      <br>
      <div class="row-12" style="width: 750px; display: flex;">
        <div class="col-6">
          <img class="logoD" src="/assets/img/KingDesign.png" alt="">
        </div>
        <div class="col-6 tagline">
          <p>“Lorem Ipsum is simply dummy text of the printing and typesetting industry”</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="location">
    <center> <a href="https://goo.gl/maps/3HS7qLb52D23QjqBA" target="_blank">
        <h1 class="locationText"> Berlokasi di Universitas Negeri Jakarta, Jakarta Timur </h1>
      </a> </center>
  </div>
  <div class="langkah">
    <center>
      <h1 class="langkahText"> Langkah Pengerjaan </h1>
    </center>
    <div class="box-container">
        <div class="box">
        	<center>
        		<img class="gambar1" src="/assets/img/konsultasi.png">
        	</center>
        </div>
        <div class="box">
        	<center>
        		<img class="gambar2" src="/assets/img/analisa.png">
        	</center>
        </div>
        <div class="box">
        	<center>
        		<img class="gambar3" src="/assets/img/pengerjaan.png">
        	</center>
        </div>
        <div class="box">
        	<center>
        		<img class="gambar4" src="/assets/img/evaluasi.png">
        	</center>
        </div>
    </div>
  </div>
@endsection