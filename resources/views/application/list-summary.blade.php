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
                  
                        <div class="row">
                           <p class="card-title mb-8pt" style="color:#7a877d"><h5>Total Amount :    {{$result['amount']}}</h5></p>
                            <br>
                           <p class="card-title mb-8pt" style="color:#7a877d"><h5>Total advance :    {{$result['total_advance']}}</h5></p>
                           <p class="card-title mb-8pt" style="color:#7a877d"><h5>Balance Amount :    {{$result['balance']}}</h5></p>
                        </div>
                        <hr>
                        <h4>Advance Summay</h4>
                        @foreach($result['advances'] as $data)

                        <div class="row">
                           <div class="form-group col-md-6">
                            <p class="card-title mb-8pt" style="color:#7a877d">Advance : {{$data['advance']}}</p>
                            <p class="card-title mb-8pt" style="color:#7a877d">Date : {{$data['date']}}</p>
                           </div>
                           
                        </div>
                        <hr>
                        @endforeach
                     
                  </div>
               </div>
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="front" href="#" id="newAdvance">New Advance</a>
                     <a class="back" href="{{ route('admin.list.enquiry') }}">Back</a>
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
      <div class="modal fade" id="newAdvanceAmount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body sucess">
               
                  <form action="" method="POST" accept-charset="utf-8" id="saveAdvance" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <h2>New Advance</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                        
                                 <input type="hidden" value="{{$result['id']}}" name="id">
                                    <input type="text" class="form-control" name="amount"  id="exampleFormControlInput1" placeholder="Amount"  />
                                    <div class="val-error error_amount"  style="color:red"></div>
                                 
                           
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