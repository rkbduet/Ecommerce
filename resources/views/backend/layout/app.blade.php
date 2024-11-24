<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AdminLTE 3 | Dashboard 2</title>

  @include('backend.includes.main-css')
 
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 @include('backend.layout.header')

 @include('backend.layout.sidebar')

 @yield('content')


@include('backend.layout.footer')
</div>
<!-- ./wrapper -->

@include('backend.includes.main-js')

</body>
</html>

