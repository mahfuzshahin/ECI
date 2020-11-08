<footer class="footer1">
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="footer-content logo-footer">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="front_end/img/logo/logo_eci.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business. Are you looking for professional advice for your new business. Are you looking for professional advice for your new business.
                                    </p>
                                    @if(session()->get('success'))
                                        <div class="alert alert-success">
                                        {{ session()->get('success') }}  
                                        </div><br />
                                    @endif
                                    <form action="" method="POST">
                                    @csrf
                                        <div class="subs-feilds">
                                            <div class="suscribe-input">
                                                <input type="email" name="email" class="email form-control width-80" id="email" placeholder="Type Email">
                                                <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Quick Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="https://www.bangladesh-bank.org/">Bangladesh Bank</a></li>
                                        <li><a href="https://pmo.gov.bd/">Prime Ministers Office </a></li>
                                        <li><a href="#">Board of Investment</a></li>
                                        <li><a href="http://fbcci.org/fbcci/">FBCCI</a></li>
                                        <li><a href="www.dcci.org.bd">DCCI </a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
										<li><a href="https://bangladesh.gov.bd/index.php">National Web Portal</a></li>
                                        <li><a href="#">Global Money Week</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Pay per click</a></li>
                                        <li><a href="#">Event activation</a></li>
                                        <li><a href="#">Automotion</a></li>
									</ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="footer-content last-content">
                                <div class="footer-head">
                                    <h4>Information</h4>
                                    <div class="footer-contacts">
                                        <p><span>Location :</span> 102/1 Shukrabd, Mirpur Road, Dhanmondi, Dhaka-1207, Bangladesh.</p>
										<p><span>Tel :</span> +8802 9138234, 9136694,</p>
										<p><span>Email :</span> info@eci.org.bd</p>
									</div> 
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Footer Bottom Area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2020
                                    <a href="https://eci.org.bd/" target="_blank">ECI</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Bottom Area -->
        </footer>
        <!-- End Footer Area -->
		
		<!-- all js here -->
        
		<!-- jquery latest version -->
		<script src="{{asset('front_end/js/vendor/jquery-1.12.4.min.js')}}"></script>
		<!-- bootstrap js -->
		<script src="{{asset('front_end/js/bootstrap.min.js')}}"></script>
		<!-- owl.carousel js -->
		<script src="{{asset('front_end/js/owl.carousel.min.js')}}"></script>
		<!-- Counter js -->
		<script src="{{asset('front_end/js/jquery.counterup.min.js')}}"></script>
		<!-- waypoint js -->
		<script src="{{asset('front_end/js/waypoints.js')}}"></script>
		<!-- magnific js -->
        <script src="{{asset('front_end/js/magnific.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('front_end/js/wow.min.js')}}"></script>
         <!-- venobox js -->
        <script src="{{asset('front_end/js/venobox.min.js')}}"></script>
        <!-- meanmenu js -->
        <script src="{{asset('front_end/js/jquery.meanmenu.js')}}"></script>
		<!-- Form validator js -->
		<script src="{{asset('front_end/js/form-validator.min.js')}}"></script>
		<!-- plugins js -->
		<script src="{{asset('front_end/js/plugins.js')}}"></script>
		<!-- main js -->
		<script src="{{asset('front_end/js/main.js')}}"></script>
		<script src="{{asset('admin_assets/js/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('admin_assets/js/datatables/dataTables.bootstrap.min.js')}}"></script>

        <script type="text/javascript">
            $(document).ready( function () {
                $('#example').DataTable();
            });
        </script>
	</body>
</html>