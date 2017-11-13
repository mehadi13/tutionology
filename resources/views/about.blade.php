
@extends('layout.master')

@section('content')
<!-- Page header -->
<header id="home" class="header header-compact-dark">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <!-- Title -->
                <center><div class="h2 title"
                             data-reveal-distance="-10px"
                             data-reveal-duration="375"
                             data-reveal-reset="1">About Us</div>
                    <!-- /Title -->

                    <!-- Subtitle -->
                    <div class="subtitle"
                         data-reveal-distance="10px"
                         data-reveal-duration="375"
                         data-reveal-reset="1">We’ll continue to advance what's possible in education</div>
                    <!-- /Subtitle -->

                    <!--
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="icon fa fa-home"></i> Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="active">About company</li>
                    </ol>
                    -->

            </center>
            </div>
        </div>
    </div>
</header>
<!-- /Page header -->











<!-- Section: contact info -->
<section id="contact-info" class="section section-contact-info bg-light">
    <div class="container">









        <!--Section: Team v.2-->
        <section class="section team-section pb-5">

            <!--Section heading-->


            <div class="row text-center">


                <div class="example z-depth-5">

                    <!--Grid column-->
                    <div class="col-md-4 mb-r">

                        <div class="avatar">
                            <img src="{{asset('front-end/images/shuvho.png')}}" class="z-depth-1" alt="Second sample avatar image">
                        </div>
                        <h4>Al Rubyat Shuvho</h4>
                        <h5>CEO & Developer</h5>

                        <!--Email-->

                        <!--Facebook-->
                        <a type="button" class="btn-floating btn-small btn-fb "><i class="fa fa-facebook"></i></a>
                        <a type="button" class="btn-floating btn-small btn-tw "><i class="fa fa-twitter"></i></a>
                        <!--GitHub-->
                        <a type="button" class="btn-floating btn-small btn-git "><i class="fa fa-github"></i></a>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-r">

                        <div class="avatar">
                            <img src="{{asset('front-end/images/mehadiabout.png')}}" class="z-depth-1" alt="Third sample avatar image">
                        </div>
                        <h4>Mehadi Hossain</h4>
                        <h5>Web Developer</h5>

                        <!--Linkedin-->
                        <a type="button" class="btn-floating btn-small btn-li"><i class="fa fa-linkedin "></i></a>
                        <!--Twitter-->
                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter "></i></a>
                        <!--Pinterest-->
                        <a type="button" class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest "></i></a>

                    </div>
                    <!--Grid column-->
                </div>
            </div>
        </section>
        <!--Section: Team v.2-->



    </div>
</section>
<!-- /Section: contact info -->
@endsection