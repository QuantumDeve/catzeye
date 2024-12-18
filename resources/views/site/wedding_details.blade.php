@extends('site.layouts.sitelayout')
@section('pageTitle','Catz eye Weddings')

@section('content')

<section class="inner-banner wedding-planner">
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
   


    <section class="detials">
       <div class="container">
         <div class="row">
               <div class="col-md-12">
                     <h1>{{$event->groom}} + {{$event->bride}}</h1>
                     <div class="date">{{ date_format(date_create($event->date), 'M d,Y') }}</div>
                     <p>{{$event->description}}</p>
                     <ul>
                        <!-- <li><b>Photographed By :</b> Lorem ipsum dolor sit amet, consectetuer adi sollicitudin, lorem quis bibendum auci elit consequat ipsutis.</li>
                        <li><b>Filmed By :</b> Sushanth Bhat, Sathya Bharath, Mangala Raj, Sagar Shirke, Satish Pai, Rutvij Shetty</li>
                        <li><b>Planned By :</b> Kkings Events</li>
                        <li><b>Decor : </b>Altair</li>
                        <li><b>Florals :</b> Twelve Tomatoes</li>
                        <li><b>Makeup : </b>Tejas Shah, Lekha ( The Cut Collective )</li> -->
                     </ul>
               </div>
         </div>
       </div>
    </section>



    <section class="details-items">
       <div class="container">
                  <?php $i = 0;?>
                  @foreach($event['eventImages'] as $key => $image)
                  @if($i == 0)
                     <div class="row">
                  @endif
                  @if($i<=2)
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <a data-fancybox="gallery" href="{{ asset('/site/images/video05.jpg')}}">
                         <img src="{{asset('storage/'.$image['image']) }}">
                        </a>
                     </div>
                  </div>
                  @endif
                  <php $i++ ?>
                  <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/g1.jpg')}}">
                         <img src="{{ asset('/site/images/g1.jpg')}}">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/video02.jpg')}}">
                         <img src="{{ asset('/site/images/video02.jpg')}}">
                        </a>
                     </div>
                  </div> -->
               @if($i==3)
                  </div> <!-- ---------------1st--------------- -->

                  <div class="row">
               @endif
               @if($i>2 && $i<=5)
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/g2.jpg')}}">
                         <img src="{{asset('storage/'.$image['image']) }}">
                        </a>
                     </div>
                  </div>
                  @endif
                  <php $i++ ?>
                  <!-- <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/g20.jpg')}}">
                         <img src="{{ asset('/site/images/g20.jpg')}}">
                        </a>
                     </div>
                  </div> -->
                  
            @if($i==6)
            </div><!-- ---------------2nd--------------- -->

            <div class="row">
            @endif
               @if($i>5 && $i<=7)
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/g3.jpg')}}">
                         <img src="{{asset('storage/'.$image['image']) }}">
                        </a>
                     </div>
                  </div>
               @endif
               <php $i++ ?>  
               @if($i==8)
               
            </div>
            <php $i = 0 ?>
               @endif
               @endforeach
               
               <!-- ---------------3rd--------------- -->

             <!-- <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <a data-fancybox="gallery" href="{{ asset('/site/images/video02.jpg')}}">
                         <img src="{{ asset('/site/images/video02.jpg')}}">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/video03.jpg')}}">
                         <img src="{{ asset('/site/images/video03.jpg')}}">
                        </a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                         <a data-fancybox="gallery" href="{{ asset('/site/images/video04.jpg')}}">
                         <img src="{{ asset('/site/images/video04.jpg')}}">
                        </a>
                     </div>
                  </div> 

            </div> -->

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