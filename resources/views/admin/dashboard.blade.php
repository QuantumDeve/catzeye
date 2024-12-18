@extends('admin.layouts.dashlayout')
@section('pageTitle','Dashboard')

@section('content')

                
<div class="page-section bg-primary"
     data-block-id="pricing-cards">
    <div class="container">
        <!-- <div class="hero text-center pb-64pt">
      <h1 class="text-white">Upgrade</h1>
      <p class="text-white-50 lead measure-hero-lead mx-auto">Change your future today with over 1.000 professional courses from the top industry leading teachers and professionals.</p>
        </div> -->
        <div class="row card-group-row mb-16pt mb-lg-40pt">
            <div class="col-lg-4 col-sm-6 card-group-row__col">

                <div class="card card-group-row__card text-center o-hidden card--raised border-0">

                    <!-- <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">Start</span> -->

                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow mb-16pt">
                            <span class="w-64 h-64 icon-holder icon-holder--outline-accent rounded-circle d-inline-flex mb-16pt">
                                <i class="material-icons">business_center</i>
                            </span>
                            <h4 class="mb-8pt">Enquiries</h4>
                            <p class="text-70 mb-0">List your client's needs.you can check and approve if you are interested.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <!-- <span class="h4 m-0 font-weight-normal">&dollar;</span> -->
                            <span class="h1 m-0 font-weight-normal">{{$enquiry}}</span>
                            <!-- <span class="h4 m-0 font-weight-normal">/ month</span> -->
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>No.of latest enquiries you received.</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.list.enquiry') }}"
                           class="btn btn-accent">View</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 card-group-row__col">

                <div class="card card-group-row__card text-center o-hidden border-0">

                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow mb-16pt">
                            <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                <i class="material-icons">person</i>
                            </span>
                            <h4 class="mb-8pt">Team</h4>
                            <p class="text-70 mb-0">List of employees in your firm. You can manage employees data here.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <!-- <span class="h4 m-0 font-weight-normal">&dollar;</span> -->
                            <span class="h1 m-0 font-weight-normal">{{$employee}}</span>
                            <!-- <span class="h4 m-0 font-weight-normal">/ month</span> -->
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>No.of employees you have.</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.list.employee') }}"
                           class="btn btn-outline-secondary">View</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6 card-group-row__col">

                <div class="card card-group-row__card text-center o-hidden border-0">

                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow mb-16pt">
                            <span class="w-64 h-64 icon-holder icon-holder--outline-secondary rounded-circle d-inline-flex mb-16pt">
                                <i class="material-icons">group</i>
                            </span>
                            <h4 class="mb-8pt">Salary</h4>
                            <p class="text-70 mb-0">Here you can view salary details of your team.</p>
                        </div>
                        <p class="d-flex justify-content-center align-items-center m-0">
                            <!-- <span class="h4 m-0 font-weight-normal">&dollar;</span> -->
                            <span class="h1 m-0 font-weight-normal">{{ date_format(date_create(today()),"M")}}</span>
                            <!-- <span class="h4 m-0 font-weight-normal">/ month</span> -->
                        </p>
                        <p class="lh-1 text-muted mb-0"><small>Latest month</small></p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.list.salary') }}"
                           class="btn btn-outline-secondary">View</a>
                    </div>
                </div>

            </div>
        </div>

        

        

    </div>
</div>


<!-- <div class="border-top-1 page-section"
     data-block-id="faq">
    <div class="container">
        <div class="page-headline text-center">
            <h2>FAQ</h2>
            <p class="lead measure-lead mx-auto text-70">Frequently Asked Questions</p>
        </div>
        <div class="row card-group-row">
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">Do you offer a free trial?</a>
                            <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">Do you offer a free trial?</a>
                            <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">Do you offer a free trial?</a>
                            <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>

            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">Do you offer a free trial?</a>
                            <p class="text-70 mb-0">We offer everyone a 7 day free trial! You can take advantage of it by visiting our sign-up page! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ab!</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">Can I gift a subscription to someone?</a>
                            <p class="text-70 mb-0">Yes! We do offer certificates. Please email us for more information. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ad!</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">I have a great idea for an application or website, but need help on where to begin. Can you guys help me?</a>
                            <p class="text-70 mb-0">We advise posting personal requests in our Community Forum Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-6 card-group-row__col">

                <div class="card card--elevated card-group-row__card">
                    <div class="card-body d-flex">
                        <span class="icon-holder icon-holder--outline-muted rounded-circle d-inline-flex mr-16pt">
                            <i class="material-icons">question_answer</i>
                        </span>
                        <div class="flex">
                            <a class="card-title mb-8pt"
                               href="">I found a bug. Where can I report that?</a>
                            <p class="text-70 mb-0">In the unlikely situation you stumble across a bug, go ahead and shoot us an email. Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex lh-1 px-16pt py-8pt">
                        <div class="flex text-muted"><small>7 people found this useful</small></div>
                        <a href="#"
                           class="text-20"><i class="material-icons icon-16pt">thumb_up</i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> -->


@endsection