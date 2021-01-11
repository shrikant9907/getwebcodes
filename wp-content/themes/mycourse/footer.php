<footer class="section-footer footer_style1 f14">
 		<div class="footer_top pt_60 pb_20">
	 		<div class="container">
	 			<div class="row">
 				  	<div class="col-6 col-md-3">
                 <h3 class="text-primary f16 lh18 mb_20 text-uppercase text_bold">Get in touch</h3>
               <!-- <p><img class="footer_logo" src="https://picsum.photos/id/475/300/100" alt="" /></p> -->
	                    <ul class="address">
                        <li><i class="fas fa-phone-alt text-primary"></i> <a href="mailto:0000000000">000 000 0000</a></li>
                        <li> <i class="fa fa-envelope text-primary" aria-hidden="true"></i><a href="mailto:info@getwebcodes.in">info@getwebcodes.in</a></li>
                        <li><i class="fas fa-map text-primary"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </li>
                      </ul>
                      <ul class="socialicons f14 colored siconsc"> 
                        <li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="youtube"><a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                      </ul>
	                </div>
	               	<div class="col-6 col-md-3">
                    <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Learn Codes</h3>
                    <ul class="menu">
                      <li><a href="#">WordPress</a></li>
                      <li><a href="#">Angular</a></li>
                      <li><a href="#">Bootstrap</a></li>
                      <li><a href="#">HTML and CSS</a></li>
                      <li><a href="#">PHP Programming</a></li>
                      <li><a href="#">Python Programming</a></li>
                    </ul>
	                </div>
	                <div class="col-6 col-md-3">
                      <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Knowledge</h3>
                      <ul class="menu">
                          <li><a href="#">Blog</a></li>
                          <li><a href="#">MCQ's</a></li>
                          <li><a href="#">Test Quzzes</a></li>
                          <li><a href="#">Interview Questions</a></li>
                          <li><a href="#">Tools</a></li>
                          <!-- <li><a href="#">Support</a></li> -->
                          <!-- <li><a href="#">Request a quote</a></li> -->
                          <!-- <li><a href="#">Hire a developer</a></li> -->
                      </ul>
	                </div>
	                <div class="col-6 col-md-3">
                      <h3 class="text-primary f18 lh22 mb_20 text-uppercase">Resources</h3>
                      <ul class="menu">
                          <li><a href="#">Sitemap</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Terms and Conditions</a></li>
                      </ul>
	                </div>
	 			</div>
	 		</div>
 		</div>

 		<div class="footer_bottom bg-primary text-white pt_20 pb_10">
	 		<div class="container">
	 			<div class="row">
	 				 <div class="col">
	 				 	<p class="f12 lh18 mb_10">&copy; <?php echo date('Y'); ?>. GetWebCodes.in | All Rights Reserved.</p>
	 				 </div>
	 				 <div class="col">
	 				 	<p class="f12 lh18 mb_10 text-right">Developed with <span class="f18">&hearts;</span> for you<a target="_blank" class="text-white hide" href="javascript:void('0');">Shrikant</a></p>
	 				 </div>
	 			</div>
	 		</div>
 		</div>
 		
 	</footer>

 	<a href="#" class="gotoparrow"><i class="fas fa-arrow-up"></i></a>
  
  <!-- Modal -->
  <div class="modal fade" id="basicLoginFromModal" tabindex="-1" role="dialog" aria-labelledby="basicLoginFromModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <form class="fui fui1p w-100" action="" method="post" enctype="multipart/form-data">
      <div class="mui muic mui2 muis modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="basicLoginFromModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-success alertrcs dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="form-group">
            <input name="email" value="" type="text" class="form-control" placeholder="Enter your email" /> 
          </div>
          <div class="form-group">
            <input name="password" value="" type="password" class="form-control" placeholder="Enter your password" />
          </div>
          <div class="d-flex justify-content-between">
            <div class="rememberme m-0">
              <label for="rememberme" class="d-flex align-items-center"><input class="mr_5 min_h_0" id="rememberme" name="rememberme" value="yes" type="checkbox" /> Remember me</label>
            </div>
            <a href="#" class="link">Forgot Password?</a>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btnui3" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary btnui3">Sign in</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

  <!-- jQuery --> 
	<!-- <script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>  -->

  <!-- Popper JS -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>

	<!-- Bootstrap -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- Slick Slider -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick.min.js"></script>

    <!-- Custom Script -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

</body>
</html>  