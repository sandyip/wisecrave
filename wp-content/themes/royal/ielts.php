<?php /* Template Name: ielts */ ?>
<?php get_header(); ?>

<?php while(have_posts()) : the_post();?>

<!-- <div id="exampleModalCenter" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block;" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="js-close" style="background-color: #edeef3;opacity: 1;text-align: right;">
        <span aria-hidden="true" style="color: black !important;">×</span>
      </button>
      <img src="<?php echo get_theme_mod('royal_modal_img_handle');?>" class="img-fluid" alt="image" style="width: 33%; height: 22%; margin-left: 250px;">

      <div class="top-left"><?php echo get_theme_mod('royal_modal_title_handle');?> 
      <a href="tel:<?php echo get_theme_mod('royal_modal_phone_number_handle');?>" ><?php echo get_theme_mod('royal_modal_phone_number_handle');?></a> or 

        Email us at <a href="mailto:<?php echo get_theme_mod('royal_modal_email_add_handle');?>">
          <?php echo get_theme_mod('royal_modal_email_add_handle');?></a></p>

        <?php echo get_theme_mod('royal_modal_regards_handle');?>
      </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show" id="overlays"></div> -->

<!--<div id="loader-wrapper">-->
<!--  <div id="loader">-->
<!--    <div class="cssload-box-loading"></div>-->
<!--  </div>-->
<!--</div>-->

    <!-- INNER PAGE WRAPPER
			============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
				============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/04/image-11.jpg');width: 100%;background-size: cover;background-position: center;">
        <div class="cmt-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="page-title-heading">
                  <h2 class="title"><?php the_title();?></h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home &nbsp;/</a>
                  </span>
                  <span>Test Preparation /</span>
                  <span><?php the_title();?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Floating download bar Starts -->
      <!-- <div class="float-sm">
        <div class="fl-fl float-fb">
          <i class="fas fa-download"></i>
          <a href="" target="_blank"> Download our App!</a>
        </div>
      </div> -->
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
                <h3 class="h3-md"><?php the_field('title');?></h3>
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
                        <p class="blue-color"><?php the_field('duration');?></p>
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
                        <p class="blue-color"><?php the_field('assessment');?></p>
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
                        <p class="blue-color"><?php the_field('certification');?></p>
                      </div>
                    </div>
                  </div>
                </div> <!-- END ABOUT BOXES -->
                <!-- Text -->
                <p><?php the_field('content');?>
                </p>
                <!-- Small Title -->
                <h5 class="h5-md mt-25"><?php the_field('title-2');?></h5>
                <!-- List -->
                <ul class="txt-list">
                  <?php the_field('content-2');?>

                </ul>
                <!-- Image -->
                <div class="about-9-img mt-40 mb-40">
                  <?php 
                  $id_image = get_field('image');
                  $image = wp_get_attachment_image_src($id_image, 'ielts');
                  ?>
                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                </div>
                <!-- Small Title -->
                <h5 class="h5-md"><?php the_field('title-3');?></h5>
                <!-- List -->
                <ul class="txt-list">
                  <?php the_field('content-3');?>
                </ul>
                <!-- Medium Title -->
                <h4 class="h4-xs mt-30"><?php the_field('title-4');?></h4>
                <!-- Image -->
                <div class="blog-post-img blog-video text-center mb-30">
                  <!-- Preview Image -->
                  <?php 
                  $id_image = get_field('thumbnail');
                  $image = wp_get_attachment_image_src($id_image, 'ielts');
                  ?>
                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                  <!-- Change the link HERE!!! -->
                  <div class="video-preview icon-lg white-color">
                    <a class="video-popup1" href="">
                      <span class="flaticon-159-play-button"></span>
                    </a>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Listening</h5>
                    <!-- Text -->
                    <p><?php the_field('listening');?>
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Reading</h5>
                    <!-- Text -->
                    <p><?php the_field('reading');?>
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Writing</h5>
                    <!-- Text -->
                    <p><?php the_field('writing');?>
                    </p>
                  </div>
                  <div class="col-lg-6">
                    <!-- Small Title -->
                    <h5 class="h5-md">Speaking</h5>
                    <!-- Text -->
                    <p><?php the_field('speaking');?>
                    </p>
                  </div>
                </div>
                <!-- Small Title -->
                <h5 class="h5-md mt-25">IELTS Eligibility:</h5>
                <!-- List -->
                <ul class="txt-list">
                  <?php the_field('eligibility-content');?>
                </ul>
              </div>
            </div> <!-- END ABOUT TEXT -->
            <!-- SIDEBAR -->
            <aside id="sidebar" class="col-lg-4">
              <!-- SIDEBAR CATEGORIES -->
             <!--  <div class="blog-categories sidebar-div mb-50"> -->
                <!-- Title -->
                <!-- <h5 class="h5-lg">Courses Categories: </h5> -->
                <!-- List -->
                <!-- <ul class="blog-category-list clearfix">
                  <li><a href="<?php echo site_url('/ielts'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> IELTS</a></li>
                  <li><a href="<?php echo site_url('/toefl'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> TOEFL</a></li>
                  <li><a href="<?php echo site_url('/pte'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> PTE</a></li>
                  <li><a href="<?php echo site_url('/sat'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> SAT</a></li>
                  <li><a href="<?php echo site_url('/gre'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> GRE</a></li>
                  <li><a href="<?php echo site_url('/gmat'); ?>" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> GMAT</a></li>
                </ul>
              </div> -->
              <!-- SIDEBAR COUNTRIES -->
             <!--  <div class="sidebar-countries sidebar-div mb-50"> -->
                <!-- Title -->
               <!--  <h5 class="h5-lg">Popular Countries: </h5> -->
                <!-- List -->
                <!-- <ul class="sidebar-country-list clearfix">
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-canada.jpg" alt="sidebar-image">Canada</a>
                  </li>
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-uk.jpg" alt="sidebar-image">United Kingdom</a>
                  </li>
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-usa.jpg" alt="sidebar-image">Norway</a>
                  </li>
                </ul>
              </div> -->
              <!-- REQUEST FORM -->
             <!--  <div class="">
                <div id="request-form" class="text-center mb-40">
                  <form name="requestForm" class="row request-form bg-lightgrey" novalidate="novalidate"> -->
                    <!-- Request Form Text -->
                    <!-- <div class="col-md-12">
                      <h5 class="h5-lg">Request Free Consultation</h5>
                    </div> -->
                    <!-- Request Form Input -->
                    <!-- <div id="input-name" class="col-md-12">
                      <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required="">
                    </div> -->
                    <!-- Request Form Input -->
                    <!-- <div id="input-email" class="col-md-12">
                      <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required="">
                    </div> -->
                    <!-- Request Form Input -->
                    <!-- <div id="input-phone" class="col-md-12">
                      <input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required="">
                    </div> -->
                    <!-- Request Form Select -->
                    <!-- <div id="input-visa" class="col-md-12 input-visa">
                      <select id="inlineFormCustomSelect1" name="visa" class="custom-select visa" required="">
                        <option value="">Select Visa</option>
                        <option>Student Visa</option>
                        <option>Travel visa</option>
                        <option>Working Visa</option>
                        <option>Business Visa</option>
                        <option>Visitor Visa</option>
                        <option>PR Visa</option>
                      </select>
                    </div> -->
                    <!-- Request Form Select -->
                    <!-- <div id="input-country" class="col-md-12 input-country">
                      <select id="inlineFormCustomSelect2" name="country" class="custom-select country" required="">
                        <option value="">Visa For</option>
                        <option>Australia</option>
                        <option>Canada</option>
                        <option>United Kingdom</option>
                        <option>USA</option>
                        <option>Singapore</option>
                        <option>Netherlands</option>
                      </select>
                    </div> -->
                    <!-- Request Form Button -->
                    <!-- <div class="col-md-12 form-btn">
                      <button type="submit" class="btn btn-primary tra-black-hover submit">Send Request</button>
                    </div> -->
                    <!-- Request Form Message -->
                    <!-- <div class="col-md-12 request-form-msg text-center">
                      <div class="sending-msg"><span class="loading"></span></div>
                    </div>
                  </form>
                </div>
              </div> --> <!-- END REQUEST FORM -->
              <?php if(is_active_sidebar('course-sidebar') ):?>
                <?php dynamic_sidebar('course-sidebar');?>
              <?php endif;?>
              <div id="requestform">
              <?php echo do_shortcode('[wpforms id="1115" title="false" description="false"]');?>
            </div>
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
              <p class="p-md"><?php the_field('course-content');?>
              </p>
            </div>
          </div> <!-- END SECTION TITLE -->
          <!-- SERVICE BOXES CAROUSEL -->
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme owl-loaded services-carousel owl-drag">
                <div class="owl-stage-outer">
                  <div class="owl-stage" style="transform: translate3d(-1387px, 0px, 0px); transition: all 0.9s ease 0s; width: 3885px;">

                   <?php 
                     $args = array(
                    'post_type' => 'courses',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                    );
                    $courses = new WP_Query($args);
                    while($courses->have_posts()) : $courses-> the_post();

                    ?>
                    <div class="owl-item active" style="width: 277.5px;">
                      <div class="sbox-9 sbox-9-color">
                        <!-- Image -->
                        <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>">
                        <!-- Text -->
                        <div class="sbox-9-txt" style="height: 351px;">
                          <!-- Title -->
                          <h5 class="h5-lg"><?php the_title();?></h5>
                          <!-- Text -->
                          <p class="p-sm" style="height: 220px; letter-spacing: 3;">
                           <?php echo wp_trim_words(get_the_content() , 35);?>
                          </p>
                          <!--Link -->
                          <a href="<?php the_field('read_more');?>">Read More <i class="fas fa-caret-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <?php endwhile; wp_reset_postdata();?>
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
                <h2 class="h2-wh"><?php the_field('banner-title');?></h2>
                <!-- Text -->
                <p><?php the_field('banner-content');?>
                </p>
                <a class="btn btn-arrow btn-md btn-primary" href="#"><span>Get Consultation <i class="fas fa-arrow-right"></i></span></a>
              </div>
            </div> <!-- END REQUEST FORM TEXT -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </div>
      <!-- FOOTER
				============================================= -->
      <?php endwhile;?>
    <?php get_footer(); ?>