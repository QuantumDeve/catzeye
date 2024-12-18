@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

<div class="container page__container  page-section">
    <div class="page-separator">
        <div class="page-separator__text">Add Event</div>
    </div>
    <div class="col-md-6 p-0">
        <form action="" method="POST" accept-charset="utf-8" id="submit-event" enctype="multipart/form-data">
             @csrf

           

            <div class="form-group">
                <label class="form-label">Groom</label>
                <input type="text"
                       class="form-control"
                       id="groom" name="groom"
                       placeholder="Groom name ...">
                       <div class="val-error error_groom" style="color:red"></div>
            </div>

            <div class="form-group">
                <label class="form-label">Bride</label>
                <input type="text"
                       class="form-control"
                       id="bride" name="bride"
                       placeholder="Bride name ...">
                       <div class="val-error error_bride" style="color:red"></div>
            </div>


                <div class="form-group">
                                    <label class="form-label"
                                           for="dateRangePickerSample01">Date</label>
                                    <input id="dateRangePickerSample01"
                                           name="date"
                                           type="text"
                                           class="form-control"
                                           placeholder="Date example"
                                           data-toggle="daterangepicker"
                                           data-daterangepicker-drops="up"
                                           data-daterangepicker-start-date="2021/01/01"
                                           data-daterangepicker-single-date-picker="true">
                                           <div class="val-error error_date"  style="color:red"></div>
                                </div>

                <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control"
                       id="description" name="description"
                       placeholder="Salary description  ..."></textarea>
                       <div class="val-error error_description"  style="color:red"></div>
            </div> 

            <label class="form-label">Image</label>
            <div class="form-group after-add-more">
                
                <input type="file"
                       class="form-control"
                       id="image" name="image[]">
                       <div class="val-error error_image[]" style="color:red"></div>
                       <span class="change"><a class="btn btn-success add-more">Add more</a></span> 
            </div>
            

            <!-- <div class="form-group">
                <label class="form-label">Photographer</label>
                <input type="text"
                       class="form-control"
                       id="photographer" name="photographer"
                       placeholder="Photographer name ...">
                       <div class="val-error error_photographer" style="color:red"></div>
            </div>

            <div class="form-group">
                <label class="form-label">Designed by</label>
                <input type="text"
                       class="form-control"
                       id="photographer" name="photographer"
                       placeholder="Photographer name ...">
                       <div class="val-error error_photographer" style="color:red"></div>
            </div> -->




    

                                      




            <div class="form-group success-message d-none" style="color:green">
            <span>Event added successfully</span>
            </div>

            <button class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>





@endsection

@push('js')
<script src="{{url('admin/admin/event.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('assets/js/vendors/jquery-validator.min.js')}}"></script> -->
<script src="{{ asset('/assets/js/vendor/toastr.min.js') }}"></script>
<script src="{{ asset('/assets/js/toastr.script.js') }}"></script>



@endpush