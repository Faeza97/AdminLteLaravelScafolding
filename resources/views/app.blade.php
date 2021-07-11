<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.asset.css.layout_css')
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  @include('admin.navigation.navbar')

  @include('admin.navigation.sidebar')

  @yield('contentWrapper')
  @yield('contentWrapperV2')

  @include('admin.navigation.footer')
</div>

@include('admin.asset.js.layout_js')
</body>
</html>
