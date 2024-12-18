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
               <div class="row">
                  <div class="col-md-12">
                     <h2>Select your wedding ceremony items</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>WEDDING PHOTOGRAPHY</h4>
                        <div class="form-container">
                           <div class="checkbox-container">
                              <input type="checkbox" id="01"/>
                              <label class="checkbox" for="01">Candid Photography</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="02"/>
                              <label class="checkbox" for="02">Candid Videography</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="03"/>
                              <label class="checkbox" for="03">Traditional Photography</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="04"/>
                              <label class="checkbox" for="04">Traditional Videography</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>FIRST THINGS </h4>
                        <div class="form-container">
                           <div class="checkbox-container">
                              <input type="checkbox" id="05"/>
                              <label class="checkbox" for="05">Venue</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="06"/>
                              <label class="checkbox" for="06">Invitation cards</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="07"/>
                              <label class="checkbox" for="07">Designing </label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="08"/>
                              <label class="checkbox" for="08">Postage</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="09"/>
                              <label class="checkbox" for="09">Save the date cards</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>AFTER WARDS</h4>
                        <div class="form-container">
                           <div class="checkbox-container">
                              <input type="checkbox" id="10"/>
                              <label class="checkbox" for="10">Transportation</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="11"/>
                              <label class="checkbox" for="11">Car and rental for
                              Bride and groom</label>
                           </div>
                           <div class="checkbox-container">
                              <input type="checkbox" id="12"/>
                              <label class="checkbox" for="12">Security </label>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                        <a class="back" href="{{route('/')}}">Back</a>
                        <a class="front" href="{{route('personal')}}">Next</a>
                     </div>
                  </div>
               </div>
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