<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- favicon --}}
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}">

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="/assets/css/code.css">
  <link rel="stylesheet" href="/assets/css/forget.css">
  <link rel="stylesheet" href="/assets/css/kontak.css">
  <link rel="stylesheet" href="/assets/css/landing_page.css">
  <link rel="stylesheet" href="/assets/css/layanan.css">
  <link rel="stylesheet" href="/assets/css/login.css">
  <link rel="stylesheet" href="/assets/css/reenter_password.css">
  <link rel="stylesheet" href="/assets/css/register.css">
  <link rel="stylesheet" href="/assets/css/about.css">
  <link rel="stylesheet" href="/assets/css/layanan_details.css">
 

  <title>KingDesign</title>
  
</head>

<body>
  @include('partials.navbar')
  @yield('content')
  @include('partials.footer')
  
  <script src="/assets/js/landing_page.js"></script>

  {{-- bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
