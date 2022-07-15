<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel Blog - By Ivan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    {{-- style --}}
    @include('partials.style')
  </head>
  <body>
    {{-- navbar --}}
    @include('partials.navbar')
    
        @yield('container')

    {{-- Footer --}}
    @include('partials.footer')
   

    {{-- script --}}
    @include('partials.script')
  </body>
</html>