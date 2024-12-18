@extends('site.layouts.sitelayout')
@section('pageTitle','Catz eye Weddings')

@section('content')

<section class="inner-banner">
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
   








   


      <section class="featured-wedding">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <h1>Featured Weddings</h1>
                        </div>
                  </div>

                   <div class="row">
                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo01.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo02.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo03.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo04.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo05.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                                 <a href="#">
                                 <img src="{{ asset('/site/images/photo06.jpg')}}">
                                 <div class="overlay">
                                    <div class="text">PRERNA & SHAUN</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                  </div>

                 
            </div>
      </section>

     

     

     
      <section class="planyour-event">
         <div class="container">
               <div class="row content">
                  
                     
                      <div class="col-md-8">
                        <p>PLAN YOUR EVENT WITH IDEAS FROM</p>
                        <h4>Catzeye weddings</h4>
                     </div>
                      <div class="col-md-4">
                        <a href="#">PLAN YOUR EVENT NOW</a>
                     </div>
                  
                    
               </div>
         </div>
      </section>

      <section class="instagram-section">
         <div class="container">
               <div class="row">
                     <div class="col-md-12">
                           <h1>My greatest ambition is to create<br>powerful images</h1>
                     </div>
               </div>

               <div class="row">

                  <div class="col-md-3 col-sm-6 col-xs-12">
                     <a href="#"> <div class="item">
                           <img src="{{ asset('/site/images/insta01.jpg')}}">
                            <div class="overlay">
                                    <div class="icon">
                                       <img src="{{ asset('/site/images/instagram.png')}}">
                                    </div>
                            </div>
                     </div>
                  </a>
                  </div>

                   <div class="col-md-3 col-sm-6 col-xs-12">
                     <a href="#"> <div class="item">
                           <img src="{{ asset('/site/images/insta02.jpg')}}">
                            <div class="overlay">
                                    <div class="icon">
                                       <img src="{{ asset('/site/images/instagram.png')}}">
                                    </div>
                            </div>
                     </div>
                  </a>
                  </div>

                   <div class="col-md-3 col-sm-6 col-xs-12">
                     <a href="#"> <div class="item">
                           <img src="{{ asset('/site/images/insta03.jpg')}}">
                            <div class="overlay">
                                    <div class="icon">
                                       <img src="{{ asset('/site/images/instagram.png')}}">
                                    </div>
                            </div>
                     </div>
                  </a>
                  </div>

                   <div class="col-md-3 col-sm-6 col-xs-12">
                     <a href="#"> <div class="item">
                           <img src="{{ asset('/site/images/insta04.jpg')}}">
                            <div class="overlay">
                                    <div class="icon">
                                       <img src="{{ asset('/site/images/instagram.png')}}">
                                    </div>
                            </div>
                     </div>
                  </a>
                  </div>


               </div>
         </div>
      </section>


    

@endsection
@push('js')

@endpush