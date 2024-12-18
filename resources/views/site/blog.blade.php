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


    <section class="blogs">
         <div class="container">
               <div class="row item">
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <img src="{{ asset('/site/images/blog01.jpg')}}">
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="post-date">Posted on Ocotber 18, 2021</div>
                           <h2>5 Reasons To Have A Small Wedding In 2021</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, </p>
                           <a href="#">Read More</a>
                     </div>
               </div> <!-- ------------------------------blog item---------------- -->

               <div class="row item">
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <img src="{{ asset('/site/images/blog01.jpg')}}">
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="post-date">Posted on Ocotber 18, 2021</div>
                           <h2>5 Reasons To Have A Small Wedding In 2021</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, </p>
                           <a href="#">Read More</a>
                     </div>
               </div> <!-- ------------------------------blog item---------------- -->

               <div class="row item">
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <img src="{{ asset('/site/images/blog01.jpg')}}">
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="post-date">Posted on Ocotber 18, 2021</div>
                           <h2>5 Reasons To Have A Small Wedding In 2021</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, </p>
                           <a href="#">Read More</a>
                     </div>
               </div> <!-- ------------------------------blog item---------------- -->

               <div class="row item">
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <img src="{{ asset('/site/images/blog01.jpg')}}">
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-6">
                           <div class="post-date">Posted on Ocotber 18, 2021</div>
                           <h2>5 Reasons To Have A Small Wedding In 2021</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt nunc lorem, nec faucibus mi facilisis eget. Mauris laoreet, nisl id faucibus pellentesque, </p>
                           <a href="#">Read More</a>
                     </div>
               </div> <!-- ------------------------------blog item---------------- -->
         </div>
    </section>
   



    

@endsection
@push('js')

@endpush