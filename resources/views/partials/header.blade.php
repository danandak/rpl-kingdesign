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
      </div>
    </div>
    <div class="login">
      <a href="{{ route('login') }}">
        <p>Login</p>
      </a>
    </div>
  </div>
</div>
