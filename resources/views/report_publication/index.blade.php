@include('front_end.layouts.header')
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Report & Development</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Report & Development</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
              <!-- Start contact Area -->
              <div class="service-area bg-color area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3>Report</h3>
							<p>ECI caters the needs of all stakeholders through providing required support services and harmonizes latest means</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="all-services">
                    	<!-- single dervices -->
						<!-- single dervices -->
						<div class="col-md-6 col-xs-12">
							<div class="single-service wow fadeInUp" data-wow-delay="0.5s">
								<div class="service-icon">
									<span class="flaticon-031-financial"></span>
								</div>
								<div class="service-inner">
									<div class="service-content">
										<h4> National </h4>
										<p>ECI conducts training and development for ensuring sustainable growth and focus diverse areas like Trade, Economy, Technology and so on.</p>
										<a class="service-btn" href="{{url('/national')}}"><i class="ti-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- single dervices -->
						<div class="col-md-6 col-xs-12">
							<div class="single-service wow fadeInUp" data-wow-delay="0.7s">
								<div class="service-icon">
									<span class="flaticon-057-statistics"></span>
								</div>
								<div class="service-inner">
									<div class="service-content">
										<h4>Global </h4>
										<p>We are looking into the collaboration with renowned academic institutions to meet their demand and place our research to them for further tie-up.</p>
										<a class="service-btn" href="{{url('/global')}}"><i class="ti-arrow-right"></i></a>
									</div>
								</div>
							</div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="section-headline text-center">
                                    <h3>Publication</h3>
                                    <p>ECI caters the needs of all stakeholders through providing required support services and harmonizes latest means</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
						<!-- single dervices -->
						<div class="col-md-6 col-xs-12">
							<div class="single-service wow fadeInUp" data-wow-delay="0.3s">
								<div class="service-icon">
									<span class="flaticon-012-business"></span>
								</div>
								<div class="service-inner">
									<div class="service-content">
										<h4>Sectoral Report</h4>
										<p>Entrepreneurship development is instrumental for the growth of the economy of any country. ECI and Daffodil Family engaged working together on this domain.</p>
										<a class="service-btn" href="{{url('/entrepreneurship-cafe')}}"><i class="ti-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
                        <!-- single dervices -->
						<div class="col-md-6 col-xs-12">
							<div class="single-service wow fadeInUp" data-wow-delay="0.5s">
								<div class="service-icon">
									<span class="flaticon-041-network"></span>
								</div>
								<div class="service-inner">
									<div class="service-content">
										<h4>DIU Publication</h4>
										<p>Observing the recent pandemic, ECI organizes its activities through series of webinars. In this process, we have been using diverse and robust platforms to make it interactive.
										</p>
										<a class="service-btn" href="{{url('/webiner')}}"><i class="ti-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
						<!-- single dervices -->
						<!-- single dervices -->
                    </div>
                </div>
            </div>
        </div>
</div>
        <!-- Start Footer Area -->
        @include('front_end.layouts.footer')