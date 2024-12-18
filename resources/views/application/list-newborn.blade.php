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
                     <h2>Newborn Photography</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                     <div class="item">
                        <h4>Our services include</h4>
                        <div class="form-container">
                           <input type="hidden" name="event" id="event" value="3">
                        @foreach($result['events'] as $data)
                        @if($data['item'] ==1)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="1" name="1" value="1"/>
                              <label class="checkbox" for="1">Theme Decoration</label>
                           </div>
                           
                           @endif
                           @if($data['item'] ==2)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="2" name="2" value="2"/>
                              <label class="checkbox" for="2">Photography</label>
                           </div>
                           
                           @endif
                           @if($data['item'] ==3)
                           <div class="checkbox-container">
                              <input type="checkbox" checked id="3" name="3" value="3"/>
                              <label class="checkbox" for="3">Videography</label>
                           </div>
                          
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="front-back">
                  <div class="row">
                    
                     <div class="col-md-12 col-sm-12 col-xs-12">
                     <a class="back" href="{{ route('admin.list.enquiry') }}">Back</a>
                        <a href="{{url('admin/get-personal/'.$result['id'])}}" class="front">Next</a>
                     </div>
                  </div>
               </div>
               <form>
            </div>
         </div>
      </section>
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
                  <img src="{{asset('/user/images/happy.png')}}">
                  <h4>Thank You!</h4>
                  <p>Your submission is received and we<br>will contact you soon</p>
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