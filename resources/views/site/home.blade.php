@extends('site.layouts.sitelayout')
@section('pageTitle','Catz eye Weddings')

@section('content')







<section class="banner video">
          <div class="container-fluid">
               <div class="row">
                  
                     <div class="col-md-12">
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

                     <div class="col-md-12">
                        <div class="logo">
                              <a href="{{url('/')}}"> <img src="{{ asset('/site/images/logo-big.png')}}"></a>
                        </div>
                  </div>
               </div>
         </div>

                 <video autoplay loop id="video-background" muted style="width: 100%;">
               <source src="{{ asset('/site/images/video.mp4')}}" type="video/webm">
               </video>

        

      </section>

   


      <section class="about">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <h1>2017, This was the year we chose to make our dream a reality."CATZEYE WEDDINGS".</h1>
                           <p>As a group we are constantly striving to raise the bar higher. We are a bunch of passionate artists who thrive on telling your love stories, and it's a pleasure to be a part of them. We are proud of our enthusiasm. We take pride in our progress.
We believe that every detail matters. And we strive to bring attention to the beauty that must be seen. Every tale is worth telling, and Catzeye is obsessed with doing so.</p>
                        </div>
                  </div>

                  <div class=" row videos">
                        <div class="col-md-8">
                           <div class="item">
                              <img src="{{ asset('/site/images/video01.jpg')}}">
                             <!-- Button trigger modal -->
                        <div class="col-md-12 f-play play" data-toggle="modal" data-target="#myModal"></div>
 

                     <div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="embed-responsive embed-responsive-16by9">
                                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/w1uEPXd3-_s" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
                                      </div>
                                  </div>
                                 
                             </div>
                         </div>
                     </div>

                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/video02.jpg')}}">
                             <!-- Button trigger modal -->
                        <div class="col-md-12 f-play play" data-toggle="modal" data-target="#myModal"></div>
 

                     <div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="embed-responsive embed-responsive-16by9">
                                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZgPo92vfAdo" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
                                      </div>
                                  </div>
                                 
                             </div>
                         </div>
                     </div>

                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/video03.jpg')}}">
                             <!-- Button trigger modal -->
                        <div class="col-md-12 f-play play" data-toggle="modal" data-target="#myModal"></div>
 

                     <div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="embed-responsive embed-responsive-16by9">
                                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fcMQnQBm-f0" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
                                      </div>
                                  </div>
                                 
                             </div>
                         </div>
                     </div>

                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/video04.jpg')}}">
                             <!-- Button trigger modal -->
                        <div class="col-md-12 f-play play" data-toggle="modal" data-target="#myModal"></div>
 

                     <div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="embed-responsive embed-responsive-16by9">
                                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5dVWEbUTo5k" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
                                      </div>
                                  </div>
                                 
                             </div>
                         </div>
                     </div>

                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/video05.jpg')}}">
                             <!-- Button trigger modal -->
                        <div class="col-md-12 f-play play" data-toggle="modal" data-target="#myModal"></div>
 

                     <div id="myModal" class="modal fade" role="dialog" tabindex='-1'>
                         <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-body">
                                     <div class="embed-responsive embed-responsive-16by9">
                                         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/RhpXeoiUOAw" allowfullscreen="" width="100%" height="360" frameborder="0"></iframe>
                                      </div>
                                  </div>
                                 
                             </div>
                         </div>
                     </div>

                           </div>
                        </div>
                  </div>
            </div>
      </section>

      <section class="show-works">
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="content">
                                 <h1>make your story awesome</h1>
                                 <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam </p>
                                 <a href="#">show my works</a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>


      <section class="photography-section">
            <div class="container">
                  <div class="row">
                        @foreach($events as $event)
                        <div class="col-md-4">
                           <div class="item">
                                 <a href="{{url('/wedding_details/'.$event->id)}}">
                                 @if(isset($event['eventImage']['image']))
                                    <img src="{{asset('storage/'.$event['eventImage']['image']) }}" data-src="{{asset('storage/'.$event['eventImage']['image']) }}" alt="event-icon" />
                                 @else
                                    <img src="{{ asset('/site/images/photo01.jpg')}}">
                                 @endif
                                 <div class="overlay">
                                    <div class="text">{{$event->groom}} & {{$event->bride}}</div>
                                 </div>
                              </a>
                           </div>
                        </div>
                        @endforeach

                        <!-- <div class="col-md-4">
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
                        </div> -->
                  </div>
            </div>
      </section>

      <section class="blog-section">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1>Latest News From <br>The Photographers</h1>
               </div>
            </div>
               <div class="row">
                     <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/blog01.jpg')}}">
                              <p>Septmber 7, 2021</p>
                              <h4>Nulla vitae elit libero elit non porta gravida eget</h4>
                              <a href="#">READ MORE</a>
                           </div>
                     </div>

                     <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/blog02.jpg')}}">
                              <p>Septmber 7, 2021</p>
                              <h4>Nulla vitae elit libero elit non porta gravida eget</h4>
                              <a href="#">READ MORE</a>
                           </div>
                     </div>

                     <div class="col-md-4">
                           <div class="item">
                              <img src="{{ asset('/site/images/blog03.jpg')}}">
                              <p>Septmber 7, 2021</p>
                              <h4>Nulla vitae elit libero elit non porta gravida eget</h4>
                              <a href="#">READ MORE</a>
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