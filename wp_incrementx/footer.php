	<section class="footer-head">
		<div class="container">
			<div class="footer-content">
				<div class="row">
					<div class="col-md-3">
				        <img src="<?php echo get_template_directory_uri().'/assets/images/logo.png';?>" alt="photo" />
				        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel luctus sapien. Aliquam erat volutpat. Duis eu tellus vel ex aliquet lobortis.</p>
				        <p>sample.email.com</p>
				        <p>+1800-213-123</p>	
					</div>
					<div class="col-md-3">
						<h5>Solutions</h5>
						<div class="sol_list">
						  <ul>
						    <li><a href="#">Publisher Offerings</a></a>
						    	<ul>
						        <li><a href="#">Yield Optimizer</a></li>
						        <li><a href="#">Header Biding</a></li>
						        <li><a href="#">PMP Representation</a></li>
						        <li><a href="#">Ad Refresh</a></li>
						        <li><a href="#">Native ads</a></li>
						      </ul>
						    </li>
						    <li><a href="#">Ad Formats</a>
						      <ul>
						        <li><a href="#">Partners</a></li>
						      </ul>
						    </li>
						  </ul>
						</div>	
					</div>
					<div class="col-md-3">
						<h5>Quick Links</h5>
						<div class="sol_list">
						  <ul>
						    <li><a href="#">About Us</a></li>
						    <li><a href="#">Contact Us</a></li>
						    <li><a href="#">FAQ</a></li>
						    <li><a href="#">Privacy Policy</a></li>
						    <li><a href="#">Cookie Policy</a></li>
						    <li><a href="#">M.S.A</a></li>
						  </ul>
						</div>	
					</div>
					<div class="col-md-3">
						<h5>Locations</h5>
						<div class="sol_list">
						  <ul>
						    <li>NewYork</li>
						    <li>SanFransisco</li>
						    <li>London</li>
						    <li>Dubai</li>
						    <li>Mumbai</li>
						  </ul>
						</div>
						<div class="subscribe">
							<form action="#" method="post" class="subscribe-form">
								<label for="email">Subscribe Us</label>
								  <div class="form-group">
								    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
								    <button type="submit">Subscribe</button>
								  </div>
							</form>
						</div>
					</div>

				</div>	
			</div>
		</div>	
	</section>
	<footer class="footer-bottom">
		<div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="copyright">
            &copy; Copyright <strong>IncrementX</strong>. All Rights Reserved
          </div>
          
        </div>
        <div class="col-md-6">
          	<div class="social-links">
                <a href="#" class="facebook"><img src="<?php echo get_template_directory_uri().'/assets/images/facebook.png';?>"></a>
                <a href="#" class="facebook"><img src="<?php echo get_template_directory_uri().'/assets/images/twitter.png'?>"></a>
                <a href="#" class="instagram"><img src="<?php echo get_template_directory_uri().'/assets/images/instagram.png';?>"></a>
                <a href="#" class="instagram"><img src="<?php echo get_template_directory_uri().'/assets/images/linkedin.png';?>"></a>
           	</div>
        </div>
      </div>
    </div>
	</footer>


<?php wp_footer(); ?>

</body>
</html>

<!--- Bootstrap and Jquery-->

 <!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
 <!-- <script src="assets/js/bootstrap.min.js"></script>
 <script src="assets/js/owl.carousel.min.js"></script> -->


<script type="text/javascript">

	$("document").ready(function(){
		$('.carousel').carousel();
		$("#owl-demo").owlCarousel({
 
	      autoPlay: 3000, //Set AutoPlay to 3 seconds
	      navigation: true,
	      pagination : false,
    	  navigationText : ["<", ">"],
    	  loop:true,
	    margin:10,
	    responsiveClass:true,
	    responsive:{
	        0:{
	            items:1,
	            nav:true
	        },
	        600:{
	            items:3,
	            nav:false
	        },
	        1000:{
	            items:5,
	            nav:true,
	            loop:false
	        }
	    }
	  });
	})

</script>