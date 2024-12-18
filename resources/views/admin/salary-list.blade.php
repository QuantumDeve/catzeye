@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

                

<div class="border-top-1 page-section"
     data-block-id="faq" style="background-color:#3786ed">
    <div class="container">
        <div class="page-headline text-center">
            <h2>Salary List</h2>
            <!-- <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p> -->
        </div>


        <div class="form-group" name="pick-date" id="pick-date">
                    <label class="form-label"
                           for="dateRangePickerSample02">Date</label>
                    <input id="dateRangePickerSample02"
                           type="text"
                           class="form-control"
                           placeholder="Range example"
                           data-toggle="daterangepicker"
                           data-daterangepicker-drops="down"
                           data-daterangepicker-format="DD-MM-YYYY"
                           >
                           <!-- data-daterangepicker-start-date="2021/08/06"
                           data-daterangepicker-end-date="2021/08/06" -->
        </div>
        <div class="form-group">
                <label for="leave_type"
                               class="form-label">Employee</label>
                        <select name="employee"
                                id="employee"
                                class="custom-select">
                                <option value="">-Select-</option>
                                @foreach($team as $data)
                                <option value="{{$data['id']}}">{{$data['first_name']}} {{$data['last_name']}}</option>
                                @endforeach
                        </select>
            </div>



        <div class="row card-group-row old-main">
            @if($result)
            @foreach($result as $data)
            <div class="col-md-6 card-group-row__col first-loader" >

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">account_box</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">{{$data['employee']['first_name']}} {{$data['employee']['last_name']}}</a>
                            <p class="card-title mb-8pt">{{$data['amount']}}</p>
                            @if($data['status'] == 0)
                            <p class="card-title mb-0" style="color:red">Pending</p>
                            @else
                            <p class="card-title mb-0" style="color:green">Paid</p>
                            @endif
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>{{ date_format(date_create($data['date']),"M d,Y")}}</small></div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            
        </div>

        <div class="row card-group-row new-main d-none" id="new-main">
            
        </div>


            
    </div>
</div>




@endsection
@push('js')
<script src="{{url('admin/admin/salary.js')}}" type="text/javascript"></script>



@endpush