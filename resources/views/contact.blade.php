@extends('layout.master')

@section('content')
    <br>
    <br>
    <hr>
    <br>
    <!-- Section: contact information -->
    <section id="contact-information" class="section section-contact-information">
        <div class="container">

            <!-- Section header -->
            <div class="row hidden">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <header class="section-header text-center">
                        <i class="icon fa fa-paper-plane-o"></i>
                        <h2 class="title">Contact information</h2>
                        <p class="subtitle">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </header>
                </div>
            </div>
            <!-- /Section header -->

            <div class="row">

                <div class="col-xs-12 col-sm-4">

                    <!-- Contact info block -->
                    <div class="contact-info-wrapper reveal">
                        <div class="contact-info contact-info-alt">
                            <i class="icon fa fa-map-marker"></i>
                            <div class="h5 title">Address</div>
                            <div class="text">
                                <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="popup-iframe">Dhaka-1207,Bangladesh</a>
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
                                <input type="text" name="name" class="form-control" placeholder="Your Name... *" required>
                            </div>
                            <div class="form-group col-xs-12 col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="E-mail address... *" required>
                            </div>
                        </div>
                        <!-- /Form row -->

                        <!-- Form row -->
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <textarea name="message" class="form-control vertical" placeholder="Message... " rows="8"></textarea>
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

@endsection