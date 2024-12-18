@extends('site.layouts.sitelayout')
@section('pageTitle','Catz eye Weddings')

@section('content')

<section class="inner-banner blog">
       <div class="container">
            <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-2">
                     <div class="inner-logo">
                         <a href="{{url('/')}}"> <img src="{{ asset('/site/images/logo-big.png')}}"></a>
                     </div>
                             
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-10">

                                <div class="mobile-nav-button">
                 <div class="mobile-nav-button__line"></div>
                 <div class="mobile-nav-button__line"></div>
                 <div class="mobile-nav-button__line"></div>
            </div>

            <nav class="mobile-menu">
                <ul>
                     
                <li><a href="{{url('/wedding_planner')}}">Wedding Planner</a></li>
                      <li><a href="{{url('/wedding_planner')}}">Photography</a></li>
                      <li><a href="{{url('/blog')}}">Blog</a></li>
                       <li><a href="{{url('/contact-us')}}">Contact</a></li>
                </ul>
            </nav>
                  </div>
            </div>
       </div>
    </section>  


    <section class="blog-detail">
         <div class="container">
               <div class="row">
                  <div class="col-md-12">
                        <img src="{{ asset('/site/images/detail01.jpg')}}">
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                       <div class="post-date">Posted on Ocotber 18, 2021</div>
                       <h2>5 Reasons To Have A Small Wedding In 2021</h2>
                       <p>Suspendisse potenti. Etiam fringilla pretium ipsum non blandit. Vivamus eget nisi non mi iaculis iaculis imperdiet quis eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris suscipit ex nec est aliquam, a tincidunt eros iaculis. Proin suscipit risus eu ullamcorper faucibus. Mauris tempor eget libero condimentum tincidunt...Praesent tristique nisl felis at volutpat erat hendrerit ac. Proin ultricies nibhe dolye maximus scelerisque. Integer molliser faucibus neque nec tincidunt. Aliquam era volutpat. Praeser tempor maluada quam, nec rutrum arcu ornare sed. Duru eget ligula at nibh viverra ultriciesi. Nunc eu dui tortor the integer.</p>

                        <p>Proin ultricies nibh non dolor maximus sceleue. Integer molliser fauci neque nec tincidunte. Aliquam erat volutpat. Praeser tempor maladi quam, nec rutrum arcu ornare sed. Duru egiter ligula at nibh viverra ultricies.</p>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-4 col-xs-12 col-sm-6">
                     <div class="item">
                       <img src="{{ asset('/site/images/detail02.jpg')}}">
                    </div>
                  </div>

                  <div class="col-md-4 col-xs-12 col-sm-6">
                     <div class="item">
                       <img src="{{ asset('/site/images/detail03.jpg')}}">
                    </div>
                  </div>

                  <div class="col-md-4 col-xs-12 col-sm-6">
                     <div class="item">
                       <img src="{{ asset('/site/images/detail04.jpg')}}">
                    </div>
                  </div>
               </div>

               <div class="row">
                 <div class="col-sm-12">
                  <p>Proin ultricies nibh non dolor maximus sceleue. Integer molliser fauci neque nec tincidunte. Aliquam erat volutpat. Praeser tempor maladi quam, nec rutrum arcu ornare sed. Duru egiter ligula at nibh viverra ultricies.</p>
                 </div>
               </div>
         </div>
    </section>


    

@endsection
@push('js')

@endpush