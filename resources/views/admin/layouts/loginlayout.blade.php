<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        @include('admin.layouts.login-css')
    </head>

    <body class="layout-default layout-login-centered-boxed" style="background-image: url({{ asset('/admin/images/1280_15ntkpxqt54y-sai-kiran-anagani.jpg')}});">
        @yield('content')
        @include('admin.layouts.login-js')
        @stack('js')
    </body>

</html>