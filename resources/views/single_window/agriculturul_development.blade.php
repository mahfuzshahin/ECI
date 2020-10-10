@include('front_end.layouts.header')
<div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Single Window</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Single Window</li>
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
							<h3>Agriculturul Development</h3>
							<p>ECI caters the needs of all stakeholders through providing required support services and harmonizes latest means</p>
						</div>
					</div>
				</div>
                <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $key=>$post)
                        <tr>
                        <th scope="row">{{++$key}}</th>
                        <td><a href="/file/{{$post->file}}" target="_blank">{{$post->title}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
        <!-- Start Footer Area -->
        @include('front_end.layouts.footer')