<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Luma</title>
        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">
        <input type="hidden" name="siteurl" id="siteurl" value="{{url('')}}">

        @include('admin.layouts.dashboard-css')
        @stack('css')
    </head>
    <body class="layout-app ">
        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>
        </div>

        <!-- Drawer Layout -->
        
        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
        
            <div class="mdk-drawer-layout__content page-content">
            
                <!-- Header -->

                <div class="navbar navbar-expand navbar-light border-bottom-2" id="default-navbar" data-primary>
                
                    <!-- Navbar toggler -->
                    <button class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0" type="button" data-toggle="sidebar">
                        <span class="material-icons">short_text</span>
                    </button>

                    <!-- Navbar Brand -->
                    <a href="index.html" class="navbar-brand mr-16pt d-lg-none">
                        <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">
                            <span class="avatar-title rounded "><img src="{{ asset('/user/images/logo.png')}}" alt="logo" class="img-fluid" /></span>
                        </span>
                        <span class="d-none d-lg-block">Luma</span>
                    </a>
                    
                    @include('admin.layouts.dashboard-nav')
                </div>
                @yield('content')
                @include('admin.layouts.dashboard-footer')
               
            </div>
           
            <!-- Drawer -->
            <div class="mdk-drawer js-mdk-drawer"id="default-drawer">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left" data-perfect-scrollbar>
                        @include('admin.layouts.dashboard-sidebar')
                    </div>
                </div>
            </div>
            <!-- // END Drawer -->
        </div>
        
        @include('admin.layouts.dashboard-js')
        @stack('js')
    </body>
</html>