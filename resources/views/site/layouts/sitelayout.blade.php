<!DOCTYPE html>

<html lang="en">

   <head>

      <!-- Required meta tags -->

      <meta charset="utf-8" />

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

      <!-- favicon -->

      <link rel="icon" href="{{ asset('/site/images/fav.png')}}" type="image/png" sizes="32x32" />

      <link rel="preconnect" href="https://fonts.gstatic.com">

      <link href="https://fonts.gstatic.com" crossorigin>

      <link rel="preconnect" href="https://fonts.googleapis.com">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;800;900&display=swap" rel="stylesheet">

      <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

      <!-- font awsome css-->

      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

      <!-- Bootstrap CSS -->

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



      <!-- mobile menu css-->

    <link rel="stylesheet" href="{{ asset('/site/css/mobile-menu.css')}}">





      <!-- Custom CSS -->

      <link rel="stylesheet" href="{{ asset('/site/css/style.css')}}" />

      <title>Catzeye Weddings</title>

   </head>

   <body>

      

   

   

     





   @yield('content')

   



   <section class="footer">

            <div class="container">

                  <div class="row">

                        <div class="col-md-4 col-sm-6 col-xs-12">

                              <div class="item">

                                 <a href="{{url('/')}}"> <img src="{{ asset('/site/images/footer_logo.png')}}"></a>

                                 <div class="social">

                                    <a href="https://www.facebook.com/catzeye003">

                                   <i class="fa fa-facebook-square" aria-hidden="true"></i>

                                 </a>

                                 <a href="https://youtube.com/channel/UCesDrGJtgeImvv0xaA5V1RA">

                                  <i class="fa fa-youtube-play" aria-hidden="true"></i>

                                 </a>

                                  <a href="https://instagram.com/catzeyeweddings?igshid=YmMyMTA2M2Y=">

                                   <i class="fa fa-instagram" aria-hidden="true"></i>

                                 </a>

                                 </div>

                              </div>

                        </div>



                         <div class="col-md-4 col-sm-6 col-xs-12">

                              <div class="item">

                                <h4>get in touch</h4>

                                <p> 2nd Floor, Avenue plaza, Near MES kalladi college<br>mannarkkad, palakkad, Kerala 678583</p>

                                <p>info@catzeyeweddings.com<br>+91 82819 27624 </p>

                                

                                

                                <p> Al RIGGA  NEAR RIGGA METRO STATION<br>DUBAI ,  UAE</p>

                                <p>info@catzeyeweddings.com<br>+97 15664 25429 </p>

                                

                                

                              </div>

                        </div>

                        

                        



                        <div class="col-md-4 col-sm-6 col-xs-12">

                              <div class="item">

                                <h4>Quick Links</h4>

                                <ul>

                                <li><a href="{{url('/wedding_planner')}}">Wedding Planner</a></li>

                      <li><a href="{{url('/wedding_planner')}}">Photography</a></li>

                      <li><a href="{{url('/blog')}}">Blog</a></li>

                       <li><a href="{{url('/contact-us')}}">Contact</a></li>

                                </ul>

                              </div>

                        </div>

                  </div>



                  <div class="row">

                        <div class="col-md-12">

                              <div class="copy-right">

                                 <p>© Catzeye weddings 2022. All Right Reserved.</p>

                              </div>

                        </div>

                  </div>

            </div>

      </section>



@include('application.layouts.application-js')

     @stack('js')





















     

      <!-- Optional JavaScript -->

      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="{{ asset('/site/js/jquery-3.5.1.js')}}"></script>

      <script src="{{ asset('/site/js/popper.min.js')}}"></script>

      <script src="{{ asset('/site/js/bootstrap.min.js')}}"></script>



      <!-- video automatically close-->

     <script type="text/javascript">

        $("#myModal").on('hidden.bs.modal', function (e) {

    $("#myModal iframe").attr("src", $("#myModal iframe").attr("src"));

});

     </script>





      <!-- mobile menu js-->

    <script type="text/javascript">

        $('.mobile-nav-button').on('click', function() {

  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");

  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  

  $( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  

  

  $('.mobile-menu').toggleClass('mobile-menu--open');

  return false;

}); 

    </script>





   </body>

</html>