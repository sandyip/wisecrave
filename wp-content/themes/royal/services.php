<?php /* Template Name: services */ ?>
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
            <span class="smllogo"><img src="images/new.png" width="210" alt="mobile-logo" /></span>
            <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
          </div>
          <!-- NAVIGATION MENU -->
          <div class="wsmainfull menu clearfix">
            <!-- HEADER STRIP -->
            <div class="headtoppart clearfix">
              <div class="headerwp clearfix">
                <div class="headertopleft header-contacts">
                  <span class="txt-400 b-right">
                    <a class="txt-400 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Countries
                   </a>
                   <div class="dropdown-menu btn-primary" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Nepal</a>
                    <a class="dropdown-item" href="#">Australia</a>
                  </div>
                </span>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fab fa-facebook-f"></i><span></span></a>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fab fa-instagram"></i><span></span></a>
              </span>
              <span class="txt-400 b-right"><a href="rewardus.html"><i class="fab fa-youtube"></i><span></span></a>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fa fa-sign-in-alt"></i><span>Reward Us</span></a>
            </div>
            <div class="headertopright header-contacts">
              <span>
                <a href="tel:(02) 8074 3892" class="txt-400 b-right"><i class="far fa-envelope-open"></i>(02) 8074 3892</a>
              </span>
              <span>
                <a href="mailto:info@royaledu.com.au" class="txt-400 b-right"><i class="far fa-envelope-open"></i>info@royaledu.com.au</a>
              </span>
              <span class="txt-400"><a href="login.html"><i class="fa fa-sign-in-alt"></i><span>Login</span></a>
            </span>
          </div>
        </div>
      </div> <!-- END HEADER STRIP -->
      <div class="wsmainwp clearfix">
        <div class="desktoplogo">
          <a href="<?php echo site_url('/home');?>" class="logo-black">
             <?php 
                if(has_custom_logo() || is_customize_preview()){
                the_custom_logo();
            }else{
                ?>
                Wisecrave
            <?php } ?>
          </a>
        </div>
        <!-- MAIN MENU -->
        <nav class="wsmenu clearfix blue-header">
          <!-- <ul class="wsmenu-list">
            <li aria-haspopup="true"><a href="home.html">Home <span class="nl-simple"></span></a>
            </li>
            <li aria-haspopup="true"><a href="about.html">About Us <span class="nl-simple"></span></a>
            </li> -->
            <!-- DROPDOWN MENU -->
            <!-- <li aria-haspopup="true"><a href="services.html">Services<span class="wsarrow"></span></a>
              <ul class="sub-menu">
                <li aria-haspopup="true"><a href="">Study Abroad<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="countries_aus.html">Study in Australia</a></li>
                    <li aria-haspopup="true"><a href="countries_uk.html">Study in UK</a></li>
                    <li aria-haspopup="true"><a href="countries_can.html">Study in Canada</a></li>
                    <li aria-haspopup="true"><a href="countries_nw.html">Study in Norway</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="#">Student Service<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="educationservice.html">Education Service</a></li>
                    <li aria-haspopup="true"><a href="oba-service.html">Outcome based Assessment (OBA)</a></li>
                    <li aria-haspopup="true"><a href="studentvisa.html">Student Visa</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="">Migration Service<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="visa_temp.html">Temporary Graduate Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_visitor.html">Visitor Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_partner.html">Partner Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_other.html">Other Visa</a></li>
                    <li aria-haspopup="true"><a href="py&naati.html">PY & NAATI</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="services.html">Other Services</a></li>
              </ul>
            </li> --> <!-- END DROPDOWN MENU -->
           <!--  <li aria-haspopup="true"><a href="">Test Preparation <span class="nl-simple"></span></a>
              <ul class="sub-menu">
                <li aria-haspopup="true"><a href="ielts.html">IELTS</a></li>
                <li aria-haspopup="true"><a href="toefl.html">TOEFL</a></li>
                <li aria-haspopup="true"><a href="pte.html">PTE</a></li>
                <li aria-haspopup="true"><a href="gre.html">GRE</a></li>
                <li aria-haspopup="true"><a href="sat.html">SAT</a></li>
                <li aria-haspopup="true"><a href="gmat.html">GMAT</a></li>
              </ul>
            </li>
            <li aria-haspopup="true"><a href="blog.html">Blog <span class="nl-simple"></span></a>
            </li>
            <li class="nl-simple" aria-haspopup="true"><a href="contactus.html">Contact Us</a></li>
          </ul> -->
          <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary-menu',
                  'container' => '',
                  'items_wrap' => '<ul class="wsmenu-list">%3$s</ul>'
                )
              ) 

              ?>
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
                  <h2 class="title">Our Courses</h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home &nbsp;/</a>
                  </span>
                  <span><?php the_title();?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="sticky-social">
  <ul class="social">
    <li class="fb"><a href="https://www.facebook.com/WiseCraveaus" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li class="twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      <li class="insta"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
  </div>

  <!-- Floating download bar Starts -->
