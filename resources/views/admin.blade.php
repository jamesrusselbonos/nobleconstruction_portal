<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Noble Construction Portal</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Open Sans" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/4c6c819f60.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.material.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.bootstrap4.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap.min.css">
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.bootstrap4.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
   <script src="https://cdn.datatables.net/plug-ins/1.10.21/dataRender/datetime.js"></script>


    <!-- FullCalendar -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>
    <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.js"></script>

    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <!-- Pace JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/black/pace-theme-minimal.css">



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Noble Construction Portal
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="sidenav_mobile">
                                   <a href="/admin_main" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'admin_main') ? 'active' : '' }}">Calendar</a>
                                   <a href="/manage_project" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'manage_project') ? 'active' : '' }}">Projects</a>
                                   <a href="/manage_customers" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'manage_customers') ? 'active' : '' }}">Customers</a>
                                   <a href="/orders" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'orders') ? 'active' : '' }}">Orders</a>
                                   <a href="/services" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'services') ? 'active' : '' }}">Services</a>
                                </div>
                                <a type="button" class="a_nav" href="{{ route('logout') }}" 
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        
                                <i class="fa fa-sign-out" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row main">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                                <img src="{{ asset('images/logo.png') }}" class="picture center">  
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 ">
                                <div class="header_wrapper">
                                    <h5>Welcome! Admin</h5>
                                    <h2 class="client_name">
                                        @if ( Auth::check() )
                                            {{ Auth::user()->name }}
                                        @else
                                            return redirect('login');
                                        @endif
                                        
                                    </h2>
                                    <h6 class="client_address"><i class="fa fa-envelope" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>
                                        @if ( Auth::check() )
                                            {{ Auth::user()->email }}
                                        @else
                                            return redirect('login');
                                        @endif
                                        
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
                                <div class="sidenav">
                                   <a href="/admin_main" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'admin_main') ? 'active' : '' }}">Calendar</a>
                                   <a href="/manage_project" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'manage_project') ? 'active' : '' }}">Projects</a>
                                   <a href="/manage_customers" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'manage_customers') ? 'active' : '' }}">Customers</a>
                                   <a href="/orders" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'orders') ? 'active' : '' }}">Orders</a>
                                   <a href="/services" class="list-group-item list-group-item-action {{ (request()->segment(1) == 'services') ? 'active' : '' }}">Services</a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12">
                                <div class="jobs_wrapper">
                                    @yield('admin_content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.0.1/interaction/main.js" integrity="sha256-8M6FzVt1+EcYNYqAJqg0kameW+aOR5l7xAfksE2J+hI=" crossorigin="anonymous"></script>
    

    <!-- Menu Toggle Script -->
    <!-- <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
    </script> -->

</body>
</html>