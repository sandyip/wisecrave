<?php /* Template Name: course_detail */ ?>
<?php get_header(); ?>
<!--<div id="loader-wrapper">-->
<!--    <div id="loader">-->
<!--      <div class="cssload-box-loading"></div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- PAGE CONTENT
    ============================================= -->
  <div id="page" class="page">
    <!-- HEADER
      ============================================= -->
    <header id="header-2" class="header white-menu">
      <div class="header-wrapper">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
          <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
          <span class="smllogo"><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" width="210" alt="mobile-logo" /></span>
          <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
        </div>
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
        <!-- HEADER STRIP -->
          <div class="headtopparts clearfix">
            <div class="headerwp clearfix">
              <div class="headertopright header-contacts navbar-fixed-top">
                <span><a href="tel:014106567
" class="txt-grey b-right"><i class="fas fa-phone"></i>01-4106567</a>
</span>
                <span><a href="mailto:we.info@wcevs.com.np
" class="txt-grey b-right"><i class="far fa-envelope-open"></i>we.info@wcevs.com.np
</a>
                </span>
                <span class="txt-grey"><a href="#"><i class="fa fa-sign-in-alt"></i><span class="txt-grey">Login</span></a>
                </span>
              </div>
            </div>
          </div> <!-- END HEADER STRIP -->
          <div class="wsmainwps clearfix navbar-fixed-top">
           <div class="desktoplogo"><a href="https://wcevs.com.np/"><img src="<?php bloginfo('template_url'); ?>/images/logo2.png" width="350" alt="header-logo"></a></div>
            <!-- MAIN MENU -->
            <nav class="wsmenu clearfix blue-header">
              <ul class="wsmenu-list">
                <li class="black" aria-haspopup="true"><a href="<?php echo site_url('/'); ?>">Home <span class="nl-simple"></span></a>
                </li>
                <li class="black" aria-haspopup="true"><a href="<?php echo site_url('/about'); ?>">About Us <span class="nl-simple"></span></a>
                </li>
                <!-- DROPDOWN MENU -->
                <li class="black" aria-haspopup="true"><a href="<?php echo site_url('/services'); ?>services.html">Services<span class="wsarrowb"></span></a>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="#">Study Abroad<span class="wsarrowbr"></span>
                        <ul class="sub-menu">
                          <li aria-haspopup="true"><a href="<?php echo site_url('/countries_aus'); ?>">Study in Australia</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/countries_uk'); ?>">Study in UK</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/countries_can'); ?>">Study in Canada</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/countries_nw'); ?>">Study in Norway</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true"><a href="#">Student Service<span class="wsarrowbr"></span>
                        <ul class="sub-menu">
                          <li aria-haspopup="true"><a href="<?php echo site_url('/educationservice'); ?>">Education Service</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/oba'); ?>">Outcome based Assessment (OBA)</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/studentvisa'); ?>">Student Visa</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true"><a href="#">Migration Service<span class="wsarrowbr"></span>
                        <ul class="sub-menu">
                          <li aria-haspopup="true"><a href="<?php echo site_url('/visa_temp'); ?>">Temporary Graduate Visa</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/visa_temp'); ?>">Visitor Visa</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/visa_partner'); ?>">Partner Visa</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/visa_other'); ?>">Other Visa</a></li>
                          <li aria-haspopup="true"><a href="<?php echo site_url('/pyanaati'); ?>">PY & NAATI</a></li>
                        </ul>
                    </li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/services'); ?>">Other Services</a></li>
                  </ul>
                </li> <!-- END DROPDOWN MENU -->
                <li class="black" aria-haspopup="true"><a href="">Test Preparation <span class="nl-simple"></span></a>
                  <ul class="sub-menu">
                   <li aria-haspopup="true"><a href="<?php echo site_url('/ielts'); ?>">IELTS</a></li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/toefl'); ?>">TOEFL</a></li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/pte'); ?>">PTE</a></li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/gre'); ?>">GRE</a></li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/sat'); ?>">SAT</a></li>
                    <li aria-haspopup="true"><a href="<?php echo site_url('/gmat'); ?>">GMAT</a></li>
                  </ul>
                </li>
                <li class="black" aria-haspopup="true"><a href="<?php echo site_url('/blog'); ?>">Blog <span class="nl-simple"></span></a>
                </li>
                <li class="nl-simple black" aria-haspopup="true"><a href="<?php echo site_url('/contact'); ?>">Contact Us</a>
                </li>
                <li aria-haspopup="true" style="visibility: hidden;"><a href=""> <span class="nl-simple"></span></a>
                </li>
                <li aria-haspopup="true" style="visibility: hidden;"><a href=""> <span class="nl-simple"></span></a>
                </li>
                <li aria-haspopup="true" style="visibility: hidden;"><a href=""> <span class="nl-simple"></span></a>
                </li>
              </ul>
            </nav> <!-- END MAIN MENU -->
          </div>
        </div> <!-- END NAVIGATION MENU -->
      </div> <!-- End header-wrapper -->
    </header> <!-- END HEADER -->
    <!-- INNER PAGE WRAPPER
			============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
				============================================= -->
      <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="page-title-heading">
                  <h2 class="title">Services</h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="home.html">Home &nbsp;/</a>
                  </span>
                  <span>Services /</span>
                  <span>IELTS</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sticky-social">
        <ul class="social">
          <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li class="insta"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <!-- Floating download bar Starts -->
      <div class="float-sm">
        <div class="fl-fl float-fb">
          <i class="fas fa-download"></i>
          <a href="" target="_blank"> Download our App!</a>
        </div>
      </div>
      <!-- Floating download bar Ends -->
      <!-- ABOUT-9
				============================================= -->
      <section id="about-9" class="wide-60 about-section division">
        <div class="container">
          <div class="row">
            <!-- ABOUT TEXT -->
            <div class="col-lg-8">
              <div class="about-9-txt mb-40 pr-15 shadow br-15" style="padding: 25px;">
                <!-- Title -->
                <h3 class="h3-md">IELTS / Language Training</h3>
                <!-- ABOUT BOXES -->
                <div class="a-9-boxes row bg-lightgrey d-flex align-items-center">
                  <!-- ABOUT BOX #1 -->
                  <div class="col-md-4">
                    <div class="a9-box icon-xs">
                      <!-- Icon -->
                      <div class="a9-icon grey-color"><span class="flaticon-358-wall-clock-1" style="color: #c2162c !important;"></span></div>
                      <!-- Text -->
                      <div class="a9-txt">
                        <p class="grey-color txt-400">Duration</p>
                        <p class="blue-color">40 Hours</p>
                      </div>
                    </div>
                  </div>
                  <!-- ABOUT BOX #2 -->
                  <div class="col-md-4">
                    <div class="a9-box icon-xs">
                      <!-- Icon -->
                      <div class="a9-icon grey-color"><span class="flaticon-151-presentation" style="color: #c2162c !important;"></span></div>
                      <!-- Text -->
                      <div class="a9-txt">
                        <p class="grey-color txt-400">Assessment</p>
                        <p class="blue-color">Yes</p>
                      </div>
                    </div>
                  </div>
                  <!-- ABOUT BOX #3 -->
                  <div class="col-md-4">
                    <div class="a9-box icon-xs">
                      <!-- Icon -->
                      <div class="a9-icon grey-color"><span class="flaticon-360-clipboard" style="color: #c2162c !important;"></span></div>
                      <!-- Text -->
                      <div class="a9-txt">
                        <p class="grey-color txt-400">Certification</p>
                        <p class="blue-color">Yes</p>
                      </div>
                    </div>
                  </div>
                </div> <!-- END ABOUT BOXES -->
                <!-- Text -->
                <p>Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae and
                  congue auctor magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien etiam
                  sapien sagittis congue tempor gravida donec enim ipsum porta justo integer at odio velna
                  placerat purus, aliquet elementum massa mollis risus lectus porta rutrum magna dignissim,
                  porttitor hendrerit
                </p>
                <!-- Small Title -->
                <h5 class="h5-md mt-25">About IELTS Exam</h5>
                <!-- List -->
                <ul class="txt-list">
                  <li>Vitae auctor integer congue magna at pretium</li>
                  <li>Integer congue magna at pretium purus pretium ligula rutrum luctus risus eros dolor
                    auctor ipsum blandit purus quis vehicula magna luctus tempor. Quisque vel laoreet
                    turpis urna augue
                  </li>
                  <li>Sagittis congue augue egestas volutpat egestas magna donec ociis et magnis</li>
                  <li>Egestas magna ipsum vitae purus efficitur ipsum cubilia and laoreet pretium</li>
                </ul>
                <!-- Image -->
                <div class="about-9-img mt-40 mb-40">
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/ielts.png" alt="about-image">
                </div>
                <!-- Text -->
                <p>Maecenas gravida porttitor nunc vehicula magna luctus tempor. Quisque laoreet turpis
                  at augue, viverra a augue eget, dictum tempor diam. Pulvinar consectetur vehicula
                  imperdiet varius viverra. Pellentesque ac massa lorem. Fusce eu cursus non nulla
                  vitae massa dictum tempor diam. Fusce eu cursus est
                  nulla vitae massa placerat vulputate
                </p>
                <!-- Small Title -->
                <h5 class="h5-md">IELTS Tips &amp; Tricks:</h5>
                <!-- List -->
                <ul class="txt-list">
                  <li>Tempor magna ipsum vitae purus primis pretium</li>
                  <li>An magnis nulla dolor sapien augue erat iaculis</li>
                  <li>Pretium ligula rutrum luctus blandit porta justo</li>
                  <li>Feugiat a primis ultrice ligula risus auctor rhoncus purus ipsum primis</li>
                  <li>Sapien undo pretium purus ligula tempus ipsum</li>
                  <li>Quaerat sodales sapien undo euismod purus and blandit (Luctus Blandit Porta)</li>
                </ul>
                <!-- Medium Title -->
                <h4 class="h4-xs mt-30">How to Prepare for IELTS</h4>
                <!-- Image -->
                <div class="blog-post-img blog-video text-center mb-30">
                  <!-- Preview Image -->
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/image-11.jpg" alt="about-image">
                  <!-- Change the link HERE!!! -->
                  <div class="video-preview icon-lg white-color">
                    <a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">
                      <span class="flaticon-159-play-button"></span>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Listening</h5>
                    <!-- Text -->
                    <p>Quisque laoreet turpis urna augue, viverra a augue eget, dictum tempor diam vehicula
                      vel imperdiet varius viverra massa lorem. Fusce eu cursus nulla vitae massa dictum
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Reading</h5>
                    <!-- Text -->
                    <p>Quisque laoreet turpis urna augue, viverra a augue eget, dictum tempor diam vehicula
                      vel imperdiet varius viverra massa lorem. Fusce eu cursus nulla vitae massa dictum
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Writing</h5>
                    <!-- Text -->
                    <p>Quisque laoreet turpis urna augue, viverra a augue eget, dictum tempor diam vehicula
                      vel imperdiet varius viverra massa lorem. Fusce eu cursus nulla vitae massa dictum
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Speaking</h5>
                    <!-- Text -->
                    <p>Quisque laoreet turpis urna augue, viverra a augue eget, dictum tempor diam vehicula
                      vel imperdiet varius viverra massa lorem. Fusce eu cursus nulla vitae massa dictum
                    </p>
                  </div>
                </div>
                <!-- Small Title -->
                <h5 class="h5-md mt-25">IELTS Eligibility:</h5>
                <!-- Text -->
                <p>Quisque laoreet turpis
                  urna augue, viverra a augue eget, dictum tempor diam. Pulvinar vehicula vel imperdiet
                  varius viverra. Pellentesque ac massa lorem. Fusce eu cursus nulla vitae massa dictum
                  tempor diam. Nibh vel imperdiet dui varius viverra. Fusce eu cursus est nulla
                </p>
                <!-- List -->
                <ul class="txt-list">
                  <li>Tempor magna ipsum vitae purus primis pretium</li>
                  <li>An magnis nulla dolor sapien augue erat iaculis</li>
                  <li>Pretium ligula rutrum luctus blandit porta justo</li>
                </ul>
                <!-- Small Title -->
                <h5 class="h5-md mt-25">Tests Structure:</h5>
                <!-- Text -->
                <p>Aliqum mullam blandit tempor sapien gravida donec ipsum, at porta justo. Velna vitae and
                  congue auctor magna nihil impedit ligula risus. Mauris donec ociis et magnis sapien etiam
                  sapien sagittis congue tempor gravida donec enim ipsum porta justo integer at odio velna
                  placerat purus, aliquet elementum massa mollis risus lectus porta rutrum magna dignissim,
                  porttitor hendrerit
                </p>
                <!-- List -->
                <ul class="txt-list">
                  <li>An magnis nulla dolor sapien augue erat iaculis</li>
                  <li>Pretium ligula rutrum luctus blandit porta justo</li>
                  <li>Feugiat a primis ultrice ligula risus auctor rhoncus purus ipsum primis</li>
                  <li>Sapien undo pretium purus ligula tempus ipsum</li>
                  <li>Quaerat sodales sapien undo euismod purus and blandit (Luctus Blandit Porta)</li>
                </ul>
              </div>
            </div> <!-- END ABOUT TEXT -->
            <!-- SIDEBAR -->
            <aside id="sidebar" class="col-lg-4">
              <!-- SIDEBAR CATEGORIES -->
              <div class="blog-categories sidebar-div mb-50">
                <!-- Title -->
                <h5 class="h5-lg">Courses Categories: </h5>
                <!-- List -->
                <ul class="blog-category-list clearfix">
                  <li><a href="#" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> TOEFL</a></li>
                  <li><a href="#" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> PTE Coaching</a></li>
                  <li><a href="#" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> SAT (Scholastic Aptitude Test)</a></li>
                  <li><a href="#" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> OET (Occupational English Test)</a></li>
                  <li><a href="#" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Spoken English</a></li>
                </ul>
              </div>
              <!-- SIDEBAR COUNTRIES -->
              <div class="sidebar-countries sidebar-div mb-50">
                <!-- Title -->
                <h5 class="h5-lg">Popular Countries: </h5>
                <!-- List -->
                <ul class="sidebar-country-list clearfix">
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-canada.jpg" alt="sidebar-image">Canada</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-uk.jpg" alt="sidebar-image">United Kingdom</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-usa.jpg" alt="sidebar-image">United States of America</a>
                  </li>
                </ul>
              </div>
              <!-- REQUEST FORM -->
              <div class="">
                <div id="request-form" class="text-center mb-40">
                  <form name="requestForm" class="row request-form bg-lightgrey" novalidate="novalidate">
                    <!-- Request Form Text -->
                    <div class="col-md-12">
                      <h5 class="h5-lg">Request Free Consultation</h5>
                    </div>
                    <!-- Request Form Input -->
                    <div id="input-name" class="col-md-12">
                      <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required="">
                    </div>
                    <!-- Request Form Input -->
                    <div id="input-email" class="col-md-12">
                      <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required="">
                    </div>
                    <!-- Request Form Input -->
                    <div id="input-phone" class="col-md-12">
                      <input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required="">
                    </div>
                    <!-- Request Form Select -->
                    <div id="input-visa" class="col-md-12 input-visa">
                      <select id="inlineFormCustomSelect1" name="visa" class="custom-select visa" required="">
                        <option value="">Select Visa</option>
                        <option>Student Visa</option>
                        <option>Travel visa</option>
                        <option>Working Visa</option>
                        <option>Business Visa</option>
                        <option>Visitor Visa</option>
                        <option>PR Visa</option>
                      </select>
                    </div>
                    <!-- Request Form Select -->
                    <div id="input-country" class="col-md-12 input-country">
                      <select id="inlineFormCustomSelect2" name="country" class="custom-select country" required="">
                        <option value="">Visa For</option>
                        <option>Australia</option>
                        <option>Canada</option>
                        <option>United Kingdom</option>
                        <option>USA</option>
                        <option>Singapore</option>
                        <option>Netherlands</option>
                      </select>
                    </div>
                    <!-- Request Form Button -->
                    <div class="col-md-12 form-btn">
                      <button type="submit" class="btn btn-primary tra-black-hover submit">Send Request</button>
                    </div>
                    <!-- Request Form Message -->
                    <div class="col-md-12 request-form-msg text-center">
                      <div class="sending-msg"><span class="loading"></span></div>
                    </div>
                  </form>
                </div>
              </div> <!-- END REQUEST FORM -->
            </aside> <!-- END SIDEBAR -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
      <!-- HORIZONTAL GREY LINE -->
      <div class="section-divider">
        <div class="container">
          <div class="row">
            <div class="grey-border"></div>
          </div>
        </div>
      </div>
      <section id="services-9" class="wide-100 services-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <!-- Title -->
              <h2 class="h2-xs">Our Most Popular Courses</h2>
              <!-- Text -->
              <p class="p-md">Cursus porta, feugiat primis in ultrice ligula risus auctor tempus dolor feugiat,
                felis lacinia risus interdum auctor id viverra dolor iaculis luctus placerat and massa
              </p>
            </div>
          </div> <!-- END SECTION TITLE -->
          <!-- SERVICE BOXES CAROUSEL -->
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme owl-loaded services-carousel owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-1387px, 0px, 0px); transition: all 0.9s ease 0s; width: 3885px;">
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-3-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">Academic Writing</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-4-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">English for Career Development</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-2-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">IELTS Course</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-6-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">English Grammar and Punctuation</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-1-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">General English</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-5-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">Fundamentals of English Grammar</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-3-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">Academic Writing</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-4-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">English for Career Development</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-2-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">IELTS Course</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-6-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">English Grammar and Punctuation</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-1-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">General English</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-5-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">Fundamentals of English Grammar</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-3-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">Academic Writing</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/course-4-img.jpg" alt="service-image">
                        <!-- Text -->
                        <div class="sbox-9-txt">
                          <!-- Title -->
                          <h5 class="h5-lg">English for Career Development</h5>
                          <!-- Text -->
                          <p class="p-sm">Cursus porta feugiat and primis ultrice ligula risus auctor, tempus a dolor
                            feugiat felis lobortis
                          </p>
                          <!--Link -->
                          <a href="course-details.html">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="owl-dots disabled"></div>
              </div>
            </div>
          </div> <!-- END SERVICE BOXES CAROUSEL -->
        </div> <!-- End container -->
      </section>
      <!-- SERVICES-9
				============================================= -->
      <div id="request-1" class="bg-image wide-60 request-form-section division">
        <div class="container">
          <div class="row d-flex align-items-center">
            <!-- REQUEST FORM TEXT -->
            <div class="col-md-12 col-xl-12">
              <div class="request-txt white-color pc-20 mb-40">
                <!-- Section ID -->
                <span class="section-id id-color">Free 24/7 Support</span>
                <!-- Title -->
                <h2 class="h2-wh">Get Free &amp; Quality Online Consultation</h2>
                <!-- Samll Title -->
                <h5 class="h5-md">Euismod risus auctor egestas augue mauri viverra euismod tortor eugiat a mauris placerat</h5>
                <!-- Text -->
                <p>Fringilla risus nec, luctus mauris orci auctor purus euismod and pretium purus at pretium
                  ligula rutrum viverra tortor sapien sodales and primis ligula risus auctor egestas augue
                  mauri viverra tortor in iaculis placerat eugiat mauris ipsum viverra tortor gravida
                </p>
              </div>
            </div> <!-- END REQUEST FORM TEXT -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </div>
      <!-- FOOTER
				============================================= -->
     <?php get_footer(); ?>