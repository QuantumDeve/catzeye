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
      <section class="personal-detail">
         <div class="container">
            <div class="content">
            <form action="" method="POST" accept-charset="utf-8" id="submit-personal" enctype="multipart/form-data">
                   @csrf
               <div class="row">
                  <div class="col-md-12">
                     <h2>Fill your Personal Informations</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                  
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="first_name" id="exampleFormControlInput1" placeholder="First Name" required="" />
                              <div class="val-error error_first_name"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="last_name" id="exampleFormControlInput1" placeholder="Last Name" required="" />
                              <div class="val-error error_last_name"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="tel" class="form-control" name="mobile" id="exampleFormControlInput1" placeholder="Phone Numer" required="" />
                              <div class="val-error error_mobile"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Email Address" required="" />
                              <div class="val-error error_email"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="location" id="exampleFormControlInput1" placeholder="Enter your event location" required="" />
                              <div class="val-error error_location"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder=" event date" required="" />
                              <div class="val-error error_date"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Address"></textarea>
                              <div class="val-error error_address"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Descirbe About your Event"></textarea>
                           </div>
                        </div>
                     
                  </div>
               </div>
               
              <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <!-- <a class="back" href="{{route('/')}}">Back</a> -->
                     <button class="front">Next</button>
                     </div>
                  </div>
               </div>
               </form>
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