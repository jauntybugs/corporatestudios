<?php get_header('home'); ?>    
    <div class="site-blocks-cover" id="home-section">
      <div class="img-wrap">
        <div class="owl-carousel slide-one-item hero-slider">
          <div class="slide">
            <video width="100%" autoplay muted loop id="myVideo">
			  <source src="<?php bloginfo('template_url'); ?>/video/2023reel.mp4" type="video/mp4">
			  Your browser does not support HTML5 video.
			</video>  
          </div>
          <!--<div class="slide">
            <img src="images/glint_hero_1.jpg" alt="Corporate Studios">  
          </div>
          <div class="slide">
            <img src="images/glint_hero_2.jpg" alt="Corporate Studios">  
          </div>-->
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto align-self-center">
            <div class="intro">
              <div class="heading">
                <h1>Corporate Studios</h1>
              </div>
              <div class="text">
                <p>
					<a href="#contact-section" class="btn btn-outline-primary btn-md">Contact Us</a>
					<a target="_blank" href="https://docs.google.com/forms/d/1Feoc8oyb_EQHLvrRl2BNPo1IsoGsRAB7pr3xEBusDQQ/edit" class="btn btn-outline-primary btn-md">Request a Quote</a>
				 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-blocks-cover -->

    <div class="site-section" id="about-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-5">
            
			<ul class="rslides" id="slider1">
			  <li>				  
				<img src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A0254.jpg" alt="Corporate Studios" class="img-fluid"
			  </li>
			  <li>
				<img src="https://corporatestudios.ng/wp-content/uploads/2024/01/3E9A0997.jpg" alt="Corporate Studios" class="img-fluid"
			  </li>
				
				<li>				  
				<img src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A8337.jpg" alt="Corporate Studios" class="img-fluid">
			  </li>
			  <li>
				<img src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A0158.jpg" alt="Corporate Studios" class="img-fluid">
			  </li>
				<li>				  
				<img src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A9877 copy.jpg" alt="Corporate Studios" class="img-fluid">
			  </li>
			</ul>
          </div>
          <div class="col-lg-5 ml-auto section-title">
            <span class="sub-title mb-2 d-block">Get to know Corporate Studios</span>
            <h2 class="title text-primary mb-3">About us</h2>
            <p class="mb-4">Digital media production studio in Victoria Island, Lagos, Nigeria. We are a corporate communication studio that produces high-quality media that satisfies our clients and achieves their brand objectives.</p>


            <div class="d-flex">
              <ul class="list-unstyled ul-check success mr-5">
                <li>Photography</li>
                <li>Cinematography</li>
                <li>Branded Content & Ads</li>
				<li>Live Streaming</li>
                
              </ul>
              <ul class="list-unstyled ul-check success">
                
                <li>Event Coverage</li>
                <li>Studio Hire</li>
                <li>Equipment Rental</li>
				<li>Podcast Recording & Post Production</li>
				  
              </ul>
            </div>
            <p><a data-fancybox data-ratio="2" href="https://www.youtube.com/watch?v=myAEwEGiQhw" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
          </div>
        </div>
      </div>
    </div> <!-- .END site-section -->

    <div class="site-section" id="what-we-do-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 section-title">
            <span class="sub-title mb-2 d-block">What We Do</span>
            <h2 class="title text-primary">Corporate Studios Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10 ml-auto">
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Photography</h3>
                  <p>Our photography services include portraits, headshots, and product  photography and event for photography for individual and organisations.</p>
                  <p><a href="<?php echo site_url('photography'); ?>" class="readmore">See more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Cinematography</h3>
                  <p>We expertly capture and help you tell your stories with our remarkable cinematography skills.Let’s capture the moment and tell your brand story. We handle everything from  pre production, production and post production.</p>
                  <p><a href="<?php echo site_url('cinematography'); ?>" class="readmore">See more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Branded Content & Ads</h3>
                  <p>We create unique, valuable, and specific content that align with your brand’s identity.Content tailored to suit your brief. Quality and professionally done.</p>
					<p><a href="<?php echo site_url('branded-content'); ?>" class="readmore">See more</a></p>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Event Coverage</h3>
                  <p>Lets capture the moment and tell your brand story. We offer Coverage of conferences and seminars for organisations, we will communicate the essence of your events in video.</p>
                  <p><a href="<?php echo site_url('event-coverage'); ?>" class="readmore">See more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Studio Hire</h3>
                  <p>For creatives looking to Hire a studio space for their projects, hire our state of the art standard studio space with studio equipments at hourly rate.For photography and video production. All studio equipments included.</p>
                  <p><a href="<?php echo site_url('studio-hire'); ?>" class="readmore">Learn more</a></p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Equipment Rental</h3>
                  <p>Rent from our wide range of studio equipment at affordable prices. Equipments include, Cameras, Lenses, Gimbal, Audio, Lights</p>
                  <p><a href="<?php echo site_url('equipment-rental'); ?>" class="readmore">Learn more</a></p>
                </div>
              </div>
				<div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Podcast Recording & Post Production</h3>
                  <p>Record both audio and video podcast. We handle everything from pre production, set design to post production.</p>
                  <p><a href="<?php echo site_url('podcast-production'); ?>" class="readmore">Learn more</a></p>
                </div>
              </div>
			  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="service h-100">
                  <h3>Live Streaming</h3>
                  <p>Broadcast your events live on the internet on your social media channels.</p>
                  <p><a href="<?php echo site_url('podcast-production'); ?>" class="readmore">Learn more</a></p>
                </div>
              </div>
				
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .site-section -->


    <div class="site-section" id="portfolio-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Product Photography</span>
            <h2 class="title text-primary mb-3">We love what we do, check out some of our latest works</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A5101 copy.jpg" alt="Corporate Studios Project" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Product Shoot</h3>
            <p class="mb-4">Product Photography.</p>
            <p class="mb-4"><a href="<?php echo site_url('product-branding'); ?>" class="readmore">View More</a></p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="https://corporatestudios.ng/wp-content/uploads/2024/03/affinityx.png" alt="Corporate Studios Project" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Branded Content</h3>
            <p class="mb-4">Affinity Gallery x ArtX </p>
            <p><a data-fancybox data-ratio="2" href="https://youtu.be/Br2n8rxer5g" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
            
          </div>
        </div>
		  
		  
		  
		<div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="https://corporatestudios.ng/wp-content/uploads/2024/03/scent.png" alt="Corporate Studios Project" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>AD Video</h3>
            <p class="mb-4">Client Promotional Video</p>
            <p><a data-fancybox data-ratio="2" href="https://youtu.be/JBEyWas9lQg" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
          </div>
        </div>
		  

        <div class="row mb-5">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <img src="https://corporatestudios.ng/wp-content/uploads/2024/03/ct.png" alt="Corporate Studios Project" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top mr-auto order-2 order-lg-1">
            <h3>Event Coverage</h3>
            <p class="mb-4">Event Coverage Highlight</p>
            <p><a data-fancybox data-ratio="2" href="https://youtu.be/Z3oVHgVoUS8" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch the video</span></a></p>
            
          </div>
        </div>

         <!--<div class="row mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="<?php //bloginfo('template_url'); ?>/projects/project_1/proj-3.jpg" alt="Corporate Studios Project 3" class="img-fluid">
          </div>
          <div class="col-lg-5 h-100 jm-sticky-top ml-auto">
            <h3>Event Coverage</h3>
            <p class="mb-4">HREA 2021 Work Festival Convention in Lagos Nigeria.</p>
            <p><a data-fancybox data-ratio="2" href="https://www.youtube.com/J16Q-xE4y4A" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch Day 1</span></a></p>
			<p><a data-fancybox data-ratio="2" href="https://www.youtube.com/7lCNSwhNZ84" class="d-flex align-items-center"><span class="icon-play_circle_outline h4 m-0 mr-2"></span> <span>Watch Day 2</span></a></p>
            
          </div>
        </div>

      </div>
    </div>

    <!--<div class="site-section bg-light">
      <div class="container">
         <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Testimonials</span>
            <h2 class="title text-primary mb-3">Our Client Sayings</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;A small river named Duden <strong>flows by their place and supplies it with the necessary regelialia</strong>. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_4.jpg" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jean Smith</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-lg-6 mb-4">
            <div class="testimonial bg-white h-100">
              <blockquote class="mb-3">
                <p>&ldquo;Far far away, behind the word mountains, <strong>far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</strong> right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>
              <div class="d-flex align-items-center vcard">
                <figure class="mb-0 mr-3">
                  <img src="images/person_3.jpg" alt="Free website template by Free-Template.co" class="img-fluid ounded-circle">
                </figure>
                <div class="vcard-text">
                  <span class="d-block">Jacob Spencer</span>
                  <span class="position">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->


    
    <div class="site-section" id="studio-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 section-title text-center mx-auto">
            <span class="sub-title mb-2 d-block">Photos</span>
            <h2 class="title text-primary mb-3">Studio Gallery</h2>
          </div>
        </div>
       
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://corporatestudios.ng/wp-content/uploads/2024/01/3E9A8165 copy.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="https://corporatestudios.ng/wp-content/uploads/2024/01/3E9A8165 copy.jpg">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://corporatestudios.ng/wp-content/uploads/2024/01/IMG0312.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="https://corporatestudios.ng/wp-content/uploads/2024/01/IMG0312.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://corporatestudios.ng/wp-content/uploads/2024/02/0U9A5.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="https://corporatestudios.ng/wp-content/uploads/2024/02/0U9A5.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/66.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/66.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/57.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/57.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/07.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/07.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A0158.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A0158.jpg">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/0002.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/0002.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A9877 copy.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="https://corporatestudios.ng/wp-content/uploads/2024/01/0U9A9877 copy.jpg">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/40.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/40.jpg">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="<?php bloginfo('template_url'); ?>/photo-gallery/3E9A1184.jpg" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/photo-gallery/3E9A1184.jpg">
            </a>
          </div>


        </div>
      </div>
    </div> <!-- END .site-section -->
    <div class="site-section" id="location-section">
      <div class="container">
		  <div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">You can come and look around</span>
            <h2 class="title text-primary">Locate Us</h2>
          </div>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.6937759249554!2d3.437639814770214!3d6.433367095345517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf94c1466ea9a25aa!2sCorporate%20Studios!5e0!3m2!1sen!2sng!4v1623406166208!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	  </div>
    </div>
    <div class="site-section" id="contact-section">
		<div class="section-title text-center mb-5">
            <span class="sub-title mb-2 d-block">Let's Hear From You!</span>
            <h2 class="title text-primary"><a target="_blank" href="https://docs.google.com/forms/d/1Feoc8oyb_EQHLvrRl2BNPo1IsoGsRAB7pr3xEBusDQQ/edit">Contact Us</h2>
          </div>
			
      <!--<div class="container">
       <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/moqgbjgr" method="post">
  <fieldset id="fs-frm-inputs">
    <label for="full-name">First Name</label>
    <input type="text" name="name" id="first-name" placeholder="First Name" required="">
      <label for="full-name">Last Name</label>
    <input type="text" name="name" id="last-name" placeholder="Last Name" required="">
    <label for="email-address">Email Address</label>
    <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
    <label for="message">Message</label>
    <textarea rows="5" name="message" id="message" placeholder="Drop us a message we will get back to you." required=""></textarea>
    <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
  </fieldset>
  <input type="submit" value="Submit">
