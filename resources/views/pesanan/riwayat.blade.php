@extends('layouts.main')

@section('content')
  <div style="margin-bottom: 6rem;">
    <div class="container-lg" style="padding: 8rem">
      <h1 class="text-center">Riwayat Pesanan Anda di KingDesign</h1>
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
          <div class="card mt-3 p-2" style="border: 2px solid black">
            <div class="card-body text-dark">
              <div class="row">
                <h3 class="text-danger text-end"><u>SELESAI</u></h3>
              </div>
              <div class="row">
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
                <div class="col-8 overflow-y-scroll">
                  <h3>Layanan Jasa Pembuatan Logo</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iste quidem odit odio libero ullam?
                    Corrupti magni aliquam suscipit molestiae provident culpa aut! Qui similique reiciendis rem, vitae
                    maiores nobis, unde officiis quasi odit saepe facilis nostrum iure deleniti libero quas, non soluta
                    enim? Eligendi a voluptatibus quam aspernatur necessitatibus laudantium, nam in explicabo doloribus
                    tempora amet quas corporis commodi consectetur pariatur! Aperiam, mollitia. Aliquam tempora iure eum
                    impedit quos, tenetur nisi eos, accusantium quaerat cumque earum minima est consequuntur eaque itaque
                    commodi voluptatibus, magni perspiciatis adipisci minus dignissimos facere unde. Soluta vitae magnam
                    ad repudiandae fugit quod iure? Eum!</p>
                </div>
                <div class="col d-flex align-items-end justify-content-end">
                <a href=/layanan>
                  <button type="button" class="btn btn-primary px-4 bg-danger">Beli lagi</button>
                </div>
                </a>
              </div>
            </div>
          </div>
          
          <div class="card mt-3 p-2" style="border: 2px solid black"> 
            <div class="card-body text-dark">
              <div class="row">
                <h3 class="text-danger text-end"><u>SELESAI</u></h3>
              </div>
              <div class="row">
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
                <div class="col-8 overflow-y-scroll">
                  <h3>Layanan Jasa Pembuatan Logo</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere iste quidem odit odio libero ullam?
                    Corrupti magni aliquam suscipit molestiae provident culpa aut! Qui similique reiciendis rem, vitae
                    maiores nobis, unde officiis quasi odit saepe facilis nostrum iure deleniti libero quas, non soluta
                    enim? Eligendi a voluptatibus quam aspernatur necessitatibus laudantium, nam in explicabo doloribus
                    tempora amet quas corporis commodi consectetur pariatur! Aperiam, mollitia. Aliquam tempora iure eum
                    impedit quos, tenetur nisi eos, accusantium quaerat cumque earum minima est consequuntur eaque itaque
                    commodi voluptatibus, magni perspiciatis adipisci minus dignissimos facere unde. Soluta vitae magnam
                    ad repudiandae fugit quod iure? Eum!</p>
                </div>
                <div class="col d-flex align-items-end justify-content-end">
                <a href="https://wa.me/6289525070926">
                  <button type="button" class="btn btn-primary px-4 bg-warning text-dark">Hubungi Penjual</button>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
        ...</div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
        ...</div>
      <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">
        ...</div>
    </div>
  </div>
@endsection
