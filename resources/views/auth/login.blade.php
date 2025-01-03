@extends('admin.layouts.loginlayout')
@section('pageTitle','Admin Login')

@section('content')
        <div class="layout-login-centered-boxed__form card">
            <div class="d-flex flex-column justify-content-center align-items-center mt-2 mb-5 navbar-light">
                <a href="index.html"
                   class="navbar-brand flex-column mb-2 align-items-center mr-0"
                   style="min-width: 0">

                    <span class="avatar avatar-sm navbar-brand-icon mr-0">

                        <span class="avatar-title rounded bg-primary"><img src="{{ asset('/admin/images/illustration/student/128/white.svg')}}"
                                 alt="logo"
                                 class="img-fluid" /></span>

                    </span>

                    Admin
                </a>
                <p class="m-0">Login to access your Account </p>
            </div>

            <!-- <div class="alert alert-soft-success d-flex"
                 role="alert">
                <i class="material-icons mr-12pt">check_circle</i>
                <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
            </div> -->

            

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="text-label"
                           for="email_2">Email Address:</label>
                    <div class="input-group input-group-merge">
                        <input id="email"
                               name="email"
                               type="email"
                               required=""
                               class="form-control form-control-prepended  @error('email') is-invalid @enderror"
                               placeholder="john@doe.com">
                               @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="far fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-label"
                           for="password_2">Password:</label>
                    <div class="input-group input-group-merge">
                        <input id="password"
                               name="password"
                               type="password"
                               required=""
                               class="form-control form-control-prepended  @error('password') is-invalid @enderror"
                               placeholder="Enter your password">
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-key"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-block btn-primary"
                            type="submit">Login</button>
                </div>
                <div class="form-group text-center">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                               class="custom-control-input"
                               checked=""
                               id="remember">
                        <label class="custom-control-label"
                               for="remember">Remember me for 30 days</label>
                    </div>
                </div>
                <!-- <div class="form-group text-center">
                    <a href="">Forgot password?</a> <br>
                    Don't have an account? <a class="text-body text-underline"
                       href="signup.html">Sign up!</a>
                </div> -->
            </form>
        </div>


@endsection