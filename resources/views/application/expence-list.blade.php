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
                    
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                  
                                    <div class="form-group" name="pick-date" id="pick-date">
                                    <!-- <label class="form-label"
                                        for="dateRangePickerSample02">Date</label> -->
                                    <input id="dateRangePickerSample02"
                                        type="text"
                                        class="form-control"
                                        placeholder="Range example"
                                        data-toggle="daterangepicker"
                                        data-daterangepicker-drops="up"
                                        data-daterangepicker-format="DD-MM-YYYY"
                                        >
                                        <!-- data-daterangepicker-start-date="2021/08/06"
                                        data-daterangepicker-end-date="2021/08/06" -->
                                    </div>
                        <hr>
                        
                        @if($result != "[]")
                        <h4>Expences</h4>
                        @foreach($result as $data)
                        <div class="row">
                           <div class="form-group col-md-6">
                            <p class="card-title mb-8pt" style="color:#7a877d">Amount :{{$data['amount']}} </p>
                            <p class="card-title mb-8pt" style="color:#7a877d">Date : {{$data['date']}}</p>
                            <p class="card-title mb-8pt" style="color:#7a877d">Description : {{$data['description']}}</p>
                           </div>
                           
                        </div>
                        <hr>
                        @endforeach
                        @else
                        <div class="row">
                           <div class="form-group col-md-6">
                            <p class="card-title mb-8pt" style="color:#7a877d">Currently no expences </p>
                            
                           </div>
                           
                        </div>
                        <hr>
                        @endif
                     
                  </div>
               </div>
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="front" href="#" id="newExpence">New</a>
                     <a class="back" href="{{ route('home') }}">Back</a>
                     <!-- <button type="submit" class="btn contact-submit " id="saveAll"  disabled>Accept</button> -->
                     </div>
                  </div>
               </div>
              
               
            </form>
            </div>
         </div>
      </section>

      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="newExpenceAmount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body sucess">
               
                  <form action="" method="POST" accept-charset="utf-8" id="saveExpence" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <h2>New Expence</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                        
                              <div class="row">
                                 <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="amount"  id="exampleFormControlInput1" placeholder="Amount"  />
                                    <div class="val-error error_amount"  style="color:red"></div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <input type="date" class="form-control" name="date" id="exampleFormControlInput1" placeholder="date"  />
                                    <div class="val-error error_date"  style="color:red"></div>
                                 </div>
                              </div>
                              
                              
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Description" ></textarea>
                                    <div class="val-error error_description"  style="color:red"></div>
                                 </div>
                              </div>
                           
                        </div>
                     </div>
                     
                     <div class="front-back">
                        <div class="row">
                        
                           <div class="col-md-12 col-sm-12 col-xs-12">
                           <!-- <a class="front" id="saveProceed">Accept</a> -->
                           <button class="btn btn-primary">Save</button>
                           </div>
                        </div>
                     </div>
               </form>





               
               </div>
            </div>
         </div>
      </div>


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
<script src="{{url('admin/admin/enquiry.js')}}" type="text/javascript"></script>
@endpush