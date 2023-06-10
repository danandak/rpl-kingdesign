@extends('layouts.main')

@section('content')
  <div class="kontak">
    <center>
      <h1 class="kontakText"> Anda dapat menghubungi kami di </h1>
    </center>
  </div>
  <div style="background-color: rgba(255, 255, 255, 100%); height: 800px">
   <div class="container">
        <div class="contact">
            <ul>
                <li>
                    <span class="icon">
                        <a href="https://goo.gl/maps/3HS7qLb52D23QjqBA" target="_blank">
                            <img class="logo-maps" src="/assets/logo/maps.png" alt="Alamat Icon">
                        </a>
                    </span>
                    <span class="details">Jl. Daksinapati Timur No.1, Jakarta Timur. 13220</span>
                </li>
                <li>
                    <span class="icon">
                        <a href="mailto:inquiries.kingdesign@gmail.com">
                            <img class="logo-email" src="/assets/logo/gmail.png" alt="Email Icon">
                        </a>
                    </span>
                    <span class="details">inquiries.kingdesign@gmail.com</span>
                </li>
                <li>
                    <span class="icon">
                        <a href="wa.me/6289525070926">
                            <img class="logo-whatsapp" src="/assets/logo/whatsapp.png" alt="Nomor Telepon Icon">
                        </a>
                    </span>
                    <span class="details">+6289525070926</span>
                </li>
                <li>
                    <span class="icon">
                        <a href="https://instagram.com/kingdesign.ofc" target="_blank">
                            <img class="logo-instagram" src="/assets/logo/instagram.png" alt="Instagram Icon">
                        </a>
                    </span>
                    <span class="details">@kingdesign.ofc</span>
                </li>
            </ul>
        </div>
        <div class="map">
           <span class="judul-map">UNJ Kampus A</span>
           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1983.261395831874!2d106.8782906!3d-6.1945376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4ed34dddddb%3A0x9653d265331e6645!2sGedung%20Raden%20Dewi%20Sartika%20UNJ!5e0!3m2!1sid!2sid!4v1686397949540!5m2!1sid!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
  </div>
@endsection
