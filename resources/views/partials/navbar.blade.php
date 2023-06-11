<div class="atas">
  <div class="row">
    <div class="col-4">
      <a href="/">
        <img class="logoA" src="assets/img/logo.png" alt="">
        <img class="logoB" src="assets/img/KingDesign.png" alt="">
      </a>
    </div>
    <div class="col-4 text-center pt-3">
      <div class="row fitur">
        <div class="col">
          <a href="{{ route('about.index') }}" class="{{Request::is('about*') ? 'active' : ''}}">Tentang Kami</a>
        </div>
        <div class="col">
          <a href="{{ route('layanan.index') }}" class="{{Request::is('layanan*') ? 'active' : ''}}">Layanan</a>
        </div>
        <div class="col">
          <a href="{{ route('kontak.index') }}" class="{{Request::is('kontak*') ? 'active' : ''}}">Kontak</a>
        </div>
       {{-- <div class="col text-end">
          Selamat Datang, {{ auth()->user()->nama }}
       </div> --}}
      </div>
    </div>
    @auth
    <div class="col">
      <div class="row pt-3 me-2">
        <div class="col d-flex justify-content-end fw-bold">
          <a href="/pesanan">
            <svg width="25" height="31" class="me-4" style="margin-top: -0.4rem" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.44444 8.88095H5.38889V10.3333C5.38889 12.7699 6.52001 15.0501 8.43484 16.6913C10.3425 18.3265 12.8867 19.2143 15.5 19.2143C18.1133 19.2143 20.6575 18.3265 22.5652 16.6913C24.48 15.0501 25.6111 12.7699 25.6111 10.3333V8.88095H27.5556C28.1396 8.88095 28.6618 9.08185 29.015 9.38457L29.9911 8.24568L29.015 9.38457C29.361 9.68116 29.5 10.0293 29.5 10.3333V28.0476C29.5 28.3516 29.361 28.6998 29.015 28.9964C28.6618 29.2991 28.1396 29.5 27.5556 29.5H3.44444C2.86044 29.5 2.33822 29.2991 1.98504 28.9964C1.63901 28.6998 1.5 28.3516 1.5 28.0476V10.3333C1.5 9.73179 2.13594 8.88095 3.44444 8.88095ZM22.6111 7.38095V8.83333H22.1667V7.38095C22.1667 5.72742 21.3984 4.1982 20.1296 3.1106C19.4693 2.54466 18.6978 2.11695 17.8687 1.83777C18.0119 1.87983 18.1535 1.92572 18.2935 1.97539C19.1738 2.28796 19.9603 2.74147 20.6128 3.30071L21.5722 2.18135L20.6128 3.30072C21.2648 3.85962 21.7675 4.51053 22.1051 5.20904C22.4421 5.90651 22.6111 6.64372 22.6111 7.38095ZM11.8333 8.88095H19.1667V10.3333C19.1667 11.0289 18.8462 11.7525 18.1772 12.3259C17.501 12.9055 16.5408 13.2619 15.5 13.2619C14.4592 13.2619 13.499 12.9055 12.8228 12.3259C12.1538 11.7525 11.8333 11.0289 11.8333 10.3333V8.88095ZM8.83333 8.83333H8.38889V7.38095C8.38889 5.9024 9.07225 4.42783 10.3872 3.30072C11.1549 2.64273 12.0959 2.14176 13.1327 1.8373C12.3031 2.11647 11.531 2.54435 10.8704 3.11059C9.60156 4.1982 8.83333 5.72742 8.83333 7.38095V8.83333Z" fill="#FFE500" stroke="black" stroke-width="3"/>
              </svg>
          </a>
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Selamat Datang, {{ auth()->user()->nama }}
          </a>
          <ul class="dropdown-menu">
            {{-- <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li> --}}
            {{-- <li><hr class="dropdown-divider"></li> --}}
            <li>
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
    @else
      <div class="login">
        <a href="{{ route('login') }}">
          <p>Login</p>
        </a>
      </div>
    @endauth
  </div>
</div>
