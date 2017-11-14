@extends('layout.master')

@section('content')
    <!-- Page header -->
    <section class="job-bg page job-list-page">
        <div class="container">
            <div class="ad-section text-center">
                <a href="#"><img src="images/add.png" alt="call for add 01849688811" class="img-responsive"></a>
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
                            <!-- panel-group -->
                            <div class="panel-group" id="accordion">

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div  class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
                                                <h4>Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-one" class="panel-collapse collapse in">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <h5><a href="categories-main.html"><i class="fa fa-caret-down"></i> All Categories</a></h5>
                                            <a href="#"><i class="icofont icofont-man-in-glasses"></i>Engineer/Architects</a>
                                            <ul>
                                                <li><a href="#">Software <span>(129)</span></a></li>
                                                <li><a href="#">Architecture <span>(8342)</span></a></li>
                                                <li><a href="#">UI & UX Designer <span>(782)</span></a></li>

                                            </ul>
                                            <div class="see-more">
                                                <button type="button" class="show-more one"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                                <ul class="more-category one">
                                                    <li><a href="#">Fron end developer<span>(289)</span></a></li>
                                                    <li><a href="#">Back end developer<span>(5402)</span></a></li>

                                                </ul>
                                            </div>

                                        </div><!-- panel-body -->
                                    </div>
                                </div><!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div  class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-two">
                                                <h4>Date Posted <span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-two" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <label for="today"><input type="checkbox" name="today" id="today"> Today</label>
                                            <label for="7-days"><input type="checkbox" name="7-days" id="7-days"> 7 days</label>
                                            <label for="30-days"><input type="checkbox" name="30-days" id="30-days"> 30 days</label>
                                        </div><!-- panel-body -->
                                    </div>
                                </div><!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-three">
                                                <h4>
                                                    Salary Range
                                                    <span class="pull-right"><i class="fa fa-plus"></i></span>
                                                </h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-three" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <div class="price-range"><!--price-range-->
                                                <div class="price">
                                                    <span>$100 - <strong>$700</strong></span>
                                                    <div class="dropdown category-dropdown pull-right">
                                                        <a data-toggle="dropdown" href="#"><span class="change-text">USD</span><i class="fa fa-caret-square-o-down"></i></a>
                                                        <ul class="dropdown-menu category-change">
                                                            <li><a href="#">USD</a></li>
                                                            <li><a href="#">AUD</a></li>
                                                            <li><a href="#">EUR</a></li>
                                                            <li><a href="#">GBP</a></li>
                                                            <li><a href="#">JPY</a></li>
                                                        </ul>
                                                    </div><!-- category-change -->
                                                    <input type="text" value="" data-slider-min="0" data-slider-max="700" data-slider-step="5" data-slider-value="[250,450]" id="price" ><br />
                                                </div>
                                            </div><!--/price-range-->
                                        </div><!-- panel-body -->
                                    </div>
                                </div><!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-four">
                                                <h4>Employment Type<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-four" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <label for="full-time"><input type="checkbox" name="full-time" id="full-time"> Full Time</label>
                                            <label for="part-time"><input type="checkbox" name="part-time" id="part-time"> Part Time</label>
                                            <label for="contractor"><input type="checkbox" name="contractor" id="contractor"> Contractor</label>
                                            <label for="intern"><input type="checkbox" name="intern" id="intern"> Intern</label>
                                            <label for="seasonal"><input type="checkbox" name="seasonal" id="seasonal"> Seasonal / Temp</label>
                                        </div><!-- panel-body -->
                                    </div>
                                </div><!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-five">
                                                <h4>Experience Level<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-five" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <label for="training"><input type="checkbox" name="training" id="training"> Training</label>
                                            <label for="entry-level"><input type="checkbox" name="entry-level" id="entry-level"> Entry Level</label>
                                            <label for="mid-senior"><input type="checkbox" name="mid-senior" id="mid-senior"> Mid-Senior Level</label>
                                            <label for="top-level"><input type="checkbox" name="top-level" id="top-level"> Top Level</label>
                                        </div><!-- panel-body -->
                                    </div>
                                </div> <!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div class="panel-title"></div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#accordion-six">
                                            <h4>Company<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                        </a>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-six" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <input type="text" placeholder="Search Company" class="form-control">
                                            <label for="apple"><input type="checkbox" name="apple" id="apple"> Apple</label>
                                            <label for="dropbox"><input type="checkbox" name="dropbox" id="dropbox"> Dropbox</label>
                                            <label for="micromax"><input type="checkbox" name="micromax" id="micromax"> Micromax</label>
                                            <label for="nokia"><input type="checkbox" name="nokia" id="nokia"> Nokia</label>
                                            <label for="microsoft"><input type="checkbox" name="microsoft" id="microsoft"> Microsoft</label>
                                            <label for="samsung"><input type="checkbox" name="samsung" id="samsung"> Samsung</label>
                                            <div class="see-more">
                                                <button type="button" class="show-more two"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                                <div class="more-category two">
                                                    <label for="blackBerry"><input type="checkbox" name="blackBerry" id="blackBerry">BlackBerry</label>
                                                    <label for="motorola"><input type="checkbox" name="motorola" id="motorola">Motorola</label>
                                                    <label for="lenovo"><input type="checkbox" name="lenovo" id="lenovo">Lenovo</label>
                                                </div>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div>
                                </div> <!-- panel -->

                                <!-- panel -->
                                <div class="panel panel-default panel-faq">
                                    <!-- panel-heading -->
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#accordion-seven">
                                                <h4>Location<span class="pull-right"><i class="fa fa-plus"></i></span></h4>
                                            </a>
                                        </div>
                                    </div><!-- panel-heading -->

                                    <div id="accordion-seven" class="panel-collapse collapse">
                                        <!-- panel-body -->
                                        <div class="panel-body">
                                            <input type="text" placeholder="Search Location" class="form-control">
                                            <label for="angeles"><input type="checkbox" name="angeles" id="angeles"> Los Angeles, CA</label>
                                            <label for="kingdom"><input type="checkbox" name="kingdom" id="kingdom"> United Kingdom</label>
                                            <label for="states"><input type="checkbox" name="states" id="states"> United States</label>
                                            <label for="columbia"><input type="checkbox" name="columbia" id="columbia"> British Columbia</label>
                                            <label for="australia"><input type="checkbox" name="australia" id="australia"> Australia</label>
                                            <label for="germany"><input type="checkbox" name="germany" id="germany"> Germany</label>
                                            <div class="see-more">
                                                <button type="button" class="show-more three"><i class="fa fa-plus-square-o" aria-hidden="true"></i>See More</button>
                                                <div class="more-category three">
                                                    <label for="belgium"><input type="checkbox" name="belgium" id="belgium">Belgium</label>
                                                    <label for="brazil"><input type="checkbox" name="brazil" id="brazil">Brazil</label>
                                                    <label for="denmark"><input type="checkbox" name="denmark" id="denmark">Denmark</label>
                                                    <label for="indonesia"><input type="checkbox" name="indonesia" id="indonesia">Indonesia</label>
                                                </div>
                                            </div>
                                        </div><!-- panel-body -->
                                    </div>
                                </div> <!-- panel -->

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