	<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="footer-heading mb-4">About Us</h3>
                <p>Digital media production studio in Victoria Island, Lagos,Nigeria. We are team of young , expert creatives dedicated to the creative process,  producing high quality media to the satisfaction of our clients while achieving the brand objectives.</p>
              </div>
            </div>
            

            
          </div>
          <div class="col-lg-3 ml-auto">
           
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Locate Us</h3>
              </div>
              <div class="col-md-6 col-lg-6">
				  
                <ul class="list-unstyled">
                  	<li><a href="#home-section" class="smoothscroll">Home</a></li>
                  	<li><a href="#what-we-do-section" class="smoothscroll">What We Do</a></li>
                  	<li><a href="#about-section" class="smoothscroll">About Us</a></li>
                  	<li><a href="#portfolio-section"  class="smoothscroll">Portfolio</a></li>
                    <li><a href="#studio-section" class="smoothscroll">Gallery</a></li>
                    <li><a href="#contact-section" class="smoothscroll">Contact</a></li>
                </ul>
              </div>
              
            </div>
            
          </div>
          

          <div class="col-lg-4 mb-5 mb-lg-0">

            <div class="mb-5">
              <h3 class="footer-heading mb-2">Contact Us</h3>
				<p>Corporate Studios Nigeria</p>
                <p>Unit 2, 1-7, Muri Okunola Street, Victoria Island, Lagos Nigeria.</p>
                <p>Phone: +234 809 411 1187</p>
				<p>Email: contact@corporatestudios.ng</p>
              <!--<form method="post" class="form-subscribe">
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter full name" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control border-white text-white bg-transparent" placeholder="Enter email" aria-label="Enter Email" aria-describedby="button-addon2">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary px-5" type="submit">Subscribe</button>
                </div>
              </form>-->

            </div>

            


          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="mb-4">
                  <a href="https://www.youtube.com/channel/UCj6pBIqj_qP3eyvp9bs8sVA" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                  <a href="https://instagram.com/corporatestudiosng" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="https://www.linkedin.com/company/corporate-studioslagos" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
				<a href="" class="pl-3 pr-3"><span class="icon-whatsapp"></span></a>
                </div>
            <p>
          <small class="block">&copy; 2024 <strong class="text-white">Corporate Studios</strong> All Rights Reserved. </small> 
          </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.sticky.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/stickyfill.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/isotope.pkgd.min.js"></script>
  
  <script src="<?php bloginfo('template_url'); ?>/js/jquery.fancybox.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        maxwidth: 1500,
        speed: 800,
        pager: true
      });

      // Slideshow 2
      $("#slider2").responsiveSlides({
        auto: false,
        pager: true,
        speed: 300,
        maxwidth: 540
      });

      // Slideshow 3
      $("#slider3").responsiveSlides({
        manualControls: '#slider3-pager',
        maxwidth: 540
      });

      // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
  <?php wp_footer(); ?> 
  </body>
</html>