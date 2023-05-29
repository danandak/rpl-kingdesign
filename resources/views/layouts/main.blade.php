<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

  {{-- <title>Document</title> --}}
  
</head>

<body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
</body>

</html>
