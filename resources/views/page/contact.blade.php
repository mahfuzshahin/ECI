@include('front_end.layouts.header')
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>contact</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
              <!-- Start contact Area -->
        <div class="contact-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-mobile"></i>
                                    <p>
                                        Call : +8802 9131947<br>
                                        <span>Saturday-Thursday (10am-6pm)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-email"></i>
                                    <p>
                                        Email : info@eci.org.bd<br>
                                        <span>Web: https://eci.org.bd/</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="ti-location-pin"></i>
                                    <p>
                                        Location : Dhaka, Bangladesh<br>
                                        <span>102 Shukrabad, Dhaka</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- Start Map -->
                        <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.7896223640482!2d90.37421641544752!3d23.754880384587143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ace928ae15%3A0xaa8023ec98f14cf5!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1601111765586!5m2!1sen!2sbd" width="100%" height="420px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form method="POST" action="{{url('/contact')}}" class="contact-form">
                                @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="subject" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" name="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                        
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
    
        <!-- Start Footer Area -->
        @include('front_end.layouts.footer')