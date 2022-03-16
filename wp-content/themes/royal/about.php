<?php /* Template Name: about */ ?>
<?php get_header(); ?>
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


    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
        ============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/01/post-4-img.jpg');
            width: 100%;background-size: cover;background-position: center;">
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
                  <span><?php the_title();?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <!-- Floating download bar Starts -->
     <!--  <div class="float-sm">
        <div class="fl-fl float-fb">
          <i class="fas fa-download"></i>
          <a href="" target="_blank"> Download our App!</a>
        </div>
      </div> -->
      <!-- Floating download bar Ends -->
      <!-- ABOUT-2
        ============================================= -->
      <section id="about-2" class="wide-60 about-section division">
        <div class="container shadow br-15" style="padding: 25px;">
          <div class="row d-flex align-items-center">
            <!-- ABOUT IMAGE -->
            <div class="col-md-6">
              <div class="about-img text-center mb-40">
                <!-- Image -->
                <?php 
                  $id_image = get_field('about-image');
                  $image = wp_get_attachment_image_src($id_image, 'about');
                  ?>
                  <img class="img-fluid" src="<?php echo $image[0]; ?>" alt="image">
              
                <!-- Video Link -->
                <!-- <div class="video-square">
                  <div class="video-link icon-lg primary-color">

                    <?php 
                    $link = get_field('about-video-link');
                    if($link) : ?>  
                    <a class="video-popup2" href="<?php echo esc_url($link);?>">
                    <?php endif;?>

                      <span class="flaticon-159-play-button"></span>
                    </a>
                  </div>
                </div> -->
              </div>
            </div>
            <!-- ABOUT TEXT -->
            <div class="col-md-6">
              <div class="about-2-txt pc-20 mb-40">
                <!-- Section ID -->
                <span class="section-id noto-font-700 id-color"><?php the_field('about-title');?></span>
                <!-- Title -->
                <!-- INFO BOX #1 -->
                <div class="box-list">
                  <p style="text-align: justify;"><?php the_field('about-content');?>
                  </p>
                </div>
              </div>
            </div> <!-- END ABOUT TEXT  -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END ABOUT-2 -->
      <!-- SERVICES-6
        ============================================= -->
      <section id="services-6" class="bg-lightgrey wide-100 services-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <!-- Title -->
              <h2 class="h2-xs"><?php the_field('service-title');?></h2>
              <!-- Text -->
              <p class="p-md">  <?php the_field('service-content');?>
              </p>
            </div>
          </div>
          <div class="row d-flex align-items-center shadow br-15">
            <!-- SERVICE BOX #1 -->
            <div id="sb-01" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-1-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-1-content');?></p>
                <!--Link -->
                
              </div>
            </div>
            <!-- SERVICE BOX #2 -->
            <div id="sb-02" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-2-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-2-content');?></p>
                <!--Link -->
                
              </div>
            </div>
            <!-- SERVICE BOX #3 -->
            <div id="sb-03" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-3-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-3-content');?></p>
                <!--Link -->
                
              </div>
            </div>
            <!-- SERVICE BOX #4 -->
            <div id="sb-04" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-4-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-4-content');?></p>
                <!--Link -->
                
              </div>
            </div>
            <!-- SERVICE BOX #5 -->
            <div id="sb-05" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-5-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-5-content');?></p>
                <!--Link -->
                
              </div>
            </div>
            <!-- SERVICE BOX #6 -->
            <div id="sb-06" class="col-md-6 col-lg-4 sb-box">
              <div class="sbox-6">
                <!-- Text -->
                <h5 class="h5-lg darkblue-color"><?php the_field('service-card-6-title');?></h5>
                <p class="p-sm"><?php the_field('service-card-6-content');?></p>
                <!--Link -->
                
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END SERVICES- -->
      <!-- CALL TO ACTION
        ============================================= -->
      <section id="cta-1" class="bg-scroll bg-image cta-section division">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <!-- CALL TO ACTION TEXT -->
            <div class="col-lg-8 col-xl-8">
              <div class="cta-txt">
                <!-- Title  -->
                <h3 class="h3-md txt-400"><?php the_field('banner-title');?></h3>
                <!-- Text -->
                <p class="p-mds"><?php the_field('banner-content');?>
                </p>
              </div>
            </div>
            <!-- CALL TO ACTION BUTTON -->
            <div class="col-lg-4 col-xl-3 offset-xl-1">
              <div class="cta-btn text-center">
                <!-- Phone Number -->
                <p class="p-mds">Call : <span><?php the_field('banner-phone');?></span></p>
                <!-- Button  -->
                <a href="tel:014106567" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                  <span><?php the_field('banner-button');?> <i class="fas fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END CALL TO ACTION -->
      <!-- TESTIMONIALS
        ============================================= -->
      <section id="reviews-1" class="bg-tra-city bg-lightgrey wide-100 reviews-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <!-- Title -->
              <h2 class="h2-xs"><?php the_field('client-title');?></h2>
              <!-- Text -->
              <p class="p-md"><?php the_field('client-content');?>
              </p>
            </div>
          </div> <!-- END SECTION TITLE -->
          <!-- TESTIMONIALS CONTENT -->
          <div class="row">
            <div class="col-md-12">
              <div class="owl-carousel owl-theme reviews-holder">
                 <?php 
                     $args = array(
                    'post_type' => 'clients',
                    'posts_per_page' => -1,
                    'orderby' => 'title',
                    'order' => 'ASC'
                    );
                    $clients = new WP_Query($args);
                    while($clients->have_posts()) : $clients-> the_post();

                    ?>
                <!-- TESTIMONIAL #1 -->
                <div class="review-1">
                  <!-- Testimonial Author -->
                  <div class="author-data clearfix">
                    <!-- Author Avatar -->
                    <div class="testimonial-avatar">
                      <img src="<?php echo the_post_thumbnail_url();?>" alt="testimonial-avatar">
                    </div>
                    <!-- Author Data -->
                    <div class="review-author">
                      <h5 class="h5-sm"><?php the_title();?></h5>
                    </div>
                  </div> <!-- End Testimonial Author -->
                  <!-- Testimonial Text -->
                  <p><?php the_content();?>
                  </p>
                </div>
               <?php endwhile; wp_reset_postdata();?>
              </div>
            </div>
          </div> <!-- END TESTIMONIALS CONTENT -->
        </div> <!-- End container -->
      </section> <!-- END TESTIMONIALS- -->
      <!-- BRANDS
        ============================================= -->

        <!--=======================Events Part Start =================-->
         <section id="services-6" class="bg-lightgrey wide-100 services-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <!-- Title -->
              <h2 class="h2-xs">Our Events</h2>
              <!-- Text -->
              <p class="p-md">  Wise Crave Education and Visa Services Consultancy provides you with a wide range of services that you need in every stage
              </p>
            </div>
          </div>

           <div class="timeline-event-wrapper">

     <?php 
    $args = array(
      'post_type'  => 'events',
      'posts_per_page'   => 2,
      'orderby'         => 'date',
      'order'          => ''
    );
    $events = new WP_Query($args);
    while($events-> have_posts()) : $events -> the_post();
    ?>
      <div class="timeline-event">
        <div class="timeline-event-img">
          <a href="" class="w-fancybox">
            <img src="<?php echo the_post_thumbnail_url();?>" title="Event 1" alt="Event 1">
          </a>
        </div>
        <div class="timeline-event-date"><span class="black"><?php the_field('calendar');?></span>Category</div>
        <div class="timeline-event-content">
          <h2><a href="https://wcevs.com.np/events/ielts-preparation/" target="_blank" title="Event 1"><?php the_title();?></a></h2>
          <?php echo wp_trim_words(get_the_content() , 40);?>
          <p class="timeline-content-ensemble"><?php the_field('status');?></p>
        </div>
      </div>

     <?php endwhile; wp_reset_postdata();?>
     <a href="<?php echo site_url('events');?>" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                  <span>View All <i class="fas fa-arrow-right"></i></span>
                </a>
    </div><!-- end timeline-event-wrapper  -->
         
        </div> <!-- End container -->
      </section> <!-- END SERVICES- -->
        <!--=======================Events Part End ===================-->
       <div id="brands-2" class="wide-100 brands-section division">
                <div class="container">
                    <!-- TEXT -->
                    <div class="row">
                        <div class="col-md-12 text-center mb-10">
                            <h5 class="h5-md grey-color">We partner with companies of all sizes, all around the world</h5>
                        </div>
                    </div>
                    <!-- BRANDS HOLDER -->
                    <div class="row brands-holder shadow br-15">
                      <?php 
                         $args = array(
                        'post_type' => 'brands',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC'
                        );
                        $brands = new WP_Query($args);
                        while($brands->have_posts()) : $brands-> the_post();

                        ?>
                        <!-- BRAND LOGO IMAGE -->
                        <div id="bl-01" class="col-sm-6 col-md-3 b-bottom b-right">
                            <div class="brand-logo">
                                <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="brand-logo" />
                            </div>
                        </div>
                        <?php endwhile; wp_reset_postdata();?>
                    </div> <!-- END BRANDS HOLDER -->
                </div> <!-- End container -->
            </div>
      <!-- FOOTER
        ============================================= -->
<?php get_footer(); ?>