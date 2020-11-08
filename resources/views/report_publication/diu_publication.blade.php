@include('front_end.layouts.header')
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>DIU Publication</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>DIU Publication</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <div class="blog-area fix area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>DIU Publication</h3>
							<p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                               <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('images/publication/uddokta-2.jpg')}}" style=" display: block; margin-left: auto; margin-right: auto;" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Author: Dr. Md. Sabur Khan
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4> উদ্যোক্তা উন্নয়ন ও ব্যবসায় নির্দেশনা</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                               <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('images/publication/rsz_uddokta-11.jpg')}}" style=" display: block; margin-left: auto; margin-right: auto;" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Author: Dr. Md. Sabur Khan
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>উদ্যোক্তা উন্নয়ন নির্দেশিকা</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('images/publication/rsz_11hand.jpg')}}" style=" display: block; margin-left: auto; margin-right: auto;" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                   <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Author: Dr. Md. Sabur Khan
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h6>Hand Book of Entrepreneurship Development</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
									<a class="image-scale" href="#">
										<img src="{{asset('images/publication/new-book.png')}}" style=" display: block; margin-left: auto; margin-right: auto;" alt="">
									</a>
								</div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="admin-type">
                                            <i class="fa fa-user"></i>
                                            Author: Dr. Md. Sabur Khan
                                        </span>
                                    </div>
                                    <a href="#">
                                        <h4>A Journey Towards Entrepreneurship</h4>
                                    </a>
                                </div> 
                            </div>
                        </div>
                        <!-- End single blog -->
                    
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
</div>
        <!-- Start Footer Area -->
@include('front_end.layouts.footer')