<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- favicon -->
      <link rel="icon" href="{{ asset('/user/images/fav.png')}}" type="image/png" sizes="32x32" />
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
      <link href="href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <!-- font awsome css-->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('/user/css/style.css')}}" />

        <!-- DateRangePicker -->
        <link type="text/css"
              href="{{ asset('/admin/vendor/daterangepicker.css')}}"
              rel="stylesheet">
      <title>Catzeye</title>
   </head>
   <body>

   @yield('content')

   @include('application.layouts.application-js')
        @stack('js')
    
   </body>
</html>