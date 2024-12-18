@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

<div class="container page__container  page-section">
    <div class="page-separator">
        <div class="page-separator__text">New Employee</div>
    </div>
    <div class="col-md-6 p-0">
        <form action="" method="POST" accept-charset="utf-8" id="submit-employee" enctype="multipart/form-data">
             @csrf
            <div class="form-group">
                <label class="form-label">First name</label>
                <input type="text"
                       class="form-control"
                       id="first_name" name="first_name"
                       placeholder="Employee first name ...">
                       <div class="val-error error_first_name"  style="color:red"></div>
            </div>
            <div class="form-group">
                <label class="form-label">Last name</label>
                <input type="text"
                       class="form-control"
                       id="last_name" name="last_name"
                       placeholder="Employee last name ...">
                       <div class="val-error error_last_name"  style="color:red"></div>
            </div>
            <div class="form-group">
                <label class="form-label">Email address</label>
                <input type="email"
                       class="form-control"
                       id="email" name="email"
                       placeholder="Employee email address ...">
                       <div class="val-error error_email"  style="color:red"></div>
            </div>
             <div class="form-group">
                <label class="form-label">Mobile</label>
                <input type="tel"
                       class="form-control"
                       id="mobile" name="mobile"
                       placeholder="Employee mobile number ...">
                       <div class="val-error error_mobile"  style="color:red"></div>
            </div>
            <div class="form-group">
                <label class="form-label">Employee Id</label>
                <input type="text"
                       class="form-control"
                       id="emp_id" name="emp_id"
                       placeholder="Employee Id  ...">
                       <div class="val-error error_emp_id"  style="color:red"></div>
            </div>
                <div class="form-group">
                <label class="form-label">Designation</label>
                <input type="text"
                       class="form-control"
                       id="designation" name="designation"
                       placeholder="Employee designation  ...">
                       <div class="val-error error_designation"  style="color:red"></div>
            </div> 
            <button class="btn btn-primary">Save changes</button>
        </form>
    </div>
</div>


@endsection

@push('js')
<script src="{{url('admin/admin/employee.js')}}" type="text/javascript"></script>
<!-- <script src="{{asset('assets/js/vendors/jquery-validator.min.js')}}"></script> -->
<script src="{{ asset('/assets/js/vendor/toastr.min.js') }}"></script>
<script src="{{ asset('/assets/js/toastr.script.js') }}"></script>
@endpush