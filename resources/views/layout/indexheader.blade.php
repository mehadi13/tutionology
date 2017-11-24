<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<head>

    <!-- Page title -->
    <title>edificationology</title>
    <!-- /Page title -->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- /Meta -->

    <!-- SEO Meta -->
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- /SEO Meta -->

    <!-- OpenGraph meta -->
    <meta property="og:image" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <!-- /OpenGraph meta -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front-end/assets/img/favicon.png')}}">
    <!-- /Favicon -->


    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('front-end/loginsignup/css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- //Custom Theme files -->


    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('front-end/assets/components/bootstrap-3.3.7-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('front-end/assets/components/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/components/elegant-font/style.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/components/owl-carousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('front-end/assets/components/owl-carousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('front-end/assets/components/magnific-popup-master/dist/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/components/sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('front-end/assets/css/theme.css')}}">
    <!-- /Styles -->
</head>
<body>


<!-- Preloader -->
<div class="preloader">
    <div class="loader">
        <span></span><span></span><span></span>
    </div>
</div>
<!-- /Preloader -->


<!-- Top navigation -->
<nav class="navbar-top navbar-dark navbar affix">
    <div class="container">

        <!-- Navbar header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-top"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">

                <!-- Dark logo -->
                <div class="brand-dark brand-image">
                    <img src="{{asset('front-end/images/logo-dark.png')}}" alt="">
                </div>
                <!-- /Dark logo -->

                <!-- Light logo -->
                <div class="brand-light brand-image">
                    <img src="{{asset('front-end/images/logo-light.png')}}" alt="">
                </div>
                <!-- /Light logo -->

            </a>
        </div>
        <!-- /Navbar header -->

        <!-- Navbar menu -->
        <div class="collapse navbar-collapse" id="nav-top">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/jobs')}}">Job Details</a></li>

                @guest
                @else
                    @if(Auth::user()->role=='tutor')
                <li><a href="{{url('/jobs/create')}}">Job Post</a></li>
                    @endif
                <li><a href="profile.html">Profle</a></li>
                @endguest

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="projects-list.html">Online Quiz System</a></li>
                        <li><a href="projects-project.html">Your Seat Finder</a></li>
                    </ul>
                </li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                <!-- Authentication Links -->
                @guest
                <li><a href="#login" class="smooth-scroll">Login</a></li>
                <li><a href="#login" class="smooth-scroll">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
        <!-- /Navbar menu -->

    </div>
</nav>
<!-- /Top navigation -->


