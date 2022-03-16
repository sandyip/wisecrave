<?php get_header();
/* Template Name: home */ ?>
<!-- <div id="exampleModalCenter" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block;" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="js-close" style="background-color: #edeef3;opacity: 1;text-align: right;">
        <span aria-hidden="true" style="color: black !important;">×</span>
      </button>
      <img src="<?php echo get_theme_mod('royal_modal_img_handle');?>" class="img-fluid" alt="image" style="width: 33%; height: 22%; margin-left: 250px;">

      <div class="top-left" style="margin-left: 50px;margin-right: 50px;"><?php echo get_theme_mod('royal_modal_title_handle');?> <br>
      <a href="tel:<?php echo get_theme_mod('royal_modal_phone_number_handle');?>" ><?php echo get_theme_mod('royal_modal_phone_number_handle');?></a> or 

        Email us at <a href="mailto:<?php echo get_theme_mod('royal_modal_email_add_handle');?>">
          <?php echo get_theme_mod('royal_modal_email_add_handle');?></a>
          <br><br>
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



<div class="slider_area sld-rev">
<!--  <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">-->
<!--    <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">-->
      
      
      
      
      
<!--      <video width="100%" height="auto" autoplay loop>-->
<!--  <source src="<?php bloginfo('template_url'); ?>/images/wise crave cover video.mp4" type="video/mp4" />-->
<!--  <source src="movie.ogg" type="video/ogg" />-->
<!--</video>-->
      
      
      
<!--          <div class="tp-bannertimer" style="height: 7px; background-color: rgba(255, 255, 255, 0.25);"></div>-->
<!--        </div>-->
<!--      </div>-->
  <video autoplay muted loop playsinline width="100%">
  <source src="<?php echo get_template_directory_uri(); ?>/images/video.mp4" type="video/mp4">
