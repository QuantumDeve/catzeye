@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

                

<div class="border-top-1 page-section"
     data-block-id="faq" style="background-color:black">
    <div class="container">
        <div class="page-headline text-center">
            <h2 style="color:white">Enquiries</h2>
            <!-- <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p> -->
        </div>
        <div class="row card-group-row">
            @foreach($result as $data)
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <!-- <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                        @if($data['status'] == 0)
                            <i class="material-icons" style="color:#d91e5d">post_add</i>
                         @else
                            <i class="material-icons" style="color:#23c24d">post_add</i>
                        @endif 
                        </span> -->

                        
                        <div class="flex">
                            @if($data['event'] == 1)
                            <a class="card-title mb-8pt" id="event"
                               href="{{url('admin/get-event/'.$data['id'])}}">Wedding Ceremony</a>
                            @elseif($data['event'] == 2)
                            <a class="card-title mb-8pt" id="event"
                               href="{{url('admin/get-event/'.$data['id'])}}">Maternity Party </a>
                            @elseif($data['event'] == 3)
                            <a class="card-title mb-8pt" id="event"
                               href="{{url('admin/get-event/'.$data['id'])}}">Newborn Photography </a>
                            @else
                            <a class="card-title mb-8pt" id="event"
                               href="{{url('admin/get-event/'.$data['id'])}}">Birthday Party </a>
                            @endif


                            <!-- <p class="card-title mb-8pt" style="color:#7a877d">{{$data['first_name']}} {{$data['last_name']}}</p> -->
                            <input type="hidden" name="id" id="event_id" value="{{$data['id']}}">
                            <p class="card-title mb-8pt" style="color:#7a877d">{{$data['first_name']}} {{$data['last_name']}}</p>
                            <p class="card-title mb-8pt" style="color:#7a877d">{{$data['mobile']}}</p>
                            <p class="card-title mb-8pt" style="color:#7a877d">{{$data['location']}}</p>
                            @if($data['date'])
                            <p class="card-title mb-8pt" style="color:#7a877d">{{ date_format(date_create($data['date']),"M d,Y")}}</p>
                            @else
                            @endif
                        </div>
                        @if($data['amount'])
                        <i class="material-icons"  ><a href="{{url('admin/get-summary/'.$data['id'])}}" style="color:#23c24d">post_add</a></i>
                        @endif
                        <p>    </P>
                        <i class="material-icons" style="color:#d91e5d">delete</i>
                    </div>
                    <!-- <div class="card-footer d-flex lh-1 px-16pt py-8pt"> -->
                    <!-- @if($data['status'] == 0)
                        <div class="flex text-muted"><span  style="color:#d91e5d;">{{$data['first_name']}} {{$data['last_name']}}</span></div>
                    @else
                        <div class="flex text-muted"><small>{{$data['first_name']}} {{$data['last_name']}}</small></div>
                    @endif -->
                    <!-- </div> -->
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</div>




<!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="summaryList" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                           <h2>Advance Summary</h2>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                        
                              <div class="row">
                                 <div class="form-group col-md-6">
                                 <input type="hidden" value="" name="id">
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


@endsection
@push('js')
<script src="{{url('admin/admin/enquiry.js')}}" type="text/javascript"></script>
@endpush