</form><style>/* reset */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm fieldset,
#fs-frm optgroup,
#fs-frm label,
#fs-frm #card-element:disabled {
  font-family: inherit;
  font-size: 100%;
  color: inherit;
  border: none;
  border-radius: 0;
  display: block;
  width: 100%;
  padding: 0;
  margin: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
}
#fs-frm label,
#fs-frm legend,
#fs-frm ::placeholder {
  font-size: .825rem;
  margin-bottom: .5rem;
  padding-top: .2rem;
  display: flex;
  align-items: baseline;
}

/* border, padding, margin, width */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm #card-element {
  border: 1px solid rgba(0,0,0,0.2);
  background-color: rgba(255,255,255,0.9);
  padding: .75em 1rem;
  margin-bottom: 1.5rem;
}
#fs-frm input:focus,
#fs-frm select:focus,
#fs-frm textarea:focus {
  background-color: white;
  outline-style: solid;
  outline-width: thin;
  outline-color: gray;
  outline-offset: -1px;
}
#fs-frm [type="text"],
#fs-frm [type="email"] {
  width: 100%;
}
#fs-frm [type="button"],
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  width: auto;
  cursor: pointer;
  -webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;
}
#fs-frm [type="button"]:focus,
#fs-frm [type="submit"]:focus,
#fs-frm [type="reset"]:focus {
  outline: none;
}
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  margin-bottom: 0;
}
#fs-frm select {
  text-transform: none;
}

#fs-frm [type="checkbox"] {
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
  appearance: checkbox;
  display: inline-block;
  width: auto;
  margin: 0 .5em 0 0 !important;
}

#fs-frm [type="radio"] {
  -webkit-appearance: radio;
  -moz-appearance: radio;
  appearance: radio;
}

/* address, locale */
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  display: inline;
}
#fs-frm fieldset.locale input[name="city"] {
  width: 52%;
}
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  width: 20%;
}
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"] {
  margin-right: 3%;
}
</style>-->
      </div>
    </div> <!-- END .site-section -->


 <?php get_footer(); ?>