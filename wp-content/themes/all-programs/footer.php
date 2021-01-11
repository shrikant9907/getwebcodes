 
    <footer class="footer_style1 bg-dark text-white py_40_20">
      <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                  <h2 class="text-primary mont_serrat f_20_22">About allprograms.tech</h2>
                  <p class="mb_40 text-secondary">Our website is specially designed for the beginner. Who's looking for some good program from basic to advanced.</p>
                 </div> 
                <div class="col-12 col-md-8">
                    <div class="row">
                      <div class="col-12 col-md-4">
                        <h3 class="text-primary mont_serrat f_20_22">How to</h3>
                        <ul class="menu inline-item-group p_x_20">
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/wordpress/'); ?>">WordPress</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/angular/'); ?>">Angular</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/bootstrap/'); ?>">Bootstrap</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/html-and-css/'); ?>">HTML and CSS</a></li>
                        </ul>
                      </div>
                      <div class="col-12 col-md-4">
                       <h3 class="text-primary mont_serrat f_20_22">Tutorials and Programs</h3>
                         <ul class="menu inline-item-group p_x_20">
                          <li><a class="text-secondary" href="<?php echo site_url('/tutorial_cat/html/'); ?>">HTML and CSS</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/tutorial_cat/basics-of-php/'); ?>">Basics of PHP</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/php/'); ?>">PHP programs</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/programs-category/python/'); ?>">Python programs</a></li>
                        </ul>  

                      </div>
                      <div class="col-12 col-md-4">
                        <h2 class="text-primary mont_serrat f_20_22">Information</h2>
                         <ul class="menu inline-item-group p_x_20 ">
                          <li><a class="text-secondary" href="<?php echo site_url('/sitemap'); ?>">Sitemap</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/privacy-policy'); ?>">Privacy Policy</a></li>
                          <li><a class="text-secondary" href="<?php echo site_url('/terms-and-conditions'); ?>">Terms and Conditions</a></li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="bg_dark2 text-secondary">
            <div class="container">
                <div class="row">
                    <div class="col order-3 order-sm-1"><p class="f_14_16 m-0 text-left">Copyright © <?php echo date('Y'); ?>. All rights reserved.</p></div>
                    <div class="col order-2 order-sm-2 text-center d-none">
                        <div class="social_links m-0">
                            <a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a>
                            <a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="#" title="Whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col order-1 order-sm-3"><p class="f_14_16 m-0 text-right">Design with <span class="text-primary">&hearts;</span> for you.</p></div>
                </div>
            </div>
        </div>
        
    </footer>
    <?php wp_footer(); ?>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/main.min.js'></script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js'></script>
</body>

</html>