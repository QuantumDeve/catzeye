@extends('application.layouts.applicationlayout')
@section('pageTitle','Check List')

@section('content')
<section class="black-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <a href="{{route('/')}}"><img src="{{asset('/user/images/logo_white.png')}}"></a>
               </div>
            </div>
         </div>
      </section>
      <section class="check-list">
         <div class="container">
            <div class="content">
            <form action="" method="POST" accept-charset="utf-8" id="submit-wedding" enctype="multipart/form-data">
                   @csrf
               <div class="row">
                  <div class="col-md-12">
                     <h2>Maternity Party Checklist</h2>
                  </div>
               </div>
               <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include</h4>
                        <div class="form-container">
                           
                           <div class="checkbox-container">
                           <input type="hidden" name="event" id="event" value="2">
                              <input type="checkbox" id="1" name="1" value="1"/>
                              <label class="checkbox" for="1">Photography</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="2" name="2" value="2"/>
                              <label class="checkbox" for="2">Videography</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="3" name="3" value="3"/>
                              <label class="checkbox" for="3">Venue Management</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="4" name="4" value="4"/>
                              <label class="checkbox" for="4">Theme Cakes</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="5" name="5" value="5"/>
                              <label class="checkbox" for="5">Theme Decoration</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="6" name="6" value="6"/>
                              <label class="checkbox" for="6">Light system</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="7" name="7" value="7"/>
                              <label class="checkbox" for="7">Music and entertinment</label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <a class="back" href="{{route('/')}}">Back</a>
                        <button class="front">Next</button>
                     </div>
                  </div>
               </div>
               <form>
            </div>
         </div>
      </section>
      <section class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <p>Copyright © 2021 CatsEye All Rights Reserved</p>
               </div>
            </div>
         </div>
      </section>
       @endsection
       @push('js')
<script src="{{url('user/application/application.js')}}" type="text/javascript"></script>
@endpush