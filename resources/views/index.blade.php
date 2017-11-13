@include('layout.indexheader')

@section('content')

    <!-- Hero header -->
    <header id="home" class="hero hero-80 section-inverse">

        <!-- Carousel -->
        <div class="hero-carousel owl-carousel owl-reveal owl-theme owl-navigation owl-no-mousedrag"
             data-owl-animate-in="fadeIn"
             data-owl-animate-out="fadeOut">

            <!-- Carousel slide -->
            <div class="owl-slide bg-center-cover parallax" data-stellar-background-ratio="0.5"
                 style="background-image: url({{asset('front-end/images/hero-slide-01.jpg')}});">

                <!-- Mask -->
                <div class="bg-mask" data-mask-opacity="0.7"></div>
                <!-- /Mask -->

                <!-- Content container -->
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">

                            <!-- Slide title -->
                            <div class="h1 title reveal"
                                 data-reveal-distance="-10px"
                                 data-reveal-duration="375"
                                 data-reveal-reset="1">Hire the right tutor today
                            </div>
                            <!-- /Slide title -->

                            <!-- Slide subtitle -->
                            <div class="h6 subtitle reveal"
                                 data-reveal-distance="10px"
                                 data-reveal-duration="375"
                                 data-reveal-reset="1">The easiest way to find tutor (It's Totally Free)
                            </div>
                            <!-- /Slide subtitle -->

                            <!-- Slide buttons -->
                            <div class="buttons reveal"
                                 data-reveal-duration="375"
                                 data-reveal-reset="1">
                                <a href="#login" class="smooth-scroll btn btn-rounded btn-white-outline btn-success">Start
                                    Finding</a>
                                <!--<button class="btn btn-rounded btn-primary" data-toggle="modal" data-target="#modal-contact">Get in touch</button>-->
                            </div>
                            <!-- /Slide buttons -->

                        </div>
                    </div>
                </div>
                <!-- /Content container -->

            </div>
            <!-- /Carousel slide -->


        </div>
        <!-- /Carousel -->

    </header>
    <!-- /Hero header -->

    <!-- Section: login form -->
    <section id="login" class="cover">


        <div class="main agileits-w3layouts">

            <div class="main-agileinfo">
                <div class="agileui-forms">
                    <div class="container-form">
                        <div class="form-item log-in"><!-- login form-->
                            <div class="w3table agileinfo">
                                <div class="w3table-cell register">
                                    <div class="w3table-tophead">
                                        <h2>Sign in</h2>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="fields-grid">
                                            <div class="styled-input agile-styled-input-top">
                                                <input type="text" name="Username" required="">
                                                <label>Username</label>
                                                <span></span>
                                            </div>
                                            <div class="styled-input">
                                                <input type="Password" name="Password" required="">
                                                <label>Password</label>
                                                <span></span>
                                            </div>
                                            <a href="#">forgot password?</a>
                                            <input type="submit" value="Sign in">
                                        </div>
                                        <div class="social-grids">
                                            <div class="social-text">
                                                <p>Or Sign in with</p>
                                            </div>
                                            <div class="social-icons">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="clear"></div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="form-item sign-up" style="margin-left: 20px"><!-- sign-up form-->
                            <div class="w3table w3-agileits">
                                <div class="w3table-cell register">
                                    <h3>Sign up</h3>
                                    <form action="#" method="post">
                                        <div class="fields-grid">
                                            <div class="styled-input agile-styled-input-top">
                                                <input type="text" name="First name" required="">
                                                <label>First name</label>
                                                <span></span>
                                            </div>
                                            <div class="styled-input">
                                                <input type="email" name="Email" required="">
                                                <label>Email</label>
                                                <span></span>
                                            </div>
                                            <div class="styled-input">
                                                <input type="tel" name="Phone" required="">
                                                <label>Phone Number</label>
                                                <span></span>
                                            </div>
                                            <div class="styled-input">
                                                <input type="password" name="password" required="">
                                                <label>Password</label>
                                                <span></span>
                                            </div>
                                            <div class="clear"></div>
                                            <label class="checkbox"><input type="checkbox" name="checkbox"
                                                                           checked><i></i>I agree to the <a
                                                        href="terms.html" target="_blank">Terms and
                                                    Conditions</a></label>
                                        </div>
                                        <input type="submit" value="Sign up">
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-info">
                        <div class="info-w3lsitem">
                            <div class="w3table">
                                <div class="w3table-cell">
                                    <p> Have an account? </p>
                                    <div class="btn"> Sign in</div>
                                </div>
                            </div>
                        </div>
                        <div class="info-w3lsitem">
                            <div class="w3table">
                                <div class="w3table-cell">
                                    <p> Dont have an account?</p>
                                    <div class="btn">Sign up</div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- /Section: login form -->

    <!-- Section: trigger / watch video -->
    <section id="watch-video" class="section section-inverse section-watch-video trigger bg-fixed parallax"
             data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('front-end/images/trigger-watch-video.jpg')}})">

        <!-- Mask -->
        <div class="bg-mask" data-mask-opacity="0.7"></div>
        <!-- /Mask -->

        <!-- Content container -->
        <div class="container bg-mask-after">

            <!-- Section content -->
            <div class="row text-center">

                <h2 class="h1 title reveal">Watch a short our video course</h2>
                <div class="subtitle mb reveal">What student/parent/teacher says about us</div>
                <a href="rubyat.mp4" class="reveal popup-iframe btn btn-circle btn-white-outline btn-success mt-0p5">
                    <i class="icon fa fa-play"></i>
                </a>

            </div>
            <!-- /Section content -->

        </div>
        <!-- /Content container -->

    </section>
    <!-- /Section: trigger / watch video -->


    <!-- Section: best features -->
    <section id="best-features" class="section section-best-features">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <header class="section-header text-center">
                        <i class="icon fa fa-thumbs-up"></i>
                        <h2 class="title">How It Works</h2>
                        <p class="subtitle"></p>
                    </header>
                </div>
            </div>
            <!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">
                <div class="col-xs-12">

                    <!-- Tabs navigation -->
                    <ul class="nav nav-tabs nav-tabs-theme">
                        <li class="active"><a href="#tab-clean-design" data-toggle="tab">Tutor</a></li>
                        <li><a href="#tab-mobile-friendly" data-toggle="tab">Parents</a></li>
                    </ul>
                    <!-- /Tabs navigation -->

                    <!-- Tab panes -->
                    <div class="tab-content reveal">

                        <!-- Tab pane -->
                        <div id="tab-clean-design" class="tab-pane fade in active">
                            <div class="row">

                                <!-- Left column -->
                                <div class="col-xs-12 col-sm-6">

                                    <!-- List dot -->
                                    <ul class="list-dot">
                                        <li class="list-dot-item">
                                            <div class="title">Create a free Account</div>
                                            <div class="text">
                                                Make your profile in minutes. Add your preferred locations,
                                                classes/courses, expected salary and more.
                                            </div>
                                        </li>
                                        <li class="list-dot-item">
                                            <div class="title">Get free tutoring job alerts</div>
                                            <div class="text">
                                                Get updated tutoring jobs alerts via Notifications,SMS, Email whenever
                                                new jobs are posted.
                                            </div>
                                        </li>
                                        <li class="list-dot-item">
                                            <div class="title">Apply to your desired job</div>
                                            <div class="text">
                                                Apply to your preferred tutoring jobs that match your skills and get
                                                selected by the students/parents.
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- /List dot -->

                                </div>
                                <!-- /Left column -->

                                <!-- Right column -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="image">
                                        <iframe width="550" height="260"
                                                src="https://www.youtube.com/embed/XGSy3_Czz8k">
                                        </iframe>
                                    </div>
                                </div>
                                <!-- /Right column -->

                            </div>
                        </div>
                        <!-- /Tab pane -->

                        <!-- Tab pane -->
                        <div id="tab-mobile-friendly" class="tab-pane fade">
                            <div class="row">

                                <!-- Left column -->
                                <div class="col-xs-12 col-sm-6">

                                    <!-- List dot -->
                                    <ul class="list-dot">
                                        <li class="list-dot-item">
                                            <div class="title">Post your Tutor requirements</div>
                                            <div class="text">
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout.
                                            </div>
                                        </li>
                                        <li class="list-dot-item">
                                            <div class="title">Get the best tutor</div>
                                            <div class="text">
                                                You'll receive the best CV's in your INBOX and EMAIL according to your
                                                Tutor requirements.
                                            </div>
                                        </li>
                                        <li class="list-dot-item">
                                            <div class="title">Select the best one and Start Learning</div>
                                            <div class="text">
                                                Choose the best one among the all CV's. Offer the selected Tutor for few
                                                trial classes before taking the regular classes. Give us your feedback
                                                and start Learning.
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- /List dot -->

                                </div>
                                <!-- /Left column -->

                                <!-- Right column -->
                                <div class="col-xs-12 col-sm-6">
                                    <div class="video">
                                        <iframe width="550" height="260"
                                                src="https://www.youtube.com/embed/XGSy3_Czz8k">
                                        </iframe>
                                    </div>
                                </div>
                                <!-- /Right column -->

                            </div>
                        </div>
                        <!-- /Tab pane -->


                    </div>
                    <!-- /Tab panes -->

                </div>
            </div>
            <!-- /Section content -->
        </div>
    </section>
    <!-- /Section: best features -->


    <!-- Section: testimonials -->
    <section id="testimonials" class="section section-testimonials bg-light">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <header class="section-header text-center">
                        <i class="icon fa fa-comments-o"></i>
                        <h2 class="title">Testimonials</h2>
                        <p class="subtitle"></p>
                    </header>
                </div>
            </div>
            <!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">
                <div class="col-xs-12">

                    <!-- Carousel -->
                    <div class="testimonials-carousel owl-carousel owl-theme owl-pagination owl-mousewheel reveal"
                         data-owl-items="2"
                         data-owl-items-responsive="768:1">

                        <!-- Carousel slide -->
                        <div class="owl-slide">

                            <!-- Testimonial -->
                            <div class="testimonial">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{asset('front-end/images/avatar-01.jpg')}}" alt="">
                                </div>
                                <!-- /Avatar -->

                                <!-- Name -->
                                <h4 class="name">Nilufa Iqbal</h4>
                                <!-- /Name -->

                                <!-- Post -->
                                <div class="post">Housewife</div>
                                <!-- /Post -->

                                <!-- Rate -->
                                <ul class="rate">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                </ul>
                                <!-- /Rate -->

                                <!-- Text -->
                                <p class="text">
                                    I am taking their service from last 2 years and I found this platform very safe and
                                    secure. Best wishes for edificationology.com
                                </p>
                                <!-- /Text -->

                            </div>
                            <!-- /Testimonial -->

                        </div>
                        <!-- /Carousel slide -->

                        <!-- Carousel slide -->
                        <div class="owl-slide">

                            <!-- Testimonial -->
                            <div class="testimonial">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{asset('front-end/images/avatar-02.jpg')}}" alt="">
                                </div>
                                <!-- /Avatar -->

                                <!-- Name -->
                                <h4 class="name">Nafiza Rahman Mou</h4>
                                <!-- /Name -->

                                <!-- Post -->
                                <div class="post">Lecturer</div>
                                <!-- /Post -->

                                <!-- Rate -->
                                <ul class="rate">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                </ul>
                                <!-- /Rate -->

                                <!-- Text -->
                                <p class="text">
                                    I am very satisfied and I will recomment this service to others.
                                </p>
                                <!-- /Text -->

                            </div>
                            <!-- /Testimonial -->

                        </div>
                        <!-- /Carousel slide -->

                        <!-- Carousel slide -->
                        <div class="owl-slide">

                            <!-- Testimonial -->
                            <div class="testimonial">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{asset('front-end/images/avatar-03.jpg')}}" alt="">
                                </div>
                                <!-- /Avatar -->

                                <!-- Name -->
                                <h4 class="name">Daniul Islam</h4>
                                <!-- /Name -->

                                <!-- Post -->
                                <div class="post">Businessman</div>
                                <!-- /Post -->

                                <!-- Rate -->
                                <ul class="rate">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                </ul>
                                <!-- /Rate -->

                                <!-- Text -->
                                <p class="text">
                                    I already got two tutors by using this platform.This is most trustable source from
                                    me to get tutor for my child.
                                </p>
                                <!-- /Text -->

                            </div>
                            <!-- /Testimonial -->

                        </div>
                        <!-- /Carousel slide -->

                        <!-- Carousel slide -->
                        <div class="owl-slide">

                            <!-- Testimonial -->
                            <div class="testimonial">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{asset('front-end/images/avatar-04.jpg')}}" alt="">
                                </div>
                                <!-- /Avatar -->

                                <!-- Name -->
                                <h4 class="name">Sumona Zaman</h4>
                                <!-- /Name -->

                                <!-- Post -->
                                <div class="post">Student</div>
                                <div class="post">Daffodil International University</div>
                                <!-- /Post -->

                                <!-- Rate -->
                                <ul class="rate">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                </ul>
                                <!-- /Rate -->

                                <!-- Text -->
                                <p class="text">
                                    I am very pleased and happy after working with edificationology.com. They are very
                                    trusworthy. Looking forword to gathering more good experience with
                                    edificationology.com
                                </p>
                                <!-- /Text -->

                            </div>
                            <!-- /Testimonial -->

                        </div>
                        <!-- /Carousel slide -->

                        <!-- Carousel slide -->
                        <div class="owl-slide">

                            <!-- Testimonial -->
                            <div class="testimonial">

                                <!-- Avatar -->
                                <div class="avatar">
                                    <img src="{{asset('front-end/images/avatar-05.jpg')}}" alt="">
                                </div>
                                <!-- /Avatar -->

                                <!-- Name -->
                                <h4 class="name">Mehadi Hossain</h4>
                                <!-- /Name -->

                                <!-- Post -->
                                <div class="post">Student</div>
                                <div class="post">BUET</div>
                                <!-- /Post -->

                                <!-- Rate -->
                                <ul class="rate">
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                    <li><i class="icon fa fa-star"></i></li>
                                </ul>
                                <!-- /Rate -->

                                <!-- Text -->
                                <p class="text">
                                    In my messy schedule I've found edificationology.com as a smart platform to find
                                    tuition in specific areas. It is a nice platform to create communication between the
                                    tutor and the students to help out their search and found confusions. I'm happy to
                                    be a part of their service.
                                </p>
                                <!-- /Text -->

                            </div>
                            <!-- /Testimonial -->

                        </div>
                        <!-- /Carousel slide -->

                    </div>
                    <!-- /Carousel -->

                </div>
            </div>
            <!-- /Section content -->

        </div>
    </section>
    <!-- /Section: testimonials -->


    <!-- Section: trigger / join now -->
    <section id="join-now" class="section section-inverse section-statistics trigger bg-fixed parallax"
             data-stellar-background-ratio="0.5"
             style="background-image: url({{asset('front-end/images/trigger-join-now.jpg')}})">

        <!-- Mask -->
        <div class="bg-mask" data-mask-opacity="0.7"></div>
        <!-- /Mask -->

        <!-- Content container -->
        <div class="container bg-mask-after">

            <!-- Section content -->
            <div class="row text-center">

                <h2 class="h1 title reveal">Choose the best option for your project.</h2>
                <div class="subtitle mb reveal">There are many variations of passages of Lorem Ipsum available, but the
                    majority.
                </div>
                <a href="#contact" class="reveal smooth-scroll btn btn-rounded btn-white-outline btn-success mt-0p5">Contact
                    us</a>

            </div>
            <!-- /Section content -->

        </div>
        <!-- /Content container -->

    </section>
    <!-- /Section: trigger / join now -->


    <!-- Section: contact info -->
    <section id="contact-info" class="section section-contact-info bg-light">
        <div class="container">

            <!-- Section header -->
            <div class="row hidden">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <header class="section-header text-center">
                        <i class="icon fa fa-paper-plane-o"></i>
                        <h2 class="title">Contact information</h2>
                        <p class="subtitle">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                            old.</p>
                    </header>
                </div>
            </div>
            <!-- /Section header -->

            <!-- Section content -->
            <div class="row">

                <div class="col-xs-12 col-sm-4">

                    <!-- Contact info block -->
                    <div class="contact-info-wrapper reveal">
                        <div class="contact-info contact-info-alt">
                            <i class="icon fa fa-map-marker"></i>
                            <div class="h5 title">Address</div>
                            <div class="text">
                                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom"
                                   class="popup-iframe">Dhaka-1207,Bangladesh</a>
                            </div>
                        </div>
                    </div>
                    <!-- /Contact info block -->

                </div>

                <div class="col-xs-12 col-sm-4">

                    <!-- Contact info block -->
                    <div class="contact-info-wrapper reveal" data-reveal-delay="175">
                        <div class="contact-info contact-info-alt">
                            <i class="icon fa fa-envelope-o"></i>
                            <div class="h5 title">E-mail</div>
                            <div class="text"><a href="mailto:#">alrubyatshuvho@gmail.com</a></div>
                        </div>
                    </div>
                    <!-- /Contact info block -->

                </div>

                <div class="col-xs-12 col-sm-4">

                    <!-- Contact info block -->
                    <div class="contact-info-wrapper reveal">
                        <div class="contact-info contact-info-alt">
                            <i class="icon fa fa-mobile"></i>
                            <div class="h5 title">Phone</div>
                            <div class="text"><a href="tel:#">+8801849688811</a></div>
                        </div>
                    </div>
                    <!-- /Contact info block -->

                </div>

            </div>
            <!-- /Section content -->

        </div>
    </section>
    <!-- /Section: contact info -->


    <!-- Section: contact -->
    <section id="contact" class="section section-contact">
        <div class="container">

            <!-- Section header -->
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <header class="section-header text-center">
                        <i class="icon fa fa-envelope-open"></i>
                        <h2 class="title">Contact Us</h2>
                        <p class="subtitle"></p>
                    </header>
                </div>
            </div>
            <!-- /Section header -->

            <!-- Section content -->
            <div class="row section-content">
                <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">

                    <!-- Contact form -->
                    <form method="post" class="form-ajax reveal">

                        <input type="hidden" name="form" value="Contact">

                        <!-- Form row -->
                        <div class="row">
                            <div class="form-group col-xs-12 col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name... *"
                                       required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="E-mail address... *"
                                       required>
                            </div>
                        </div>
                        <!-- /Form row -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <textarea name="message" class="form-control vertical" placeholder="Message... "
                                          rows="8"></textarea>
                            </div>
                        </div>
                        <!-- /Form row -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="form-group col-xs-12 col-sm-9">

                                <!-- Custom checkbox: slide -->
                                <div class="custom-checkbox-slide custom-checkbox-slide-dark form-control-mlh">
                                    <input type="checkbox" id="copy" name="copy" checked>
                                    <label for="copy">Send me a copy of this message</label>
                                </div>
                                <!-- /Custom checkbox: slide -->

                            </div>
                            <div class="form-group col-xs-12 col-sm-3">
                                <button type="submit" class="btn btn-sm btn-block btn-dark">Send message</button>
                            </div>
                        </div>
                        <!-- /Form row -->

                    </form>
                    <!-- /Contact form -->

                </div>
            </div>
            <!-- /Section content -->

        </div>
    </section>
    <!-- /Section: contact -->

    @include('layout.footer')