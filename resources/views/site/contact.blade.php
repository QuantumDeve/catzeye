@extends('site.layouts.sitelayout')
@section('pageTitle','Catz eye Weddings')

@section('content')

<section class="inner-banner contact">
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


    <section class="contact-detail">
         <div class="container">
               <div class="row">
                     <div class="col-md-6">
                        <h1>I’d love to tell your story.</h1>
                        <p>I’m excited to go wherever your love story is taking me and looking forward to hearing from you!We'd love to hear from you! Please fill out the form below or send a note directly with as much details as possible to info@catzeye_eventplanners</p>
                     </div>

                     <div class="col-md-6">
                        <h5>phone:<span> +91 8281927624</span></h5>
                        <h5>Email:<span>info@catzeye_eventplanners</span></h5>
                        <h5>address:<span>XFR4+65R, Mannarkkad, Kerala 678762</span></h5>
                     </div>
               </div>
         </div>
    </section>

    <section class="contact-section">
         <div class="container">
               <div class="row">
                     <div class="col-md-12">
                           <div class="contact-form">
                                 <h4>ARE YOU INTERESTED TO WORK WITH ME? GET IN TOUCH</h4>
                                 <p>I'd love to hear from you! Please fill out the form below to request my availability and to receive information of my wedding collections.</p>

                                 <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                   
                                    <input type="email" class="form-control filed" id="exampleFormControlInput1" placeholder="First Name" />
                                </div>
                                <div class="form-group col-md-6">
                                    
                                    <input type="email" class="form-control filed" id="exampleFormControlInput1" placeholder="Last Name" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    
                                    <input type="email" class="form-control filed" id="exampleFormControlInput1" placeholder="Phone" />
                                </div>
                                <div class="form-group col-md-6">
                                   
                                    <input type="email" class="form-control filed" id="exampleFormControlInput1" placeholder="EMail" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    
                                    <textarea class="form-control text-area" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="contact-button">
                            <button type="submit" class="btn btn-primary contact-submit">Send Message</button></div>
                        </form>
                           </div>


                     </div>
               </div>
         </div>
    </section>


    

@endsection
@push('js')

@endpush