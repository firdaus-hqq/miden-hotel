<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
   <link rel="icon" href="{{ URL::asset('images/logo.png') }}">
   <title>MIDEN Hotel</title>
</head>

<body>
   @include('partials.navbar')

   @yield('beranda')
   @yield('formpemesanan')
   @yield('form')
   @yield('kamar')
   @yield('resi')

   @include('partials.footer')

   <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
