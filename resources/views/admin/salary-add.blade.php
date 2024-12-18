@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

<div class="container page__container  page-section">
    <div class="page-separator">
        <div class="page-separator__text">Add Salary</div>
    </div>
    <div class="col-md-6 p-0">
        <form action="" method="POST" accept-charset="utf-8" id="submit-salary" enctype="multipart/form-data">
             @csrf


            



            <div class="form-group">
                <label for="leave_type"
                               class="form-label">Employee</label>
                        <select name="employee"
                                id="employee"
                                class="custom-select">
                                @foreach($result as $data)
                                <option value="{{$data['id']}}">{{$data['first_name']}} {{$data['last_name']}}</option>
                                @endforeach
                        </select>
                        <div class="val-error error_employee" style="color:red"></div>
            </div>

            <div class="form-group">
                <label class="form-label">Amount</label>
                <input type="text"
                       class="form-control"
                       id="amount" name="amount"
                       placeholder="Enter Amount ...">
                       <div class="val-error error_amount" style="color:red"></div>
            </div>

            <div class="form-group">
                <label for="leave_type"
                               class="form-label">Status</label>
                        <select name="status"
                                id="status"
                                class="custom-select">
                            <option value="0">Pending</option>
                            <option value="1">Paid</option>
                        </select>
                        <div class="val-error error_status"  style="color:red"></div>
            </div>

                <div class="form-group">
                                    <label class="form-label"
                                           for="dateRangePickerSample01">Date</label>
                                    <input id="dateRangePickerSample01"
                                           name="salary_date"
                                           type="text"
                                           class="form-control"
                                           placeholder="Date example"
                                           data-toggle="daterangepicker"
                                           data-daterangepicker-drops="up"
                                           data-daterangepicker-start-date="2021/01/01"
                                           data-daterangepicker-single-date-picker="true">
                                           <div class="val-error error_salary_date"  style="color:red"></div>
                                </div>

                <div class="form-group">
                <label class="form-label">Description</label>
                <textarea class="form-control"
                       id="description" name="description"
                       placeholder="Salary description  ..."></textarea>
                       <div class="val-error error_description"  style="color:red"></div>
            </div> 
            <div class="form-group success-message d-none" style="color:green">
            <span>Salary added successfully</span>
            </div>

            <button class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>





@endsection

@push('js')
<script src="{{url('admin/admin/salary.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('assets/js/vendors/jquery-validator.min.js')}}"></script> -->
<script src="{{ asset('/assets/js/vendor/toastr.min.js') }}"></script>
<script src="{{ asset('/assets/js/toastr.script.js') }}"></script>



@endpush