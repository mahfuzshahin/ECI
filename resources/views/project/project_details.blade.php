@include('front_end.layouts.header')
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Project</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Project</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
              <!-- Start contact Area -->
              <div class="project-single area-padding">
              <p></p>
            <div class="container">
                <div class="row">
                    <!-- End Column -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-history">
                            <div class="project-name">
                                <ul>
                                    <li><span>Title</span>: {{$project_details->title}}</li>
                                    <li><span>Categories</span> : Programming</li>
                                    <li><span>Class Start</span> : April 25, 2020</li>
                                    <li><span>Status</span> : Beginner </li>
                                </ul>
                            </div>
                        </div>
                        <div class="new-project">
                            <div class="project-new">
                                <h4>Are you Ready to  Enroll this Course?</h4>
                                <a class="hire-btn" href="https://docs.google.com/a/juniv.edu/forms/d/1TqoW-o2tcpQ5g6rdrpePClFRJ6IHanzvHP52L2z-YZA/edit?usp=drive_web" target="_blank">Register Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="project-details">
                        {!! $project_details->description !!}
						</div>
					</div>
					<!-- End single page -->
                </div>
            </div>
            <!-- End main content -->
        </div>
</div>
        <!-- Start Footer Area -->

        @include('front_end.layouts.footer')