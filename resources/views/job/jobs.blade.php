@extends('layout.master')

@section('content')
    <!-- Page header -->
    <section class="job-bg page job-list-page">
        <div class="container">
            <div class="ad-section text-center">
                <a href="#"><img src="{{asset('front-end/images/add.png')}}" alt="call for add 01849688811" class="img-responsive"></a>
            </div><!-- ad-section -->

            <div class="banner-form banner-form-full job-list-form">
                <form action="#">

                    <!-- language-dropdown -->
                    <div class="dropdown category-dropdown language-dropdown">
                        <a data-toggle="dropdown" href="#"><span class="change-text">City</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu category-change language-change">
                            @foreach($cities as $city)
                            <li><a href="#"> {{$city->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- language-dropdown -->

                    <!-- language-dropdown -->
                    <div class="dropdown category-dropdown language-dropdown">
                        <a data-toggle="dropdown" href="#"><span class="change-text">Location</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu category-change language-change">
                            @foreach($locations as $location)
                                <li><a href="#"> {{$location->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- language-dropdown -->

                    <!-- language-dropdown -->
                    <div class="dropdown category-dropdown language-dropdown">
                        <a data-toggle="dropdown" href="#"><span class="change-text">Category</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu category-change language-change">
                            @foreach($categories as $category)
                                <li><a href="#"> {{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div><!-- language-dropdown -->

                    <!-- category-change -->
                    <div class="dropdown category-dropdown">
                        <a data-toggle="dropdown" href="#"><span class="change-text">Gender</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu category-change">
                            <li><a href="#"> Any</a></li>
                            <li><a href="#"> Male</a></li>
                            <li><a href="#"> Female</a></li>
                        </ul>
                    </div><!-- category-change -->

                    <button type="submit" class="btn btn-primary" value="Search">Search</button>
                </form>
            </div><!-- banner-form -->

            <div class="category-info">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="accordion">
                            <div class="ad-section text-center">
                                <a href="#"><img src="{{asset('front-end/images/add2.png')}}" alt="Image" class="img-responsive"></a>
                            </div><!-- ad-section -->


                            <!-- ad-section -->
                            <div class="ad-section text-center">
                                <a href="#"><img src="{{asset('front-end/images/add2.png')}}" alt="Image" class="img-responsive"></a>
                            </div><!-- ad-section -->
                            <!-- panel-group -->
                        </div>
                    </div><!-- accordion-->

                    <!-- recommended-ads -->
                    <div class="col-sm-8 col-md-7">
                        <div class="section job-list-item">
                            <div class="featured-top">
                                <h4>Showing 1-25 of 65,712 ads</h4>
                                <div class="dropdown pull-right">
                                    <div class="dropdown category-dropdown">
                                        <h5>Sort by:</h5>
                                        <a data-toggle="dropdown" href="#"><span class="change-text">Most Relevant</span><i class="fa fa-caret-square-o-down"></i></a>
                                        <ul class="dropdown-menu category-change">
                                            <li><a href="#">Most Relevant</a></li>
                                            <li><a href="#">Most Popular</a></li>
                                        </ul>
                                    </div><!-- category-change -->
                                </div>
                            </div><!-- featured-top -->

                            <hr>

                            @foreach($tutioninfos as $tutioninfo)
                            <div class="job-ad-item">
                                <div class="item-info">
                                    <div class="ad-info">
                                        <span><a href="#" class="title">Tutor Needs for class {{$classNames[$tutioninfo->class_name_id-1]->name}}</a></span>
                                        <div class="ad-meta">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$cities[$tutioninfo->city_id-1]->name}}, {{$locations[$tutioninfo->location_id-1]->name}}</a></li>
                                                <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>{{$tutioninfo->days_in_week}}</a></li>
                                                <li><i class="fa fa-money" aria-hidden="true"></i>{{$tutioninfo->offer_salary}}</li>
                                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>{{$tutioninfo->description}}</a></li>
                                                <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>{{$tutioninfo->subject}}</li>
                                            </ul>
                                        </div><!-- ad-meta -->
                                    </div><!-- ad-info -->
                                </div><!-- item-info -->
                                <div class="social-media">
                                    <div class="button">
                                        @guest
                                        @else
                                        <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
                                        @endguest
                                            <a href="#" class="btn btn-primary bookmark"><i class="fa fa-bookmark-o" aria-hidden="true"></i>Bookmark</a>
                                    </div>
                                    <ul class="share-social">
                                        <li>Share this ad</li>
                                        <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div><!-- job-ad-item -->
                                <br>
                            @endforeach

                            <br>

                            <div class="ad-section text-center">
                                <a href="#"><img src="{{asset('front-end/images/add.png')}}" alt="Image" class="img-responsive"></a>
                            </div><!-- ad-section -->

                            <!-- pagination  -->
                            <div class="text-center">
                                <ul class="pagination ">
                                    <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a>...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li><a href="#">20</a></li>
                                    <li><a href="#">30</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div><!-- pagination  -->
                        </div>
                    </div><!-- recommended-ads -->

                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class="advertisement text-center">
                            <a href="#"><img src="{{asset('front-end/images/add.jpg')}}" alt="" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- container -->
    </section>
    <!-- /Page header -->

@endsection