<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  @include('frontend.layouts.styles')
  @yield('head')
</head>
<body>
@include('frontend.layouts.navbar')
@yield('content')
@include('frontend.layouts.footer')
@include('frontend.layouts.scripts')
@yield('footer')
</body>
</html>

