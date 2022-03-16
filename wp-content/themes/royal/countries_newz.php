
<?php get_header();
/* Template Name: countries_newz */ ?>

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
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-class-room.jpg');width: 100%;background-size: cover;background-position: center;">
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
                  <span>New Zeeland/</span>
                  <span><?php the_title();?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <!--  <div class="sticky-social">
        <ul class="social">
          <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li class="insta"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </div> -->
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
              <div class="about-9-txt mb-40 pr-15">
                <!-- Image -->
                <div class="about-9-img mb-40 shadow">
                  <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="about-image" />
                </div>
                <!-- Title -->
                <div class="shadow br-15" style="padding: 25px;">
                  <h3 class="h3-md"><?php the_title();?></h3>
                  <!-- Text -->
                 <?php the_content();?>
                  <!-- List -->
                  <ul class="txt-list">
                    <li><span class="black">Full name:</span><?php the_field('full_name');?></li>
                    <li><span class="black">Population:</span> <?php the_field('population');?></li>
                    <li><span class="black">Capital:</span> <?php the_field('capital');?></li>
                    <li><span class="black">Largest city:</span> <?php the_field('largest_city');?></li>
                    <li><span class="black">Area:</span><?php the_field('area');?></li>
                    <li><span class="black">Major language:</span> <?php the_field('major_language');?></li>
                    <li><span class="black">Major religion:</span> <?php the_field('major_religion');?></li>
                  </ul>
                </div>
                <div class="shadow br-15 mt-20" style="padding: 25px;">
                  <h4 class="h4-xs mt-25"><?php the_field('why_study_title');?></h4>
                  <!-- Text -->
                  <?php the_field('why_study_content');?>
                  
                  <!-- Small Title -->
                  <h5 class="h5-md mt-25">Big Cities:</h5>
                  <?php the_field('big_cities');?>
                  <!-- Small Title -->
                  <h5 class="h5-md mt-25">Climate:</h5>
                  <!-- Text -->
                   <?php the_field('climate');?>
                 
                  <!-- Medium Title -->
                  <h4 class="h4-xs mt-25">Additional Information:</h4>
                  <!-- Text -->
                  <?php the_field('additional_information');?>
                  <!-- Small Title -->
                  <h5 class="h5-md mt-25">Institutes:</h5>
                  <div class="row">
                    <?php the_field('institutes');?>
                  </div>
                  <!-- Small Title -->
                  <h5 class="h5-md mt-25">Benefits:</h5>
                  <!-- Text -->
                 <?php the_field('benefits');?>
                </div>
              </div>
            </div>
            <!-- END ABOUT TEXT -->
            <!-- SIDEBAR -->
            <aside id="sidebar" class="col-lg-4">
              <!-- SIDEBAR CATEGORIES -->
              <!-- <div class="blog-categories sidebar-div mb-50"> -->
                <!-- Title -->
               <!--  <h5 class="h5-lg">Visa Categories: </h5> -->
                <!-- List -->
                <!-- <ul class="blog-category-list clearfix">
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Study Visa in Australia</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Skilled Woker Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Work Permit Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> PR and Migrate Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Business Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Spouse/Family Visas</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Tourist & Visitor Visas</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Working Holiday Visas</a></li>
                </ul>
              </div> -->
              <!-- SIDEBAR COUNTRIES -->
              <!-- <div class="sidebar-countries sidebar-div mb-50"> -->
                <!-- Title -->
                <!-- <h5 class="h5-lg">Popular Countries: </h5> -->
                <!-- List -->
                <!-- <ul class="sidebar-country-list clearfix">
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="images/sidebar-uk.jpg" alt="sidebar-image" />United Kingdom</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="images/sidebar-usa.jpg" alt="sidebar-image" />Norway</a>
                  </li>
                </ul>
              </div> -->
              <?php if(is_active_sidebar('service-sidebar') ):?>
                <?php dynamic_sidebar('service-sidebar');?>
              <?php endif;?>
            </aside> <!-- END SIDEBAR -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END ABOUT-9 -->
      <!-- HORIZONTAL GREY LINE -->
      <div class="section-divider">
        <div class="container">
          <div class="row">
            <div class="grey-border"></div>
          </div>
        </div>
      </div>
      <!-- SERVICES-9
        ============================================= -->
      <section id="services-9" class="wide-100 services-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <!-- Title -->
              <h2 class="h2-xs">Immigration Opportunities</h2>
              <!-- Text -->
              <p class="p-md">Request your appointment: Our trained counsellors will be in touch to discuss your study goal!
              </p>
            </div>
          </div> <!-- END SECTION TITLE -->
          <!-- SERVICE BOXES CAROUSEL -->
          <div class="row">
            <div class="col-lg-12">
              <div class="owl-carousel owl-theme owl-loaded services-carousel">
                 <?php 
                     $args = array(
                    'post_type' => 'abroads',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                    );
                    $abroads = new WP_Query($args);
                    while($abroads->have_posts()) : $abroads-> the_post();

                    ?>

                <!-- SERVICE BOX #1 -->
                <div class="sbox-9 sbox-9-color">
                  <!-- Image -->
                  <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="service-image" />
                  <!-- Text -->
                  <div class="sbox-9-txt">
                    <!-- Title -->
                    <h5 class="h5-lg"><?php the_title();?></h5>
                    <!-- Text -->
                    <?php the_content();?>
                    </p>
                    <!--Link -->
                    <a href="<?php the_permalink();?>">Read More <i class="fas fa-caret-right"></i></a>
                  </div>
                </div>

              <?php endwhile; wp_reset_postdata();?>
               
              </div>
            </div>
          </div> <!-- END SERVICE BOXES CAROUSEL -->
        </div> <!-- End container -->
      </section> <!-- END SERVICES-9 -->
      <div id="request-1" class="bg-image wide-60 request-form-section division">
        <div class="container">
          <div class="row d-flex align-items-center">
            <!-- REQUEST FORM TEXT -->
            <div class="col-md-6 col-xl-6">
              <div class="request-txt white-color pc-20 mb-40">
                <!-- Section ID -->
                <span class="section-id id-color">Free 24/7 Support</span>
                <!-- Title -->
                <h2 class="h2-wh">Get Free &amp; Quality Online Consultation</h2>
                <!-- Samll Title -->
                <h5 class="h5-md">Give us a CALL! We would love to hear from you and respond to your every query as soon as possible !</h5>
                <!-- Text -->
                <p>Wise Crave is a comprehensive answer to all your queries concerning studies abroad and migration. We are not only your professional consultant but also a trusted guide and a reliable friend.
                </p>
              </div>
            </div> <!-- END REQUEST FORM TEXT -->
            <!-- REQUEST FORM -->
            <div class="col-md-6 col-xl-5 offset-xl-1">
              <div id="request-form" class="text-center mb-40">
                <!-- <form name="requestForm" class="row request-form bg-lightgrey" novalidate="novalidate"> -->
                  <!-- Request Form Text -->
                 <div class="col-md-12">
                    <h5 class="h5-lg" style="color: white;">Request Free Consultation</h5>
                  </div>
                  <?php echo do_shortcode('[wpforms id="1115" title="false" description="false"]');?>
                  <!-- Request Form Input -->
                 
               <!--  </form> -->
              </div>
            </div> <!-- END REQUEST FORM -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </div>
    
  
  <?php get_footer(); ?>