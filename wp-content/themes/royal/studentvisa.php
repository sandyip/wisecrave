<?php /* Template Name: studentvisa */ ?>
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

    <!-- INNER PAGE WRAPPER
      ============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
        ============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/01/wcevs-group-of-international-students-talking-over-home.jpg');width: 100%;background-size: cover;background-position: center;">
        <div class="cmt-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="page-title-heading">
                  <h2 class="title"><?php the_title();?></h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home /</a>
                  </span>
                  <span>Visa Service /</span>
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
      <section id="about-2" class="mt-20 about-section division">
        <div class="container shadow br-15" style="padding: 25px;">
          <div class="row d-flex align-items-center" style="padding: 25px;">
            <!-- ABOUT TEXT -->
            <div class="col-lg-7 col-xl-6">
              <div class="about-4-txt mb-40">
                <!-- Section ID -->
                <span class="section-id id-color"><?php the_title();?></span>
                <!-- Title -->
                <?php the_content();?>
               <div class="box-list">
                </div>
                
              </div>
            </div> <!-- END ABOUT TEXT -->
            <!-- SERVICES IMAGE -->
            <div class="col-lg-5 col-xl-5 offset-xl-1">
              <div class="about-4-img text-center">
                <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="about-image">
              </div>
            </div>
            <br>
            <div class="col-lg-6 col-xl-6">
              <div class="about-4-txt mb-40">
                <!-- Title -->
                <!-- <p><?php the_field('visa_contents');?></p> -->
                <!-- Text #1 -->
                <div class="box-list">
                  
                </div>
               
            </div>
          </div>
        </div>
      </section>
      <section id="cta-3" class="bg-darkblue cta-section division">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <!-- CALL TO ACTION TEXT -->
            <div class="col-lg-12">
              <div class="cta-txt text-center">
                <h4 class="h4-xs txt-400">Need immigration &amp; visa consultation? <a href="mailto:yourdomain@mail.com">Send a request</a> for free consultation</h4>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
      <!-- FOOTER
        ============================================= -->
 <?php get_footer(); ?>