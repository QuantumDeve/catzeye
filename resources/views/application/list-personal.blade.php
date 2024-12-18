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
                     <h2>Client personal informations</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                  
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="first_name" value="{{$result['first_name']}}" id="exampleFormControlInput1" placeholder="First Name" readonly />
                              <div class="val-error error_first_name"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="last_name" value="{{$result['last_name']}}" id="exampleFormControlInput1" placeholder="Last Name" readonly />
                              <div class="val-error error_last_name"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="tel" class="form-control" name="mobile" value="{{$result['mobile']}}" id="exampleFormControlInput1" placeholder="Phone Numer" readonly />
                              <div class="val-error error_mobile"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="email" class="form-control" name="email" value="{{$result['email']}}" id="exampleFormControlInput1" placeholder="Email Address" readonly />
                              <div class="val-error error_email"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="location" value="{{$result['location']}}" id="exampleFormControlInput1" placeholder="" readonly />
                              <div class="val-error error_mobile"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="date" value="{{$result['date']}}" id="exampleFormControlInput1" placeholder="" readonly />
                              <div class="val-error error_email"  style="color:red"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" placeholder="Address" readonly>{{$result['address']}}</textarea>
                              <div class="val-error error_address"  style="color:red"></div>
                           </div>
                           <div class="form-group col-md-6">
                              <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Descirbe About your Event" readonly>{{$result['description']}}</textarea>
                           </div>
                        </div>
                     
                  </div>
               </div>
               @if($result['amount'])
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="front" href="{{ route('admin.list.enquiry') }}">Goto List</a>
                     <!-- <button type="submit" class="btn contact-submit " id="saveAll"  disabled>Accept</button> -->
                     </div>
                  </div>
               </div>
               @else
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="front" id="saveAll">Accept</a>
                     <!-- <button type="submit" class="btn contact-submit " id="saveAll"  disabled>Accept</button> -->
                     </div>
                  </div>
               </div>
               @endif
               
            </form>
            </div>
         </div>
      </section>

      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <!-- <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div> -->
               <div class="modal-body sucess">
                  <!-- <img src="{{asset('/user/images/happy.png')}}">
                  <h4>Thank You!</h4>
                  <p>Your submission is received and we<br>will contact you soon</p> -->




                  <form action="" method="POST" accept-charset="utf-8" id="finalSave" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <h2>Final Details</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                        
                              <div class="row">
                                 <div class="form-group col-md-6">
                                 <input type="hidden" value="{{$result['id']}}" name="id">
                                    <input type="text" class="form-control" name="amount"  id="exampleFormControlInput1" placeholder="Amount"  />
                                    <div class="val-error error_amount"  style="color:red"></div>
                                 </div>
                                 <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="advance" id="exampleFormControlInput1" placeholder="Advance"  />
                                    <div class="val-error error_advance"  style="color:red"></div>
                                 </div>
                              </div>
                              
                              
                              <div class="row">
                                 <div class="form-group col-md-12">
                                    <textarea class="form-control" name="work_details" id="exampleFormControlTextarea1" rows="3" placeholder="Work details" ></textarea>
                                    <div class="val-error error_work_details"  style="color:red"></div>
                                 </div>
                              </div>
                           
                        </div>
                     </div>
                     
                     <div class="front-back">
                        <div class="row">
                        
                           <div class="col-md-12 col-sm-12 col-xs-12">
                           <!-- <a class="front" id="saveProceed">Accept</a> -->
                           <button class="btn btn-primary">Save changes</button>
                           </div>
                        </div>
                     </div>
               </form>





               
               </div>
            </div>
         </div>
      </div>



      <!-- Thanks Modal -->
      <div class="modal fade" id="thanks" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <!-- <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div> -->
               <div class="modal-body sucess">
                  <img src="{{asset('/user/images/happy.png')}}">
                  <h4>Accepted!</h4>
                  <p>You Accept this application<br>Successfully</p>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <a href="{{ route('admin.list.enquiry') }}" class="btn btn-primary">Ok</a>
                  </div>
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