</video>
    </div>
    <!-- END HERO-7 -->
    
    <!-- Floating download bar Starts -->
    <!-- <div class="float-sm">
      <div class="fl-fl float-fb">
        <i class="fas fa-download"></i>
        <a href="" target="_blank"> Download our App!</a>
      </div>
    </div> -->
    <!-- Floating download bar Ends -->
    <!-- SERVICES-5
      ============================================= -->
      <section id="services-5" class="bg-tra-map bg-lightgrey services-section division">
        <div class="container">
          <div class="row d-flex align-items-center">
            <!-- SERVICES TEXT -->
            <div class="col-lg-5">
              <div class="services-5-txt">
                <span class="section-id id-color">Quality Strategy</span>
                <h3 class="h3-lg"><?php the_field('title');?></h3>
                <p> <?php the_field('content');?>
              </p>
            </div>
          </div>
          <!-- SERVICE BOXES -->
          <div class="col-lg-7">
            <div class="row">
              <!-- SERVICE BOX #1 -->
              <div class="col-md-6">
                <div class="sbox-5 icon-xs">
                  <a href="">
                    <!-- Icon -->
                    <div class="sbox-5-icon primary-color"><span class="flaticon-431-bank"></span></div>
                    <div class="sbox-5-txt">
                      <h5 class="h5-md">Education Visa</h5>
                      <p class="p-sm" style="height: 88px;"><?php the_field('education_visa');?></p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- SERVICE BOX #2 -->
              <div class="col-md-6">
                <div class="sbox-5 icon-xs">
                  <a href="">
                    <!-- Icon -->
                    <div class="sbox-5-icon primary-color"><span class="flaticon-033-user-2"></span></div>
                    <div class="sbox-5-txt">
                      <h5 class="h5-md">Residential Visa</h5>
                      <p class="p-sm" style="height: 88px;"><?php the_field('working_visa');?></p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- SERVICE BOX #3 -->
              <div class="col-md-6">
                <div class="sbox-5 icon-xs">
                  <a href="">
                    <!-- Icon -->
                    <div class="sbox-5-icon primary-color"><span class="flaticon-397-briefcase"></span> </div>
                    <div class="sbox-5-txt">
                      <h5 class="h5-md">Test Preparation</h5>
                      <p class="p-sm" style="height: 88px;"><?php the_field('business_visa');?></p>
                    </div>
                  </a>
                </div>
              </div>
              <!-- SERVICE BOX #4 -->
              <div class="col-md-6">
                <div class="sbox-5 icon-xs">
                  <a href="">
                    <!-- Icon -->
                    <div class="sbox-5-icon primary-color"><span class="flaticon-285-internet-2"></span></div>
                    <div class="sbox-5-txt">
                      <h5 class="h5-md">Travel Visa</h5>
                      <p class="p-sm" style="height: 88px;"><?php the_field('travel_visa');?></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div> <!-- END SERVICE BOXES -->
        </div>
      </div>
    </section> <!-- END SERVICES-5 -->
    <!-- ABOUT-2
      ============================================= -->
      <section id="about-2" class="wide-60 about-section division">
        <div class="container">
          <div class="row d-flex align-items-center">
            <!-- ABOUT IMAGE -->
            <div class="col-md-6">
              <div class="about-img text-center mb-40">
                <?php 
                $id_image = get_field('about-image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
              </div>
            </div>
            <!-- ABOUT TEXT -->
            <div class="col-md-6">
              <div class="about-2-txt pc-20 mb-40">
                <span class="section-id id-color">About Agency</span>
                <h3 class="h3-lg"><?php the_field('about-title');?></h3>
                <!-- INFO BOX #1 -->
                <div class="box-list">
                  <p><?php the_field('about-content');?></p>
                </div>
              </div>
            </div> <!-- END ABOUT TEXT  -->
          </div>
        </div>
      </section> <!-- END ABOUT-2 -->
    <!-- ABOUT-8
      ============================================= -->
      <section id="about-8" class="about-section division">
        <div class="container">
          <div class="row">
            <!-- ABOUT TEXT -->
            <div class="col-md-7 col-lg-6">
              <div class="about-8-txt bg-darkblue white-color">
                <span class="section-id id-color">Planning For The Future</span>
                <h3 class="h3-lg"><?php the_field('planning-title');?></h3>
                <p> <?php the_field('planning-content');?>
              </p>
              <a href="#" class="btn btn-md btn-tra-white primary-hover btn-arrow">
                <span>Discover More <i class="fas fa-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- END ABOUT-->
    <!-- TABS-2
      ============================================= -->
      <section id="tabs-2" class="wide-60 tabs-section division">
        <div class="container">
          <div class="row">
            <!-- TABS NAVIGATION -->
            <div class="col-md-12">
              <div class="tabs-nav clearfix">
                <ul class="tabs-2 primary-tabs">
                  <!-- TAB-1 LINK -->
                  <li class="tab-link displayed" data-tab="tab-11">
                    <span>Getting a Visa</span>
                  </li>
                  <!-- TAB-2 LINK -->
                  <li class="tab-link" data-tab="tab-12">
                    <span>We Love Our Clients</span>
                  </li>
                  <!-- TAB-3 LINK -->
                  <li class="tab-link" data-tab="tab-13">
                    <span>Professional Advisors</span>
                  </li>
                </ul>
              </div>
            </div> <!-- END TABS NAVIGATION -->
            <!-- TABS CONTENT -->
            <div class="col-md-12">
              <div class="tabs-content">
                <!-- TAB-1 CONTENT -->
                <div id="tab-11" class="tab-content displayed">
                  <div class="row d-flex align-items-center">
                    <!-- TAB-1 IMAGE -->
                    <div class="col-md-6 mb-40">
                      <div class="tab-img text-center">
                        <?php 
                        $id_image = get_field('visa-image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                      </div>
                    </div>
                    <!-- TAB-1 TEXT -->
                    <div class="col-md-6">
                      <div class="txt-block pc-20 mb-40">
                        <h3 class="h3-lg"><?php the_field('visa-title');?></h3>
                        <p><?php the_field('visa-content');?>
                      </p>
                      
                    </div>
                  </div>
                </div>
              </div> <!-- END TAB-1 CONTENT -->
              <!-- TAB-2 CONTENT -->
              <div id="tab-12" class="tab-content">
                <div class="row d-flex align-items-center">
                  <!-- TAB-2 IMAGE -->
                  <div class="col-md-6">
                    <div class="tab-img text-center mb-40">
                      <?php 
                      $id_image = get_field('client-image');
                      $image = wp_get_attachment_image_src($id_image, 'home');
                      ?>
                      <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                    </div>
                  </div>
                  <!-- TAB-2 TEXT -->
                  <div class="col-md-6">
                    <div class="txt-block pc-20 mb-40">
                      <h3 class="h3-lg"><?php the_field('client-title');?></h3>
                      <p><?php the_field('client-content');?>
                    </p>
                    <a href="#" class="btn btn-tra-grey primary-hover btn-arrow">
                      <span>Discover More <i class="fas fa-arrow-right"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div> <!-- END TAB-2 CONTENT -->
            <!-- TAB-3 CONTENT -->
            <div id="tab-13" class="tab-content">
              <div class="row d-flex align-items-center">
                <!-- TAB-3 IMAGE -->
                <div class="col-md-6">
                  <div class="tab-img text-center mb-40">
                    <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/image-02.png" alt="tab-image" />
                  </div>
                </div>
                <!-- TAB-3 TEXT -->
                <div class="col-md-6">
                  <div class="txt-block pc-20 mb-40">
                    <h3 class="h3-lg"><?php the_field('advisor-title');?></h3>
                    <div class="box-list">
                      <?php the_field('advisor-content');?>
                    </div>

                    <!-- Text Box #3 -->
                  </div>
                </div>
              </div>
            </div> <!-- END TAB-3 CONTENT -->
          </div>
        </div> <!-- END TABS CONTENT -->
      </div>
    </div>
  </section> <!-- END TABS-2 -->
  <!-- HORIZONTAL GREY LINE -->
  <div class="section-divider">
    <div class="container">
      <div class="row">
        <div class="grey-border"></div>
      </div>
    </div>
  </div>
    <!-- COUNTRIES-3
      ============================================= -->
      <section id="countries-3" class="wide-80 countries-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <h2 class="h2-xs">Free Immigration & Visa Consultation</h2>
              <p class="p-md"><?php the_field('immigration-content');?>
            </p>
          </div>
        </div> <!-- END SECTION TITLE -->
        <div class="row">
          <!-- COUNTRY BOX -->
          <div class="col-sm-6 col-lg-3">
            <div class="cbox-3">
              <a href="">
                <div class="hover-overlay">
                  <?php 
                  $id_image = get_field('country-1-image');
                  $image = wp_get_attachment_image_src($id_image, 'home');
                  ?>
                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                  <div class="item-overlay"></div>
                  <div class="country-name white-color">
                    <h5 class="h5-md"><?php the_field('country-1');?></h5>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <!-- COUNTRY BOX -->
          <div class="col-sm-6 col-lg-3">
            <div class="cbox-3">
              <a href="">
                <div class="hover-overlay">
                 <?php 
                 $id_image = get_field('country-2-image');
                 $image = wp_get_attachment_image_src($id_image, 'home');
                 ?>
                 <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                 <div class="item-overlay"></div>
                 <div class="country-name white-color">
                  <h5 class="h5-md"><?php the_field('country-2');?></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- COUNTRY BOX -->
        <div class="col-sm-6 col-lg-3">
          <div class="cbox-3">
            <a href="">
              <div class="hover-overlay">
                <?php 
                $id_image = get_field('country-3-image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                <div class="item-overlay"></div>
                <div class="country-name white-color">
                  <h5 class="h5-md"><?php the_field('country-3');?></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
        <!-- COUNTRY BOX -->
        <div class="col-sm-6 col-lg-3">
          <div class="cbox-3">
            <a href="">
              <div class="hover-overlay">
                <?php 
                $id_image = get_field('country-4-image');
                $image = wp_get_attachment_image_src($id_image, 'home');
                ?>
                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                <div class="item-overlay"></div>
                <div class="country-name white-color">
                  <h5 class="h5-md"><?php the_field('country-4');?></h5>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END COUNTRIES-3 -->
    <!-- STATISTIC-3
      ============================================= -->
      <div id="statistic-3" class="bg-image bg-scroll wide-60 statistic-section division">
        <div class="container white-color">
          <!-- STATISTIC 3 TITLE -->
          <div class="row">
            <div class="col-md-12">
              <div class="statistic-3-title primary-border">
                <h3 class="h3-lg">Thousands Of People Choose Our Services</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="row">
                <!-- STATISTIC BLOCK #1 -->
                <div class="col-sm-6 col-md-3">
                  <div class="statistic-block icon-sm">
                    <h5 class="yellow-color"><span class="count-element"><?php the_field('happy_students');?></span>+</h5>
                    <p>Happy Students</p>
                  </div>
                </div>
                <!-- STATISTIC BLOCK #2 -->
                <div class="col-sm-6 col-md-3">
                  <div class="statistic-block icon-sm">
                    <h5 class="yellow-color"><span class="count-element"><?php the_field('university_partners');?></span></h5>
                    <p>University Partners</p>
                  </div>
                </div>
                <!-- STATISTIC BLOCK #3 -->
                <div class="col-sm-6 col-md-3">
                  <div class="statistic-block icon-sm">
                    <h5 class="yellow-color"><span class="count-element"><?php the_field('countries');?></span>+</h5>
                    <p>Countries</p>
                  </div>
                </div>
                <!-- STATISTIC BLOCK #4 -->
                <div class="col-sm-6 col-md-3">
                  <div class="statistic-block icon-sm">
                    <h5 class="yellow-color"><span class="count-element"><?php the_field('immigration');?></span></h5>
                    <p>Immigrations</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- END STATISTIC-3 -->
    <!-- ABOUT-1
      ============================================= -->
      <section id="about-1" class="wide-60 about-section division">
        <div class="container">
          <div class="row d-flex align-items-center">
            <!-- ABOUT TEXT -->
            <div class="col-md-6">
              <div class="about-1-txt pc-20 mb-40">
                <h2 class="h2-xs">Why Work With Us?</h2>
                <p><?php the_field('work-content');?>
              </p>

            </div>
          </div> <!-- END ABOUT TEXT  -->
          <!-- ABOUT IMAGE -->
          <div class="col-md-6">
            <div class="about-img text-center mb-40">
             <?php 
             $id_image = get_field('work-image');
             $image = wp_get_attachment_image_src($id_image, 'home');
             ?>
             <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
             <div class="video-square">
              <div class="video-link icon-lg primary-color">
                <a class="video-popup2" href="">
                  <span class="flaticon-159-play-button"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END ABOUT-1 -->


  <!-- HORIZONTAL GREY LINE -->
  <div class="section-divider">
    <div class="container">
      <div class="row">
        <div class="grey-border"></div>
      </div>
    </div>
  </div>
    <!-- BLOG-1
      ============================================= -->
      <section id="blog-1" class="wide-60 blog-section division">
        <div class="container">
          <!-- SECTION TITLE -->
          <div class="row">
            <div class="col-md-12 section-title center">
              <h2 class="h2-xs">Our Stories & Latest News</h2>
              <p class="p-md">Stay updated about the latest news and events from WCEVS.
              </p>
            </div>
          </div> <!-- END SECTION TITLE -->
          <!-- BLOG POSTS HOLDER -->
          <div class="row">
            <?php 
            $args = array(
              'post_type' => 'post',
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => ''
            );
            $posts = new WP_Query($args);
            while($posts->have_posts()) : $posts-> the_post();

              ?>
              <!-- BLOG POST #1 -->
              <div class="col-md-6 col-lg-4">
                <div class="blog-post">
                  <!-- BLOG POST IMAGE -->
                  <div class="blog-post-img mb-30">
                    <img class="img-fluid" style="max-height: 100%; height: 188px;" src="<?php echo the_post_thumbnail_url();?>" alt="blog-post-image" />
                  </div>
                  <!-- BLOG POST TEXT -->
                  <div class="blog-post-txt">
                    <!-- Post Meta -->
                    <p class="post-meta"><a href="<?php the_permalink();?>" class="grey-color">Study in Australia</a> - <?php echo get_estimated_reading_time( get_the_content() ); ?> Reading</p>
                    <h5 class="h5-lg" style="text-align: justify;"><a href="<?php the_permalink();?>" class="darkblue-color">
                      <?php echo wp_trim_words(get_the_title() ,9 );?></a>
                    </h5>
                    <p style="text-align: justify;"><?php echo wp_trim_words(get_the_content() , 30);?>
                  </p>
                  <!-- Post Data -->
                  <p class="post-data">By <a href="<?php the_permalink();?>"><?php the_author();?></a> - <?php the_time();?></p>

                </div>
              </div>
            </div> <!-- END  BLOG POST #1 -->
          <?php endwhile; wp_reset_postdata();?>

        </div> <!-- END BLOG POSTS HOLDER -->
      </div>
    </section> <!-- END BLOG -->
    
    <section id="cta-1" data-scroll_id="cta-1" class="bg-image bg-scroll cta-section division white-color">
      <div class="container white-color">
       <div class="row d-flex align-items-center">


        <!-- CALL TO ACTION TEXT -->
        <div class="col-lg-8 col-xl-8">						

          <!-- Title  -->
          <div class="cta-txt">
           <h3 class="h3-md txt-400">Free Immigration &amp; Visa Consultation</h3><!-- Title -->
           <p class="p-md" style="color: white !important;">We are a fully equipped team with professionally certified counsellors for student career counselling.</p><!-- Text -->
         </div>

       </div>
       <div class="col-lg-4 col-xl-3 offset-xl-1">
        <div class="cta-btn text-center">
         <p class="p-md"> <a href="tel:02 8074 3892"><i class="fas fa-phone"></i>02 8074 3892</a></p>
         <a class="btn btn-arrow btn-md btn-primary" href="#"><span>Get Consultation <i class="fas fa-arrow-right"></i></span></a><!-- Button  -->
       </div>
     </div>



   </div>	  <!-- End row -->
 </div>	   <!-- End container -->
</section>
<!-- HORIZONTAL GREY LINE -->
<div class="section-divider">
  <div class="container">
    <div class="row">
      <div class="grey-border"></div>
    </div>
  </div>
</div>
    <!-- BRANDS-2
      ============================================= -->
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