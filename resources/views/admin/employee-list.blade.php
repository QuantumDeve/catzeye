@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

                

<div class="border-top-1 page-section"
     data-block-id="faq" style="background-color:#3786ed">
    <div class="container">
        <div class="page-headline text-center">
            <h2>Team</h2>
            <!-- <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p> -->
        </div>
        <div class="row card-group-row">
            @foreach($result as $data)
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">account_box</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">{{$data['first_name']}} {{$data['last_name']}}</a>
                            <p class="text-200 mb-2">{{$data['designation']}}</p>
                            <p class="text-70 mb-2">{{$data['email']}}</p>
                            <p class="text-70 mb-2">{{$data['mobile']}}</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>{{$data['emp_id']}}</small></div>
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</div>


@endsection