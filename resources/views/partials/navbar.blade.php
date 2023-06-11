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
