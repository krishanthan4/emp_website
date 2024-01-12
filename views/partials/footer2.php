 		<!--footer start-->
         <footer id="footer"  class="footer">
			<div class="container">
				<div class="footer-menu">
		           	<div class="row">
			           	<div class="col-sm-3">
			           		 <div class="navbar-header">
								<img src="/public/images/logo-removebg-preview.png" class="tw-w-16 tw-h-16 tw-rounded-full" alt="Coconut Water Can">				            </div><!--/.navbar-header-->
			           	</div>
			           	<div class="col-sm-9">
			           		<ul class="footer-menu-item">
						
			                   
			                    <li class="<?= navRoute("business-model")?>"><a href="/business-model">Business Model</a></li>
                                <li class="<?= navRoute("our-approach")?>"><a href="/our-approach">Our Approach</a></li>
			                    <li class="<?= navRoute("products")?>"><a href="/products">Products</a></li>
			                    <li class="<?= navRoute("board-of-directors")?>"><a href="/board-of-directors">Board Of Directors</a></li>
                                <li class="<?= navRoute("contact")?>"><a href="/contact">Contact Us</a></li>
			                </ul><!--/.nav -->
			           	</div>
		           </div>
				</div>
				<div class="hm-footer-copyright">
					<div class="row">
						<div class="col-sm-5">
							<p>
								&copy;copyright. developed by CodeSpace Team
							</p><!--/p-->
						</div>
						<div class="col-sm-7">
							<div class="footer-social">
								<span><i class="fa fa-phone"> +1  (222) 777 8888</i></span>
								<a href="#"><i class="fa fa-facebook"></i></a>	
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
							</div>
						</div>
					</div>
					
				</div><!--/.hm-footer-copyright-->
			</div><!--/.container-->

			<div id="scroll-Top">
				<div class="return-to-top">
					<i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div>
				
			</div><!--/.scroll-Top-->
			
        </footer><!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->

		<script src="assets/js/jquery.js"></script>
        
        <!--modernizr.min.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		
		<!--bootstrap.min.js-->
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- bootsnav js -->
		<script src="assets/js/bootsnav.js"></script>

        <!--feather.min.js-->
        <script  src="assets/js/feather.min.js"></script>

        <!-- counter js -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>

        <!--slick.min.js-->
        <script src="assets/js/slick.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		     
        <!--Custom JS-->
        <script src="assets/js/custom.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		<script src="assests/js/jquery-3.3.1.slim.min.js"></script>



		<script type="text/javascript">
                var Tawk_API = Tawk_API || {}
                  , Tawk_LoadStart = new Date();
                (function() {
                    var s1 = document.createElement("script")
                      , s0 = document.getElementsByTagName("script")[0];
                    s1.async = true;
                    s1.src = 'https://embed.tawk.to/6595a0700ff6374032bbc9db/1hj87le4t';
                    s1.charset = 'UTF-8';
                    s1.setAttribute('crossorigin', '*');
                    s0.parentNode.insertBefore(s1, s0);
                }
                )();
            </script>
            <script>
                document.onkeydown - function(e) {
                    if (event.keyCode == 123) {
                        return false;
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) {
                        return false
                    }
                    if (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                        return false;
                    }
                    if (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                        return false;
                    }
                }
            </script>
            <!--End of Tawk.to Script-->
        </footer>
        <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/gsap.min.js"></script>
        <script src="assets/js/simpleParallax.min.js"></script>
        <script src="assets/js/TweenMax.min.js"></script>
        <script src="assets/js/jquery.marquee.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/custom.js"></script>
        <script>
            $(".marquee_text").marquee({
                direction: "left",
                duration: 25000,
                gap: 50,
                delayBeforeStart: 0,
                duplicated: true,
                startVisible: true,
            });
            $(".marquee_text2").marquee({
                direction: "top",
                duration: 25000,
                gap: 50,
                delayBeforeStart: 0,
                duplicated: true,
                startVisible: true,
            });
        </script>

	</body>
	
</html>