<!-- <div class="float-sm">
  <div class="fl-fl float-fb">
    <i class="fas fa-download"></i>
    <a href="" target="_blank"> Download our App!</a>
  </div>
</div> -->
<!-- Floating download bar Ends -->



				<!-- SERVICES-7
				============================================= -->
				<section id="services-7" class="wide-60 services-section division">
					<div class="container">


						<!-- SECTION TITLE -->
						<div class="row">	
							<div class="col-md-12 section-title center">		

				 				<!-- Title -->
								<h2 class="h2-xs"><?php the_field('top-title');?></h2>

								<!-- Text -->	
								<p class="p-md"><?php the_field('top-content');?>
								</p> 

							</div>
						</div>	 <!-- END SECTION TITLE -->	

						<div class="row">


							<!-- SERVICE BOX #1 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7 sbox-color">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-1-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">

									<!-- Text -->
									<div class="sbox-7-txt bg-1 white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-1');?></h5>

										<!-- Text -->
										<p class="p-sm h-20"><?php the_field('course-1-content');?>
										</p>

									</div>

								</div>							
							</div>


							<!-- SERVICE BOX #2 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7 sbox-color">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-2-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">

									<!-- Text -->
									<div class="sbox-7-txt bg-2 white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-2');?></h5>

										<!-- Text -->
										<p class="p-sm h-20"><?php the_field('course-2-content');?>
										</p>

										

									</div>

								</div>							
							</div>


							<!-- SERVICE BOX #3 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-3-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">

									<!-- Text -->
									<div class="sbox-7-txt bg-3 white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-3');?></h5>

										<!-- Text -->
										<p class="p-sm h-20"><?php the_field('course-3-content');?>
										</p>

										

									</div>	

								</div>							
							</div>


							<!-- SERVICE BOX #4 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-4-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">	

									<!-- Text -->
									<div class="sbox-7-txt bg-4 white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-4');?></h5>

										<!-- Text -->
										<p class="p-sm h-20"><?php the_field('course-4-content');?>
										</p>

										

									</div>

								</div>							
							</div>


							<!-- SERVICE BOX #5 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-5-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">	

									<!-- Text -->
									<div class="sbox-7-txt bg-5 white-color">	

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-5');?></h5>

										<!-- Text -->
										<p class="p-sm" style="height: 192px;"><?php the_field('course-5-content');?>
										</p>

										

									</div>

								</div>							
							</div>


							<!-- SERVICE BOX #6 -->
							<div class="col-md-6 col-lg-4">
								<div class="sbox-7">
									
									<!-- Image -->
									<?php 
					                  $id_image = get_field('course-6-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">

									<!-- Text -->
									<div class="sbox-7-txt bg-6 white-color">

										<!-- Title -->
										<h5 class="h5-xl"><?php the_field('course-6');?></h5>

										<!-- Text -->
										<p class="p-sm h-20"><?php the_field('course-6-content');?>
										</p>

										

									</div>

								</div>							
							</div>


						</div>	  <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END SERVICES-7 -->

				
				<!-- ABOUT
				============================================= -->
				<section id="" class="bg-scroll pt-100 about-section division bg-lightgrey">
					<div class="container white-color">
						<div class="row d-flex align-items-center">


							<!-- ABOUT IMAGE -->
				 			<div class="col-lg-6">
				 				<div class="about-6-img text-center">
									<?php 
					                  $id_image = get_field('overseas-img');
					                  $image = wp_get_attachment_image_src($id_image, 'services');
					                  ?>
					                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
								</div>
				 			</div>

						
							<!-- ABOUT TEXT -->
							<div class="col-lg-6">
								<div class="about-6-txt pc-20">

									<!-- Section ID -->	
						 			<span class="section-id id-color">Overseas Education</span>

									<!-- Title -->
									<h2 class="h2-xs"><?php the_field('overseas-title');?></h2>

									<!-- Text -->
									<p class="p-md"><?php the_field('overseas-content');?>
									</p>
									<a class="btn btn-arrow btn-md btn-primary" href="tel:(02) 8074 3892"><span><?php the_field('overseas-button');?><i class="fa fa-phone"></i></span></a>

									<!-- Small Title -->
									<h5 class="h5-lg"></h5>		

									<!-- Flags list -->
									<ul class="flags-list">
										<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/flags/canada.png" alt="flag"/><span>Canada</span></a></li>
										<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/flags/australia.png" alt="flag"/><span>Australia</span></a></li>
										<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/flags/usa.png" alt="flag"/><span>USA</span></a></li>	
										<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/flags/united-kingdom.png" alt="flag"/><span>UK</span></a></li>	
										<li><a href=""><img src="<?php bloginfo('template_url'); ?>/images/flags/eu.png" alt="flag"/><span>Europe</span></a></li>	
									</ul>		

								</div>							
							</div> <!-- END ABOUT TEXT -->


						</div>    <!-- End row -->
					</div>     <!-- End container -->
				</section>	<!-- END ABOUT-6 -->




				<!-- FOOTER
				============================================= -->
 <?php get_footer(); ?>