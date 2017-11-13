@extends('layout.master')

@section('content')
    <br><br><br><br>
<!-- Page header -->
<section class="job-bg page job-list-page">
    <div class="container">


        <div class="banner-form banner-form-full job-list-form">
            <form action="#">

                <!-- language-dropdown -->
                <div class="dropdown category-dropdown language-dropdown">
                    <a data-toggle="dropdown" href="#"><span class="change-text">City</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change language-change">
                        <li><a href="#">Dhaka</a></li>
                        <li><a href="#">Chittagong</a></li>
                        <li><a href="#">Rajshahi</a></li>
                        <li><a href="#">Rangpur</a></li>
                        <li><a href="#">Sylhet</a></li>
                        <li><a href="#">Online</a></li>
                    </ul>
                </div><!-- language-dropdown -->

                <!-- language-dropdown -->
                <div class="dropdown category-dropdown language-dropdown">
                    <a data-toggle="dropdown" href="#"><span class="change-text">Location</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change language-change">
                        <li><a href="#">Location 1</a></li>
                        <li><a href="#">Location 2</a></li>
                        <li><a href="#">Location 3</a></li>
                    </ul>
                </div><!-- language-dropdown -->

                <!-- language-dropdown -->
                <div class="dropdown category-dropdown language-dropdown">
                    <a data-toggle="dropdown" href="#"><span class="change-text">Category</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change language-change">
                        <li><a href="#">Bangla Medium</a></li>
                        <li><a href="#">English Medium</a></li>
                        <li><a href="#">University Admission</a></li>
                        <li><a href="#">Project/Assignment</a></li>
                        <li><a href="#">IT</a></li>
                    </ul>
                </div><!-- language-dropdown -->

                <!-- category-change -->
                <div class="dropdown category-dropdown">
                    <a data-toggle="dropdown" href="#"><span class="change-text">Gender</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu category-change">
                        <li><a href="#">Any</a></li>
                        <li><a href="#">Male</a></li>
                        <li><a href="#">Female</a></li>

                    </ul>
                </div><!-- category-change -->

                <button type="submit" class="btn btn-primary" value="Search">Search</button>
            </form>
        </div><!-- banner-form -->

        <div class="category-info">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="accordion">
                        <!-- panel-group -->
                        <div class="panel-group" id="accordion">

                            <!-- panel -->
                            <div class="panel panel-default panel-faq">
                                <!-- panel-heading -->
                                <div class="panel-heading">
                                    <div  class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
                                            <h4>My Profile<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
                                        </a>
                                    </div>
                                </div><!-- panel-heading -->

                                <div id="accordion-one" class="panel-collapse collapse in">
                                    <!-- panel-body -->
                                    <div class="panel-body">


                                        <ul>
                                            <li><a href="#">Find Jobs</a></li>
                                            <li><a href="#">My Profile</a></li>
                                            <li><a href="#">Edit Profile</a></li>
                                            <li><a href="#">My Status</a></li>
                                            <li><a href="#">Setting</a></li>
                                            <li><a href="#">Logout</a></li>

                                        </ul>


                                    </div><!-- panel-body -->
                                </div>
                            </div><!-- panel -->

                            <!-- ad-section -->
                            <div class="ad-section text-center">
                                <a href="#"><img src="images/add2.png" alt="Image" class="img-responsive"></a>
                            </div><!-- ad-section -->


                            <!-- ad-section -->
                            <div class="ad-section text-center">
                                <a href="#"><img src="images/add2.png" alt="Image" class="img-responsive"></a>
                            </div><!-- ad-section -->









                        </div><!-- panel-group -->
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

                        <div class="job-ad-item">
                            <div class="item-info">
                                <div class="ad-info">
                                    <span><a href="#" class="title">Human Resource Manager</a></span>
                                    <div class="ad-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                            <li><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</li>
                                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                            <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : Jan 10, 2017</li>
                                        </ul>
                                    </div><!-- ad-meta -->
                                </div><!-- ad-info -->
                            </div><!-- item-info -->
                            <div class="social-media">
                                <div class="button">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
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

                        <div class="job-ad-item">
                            <div class="item-info">
                                <div class="ad-info">
                                    <span><a href="#" class="title">Human Resource Manager</a></span>
                                    <div class="ad-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                            <li><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</li>
                                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                            <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : Jan 10, 2017</li>
                                        </ul>
                                    </div><!-- ad-meta -->
                                </div><!-- ad-info -->
                            </div><!-- item-info -->
                            <div class="social-media">
                                <div class="button">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
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



                        <!-- ad-section -->
                        <div class="ad-section text-center">
                            <a href="#"><img src="images/add.png" alt="Image" class="img-responsive"></a>
                        </div><!-- ad-section -->



                        <div class="job-ad-item">
                            <div class="item-info">
                                <div class="ad-info">
                                    <span><a href="#" class="title">Human Resource Manager</a></span>
                                    <div class="ad-meta">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>San Francisco, CA, US</a></li>
                                            <li><a href="#"><i class="fa fa-clock-o" aria-hidden="true"></i>Full Time</a></li>
                                            <li><i class="fa fa-money" aria-hidden="true"></i>$25,000 - $35,000</li>
                                            <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i>HR/Org. Development</a></li>
                                            <li><i class="fa fa-hourglass-start" aria-hidden="true"></i>Application Deadline : Jan 10, 2017</li>
                                        </ul>
                                    </div><!-- ad-meta -->
                                </div><!-- ad-info -->
                            </div><!-- item-info -->
                            <div class="social-media">
                                <div class="button">
                                    <a href="#" class="btn btn-primary"><i class="fa fa-briefcase" aria-hidden="true"></i>Apply For This Job</a>
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
                        <a href="#"><img src="images/ads/1.jpg" alt="" class="img-responsive"></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- container -->
</section>
<!-- /Page header -->
@endsection

