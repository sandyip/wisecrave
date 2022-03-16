<?php get_header();
/* Template Name: Medical booking */ ?>

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
      <div class="cmt-page-title-row">
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
                  <span>Other Services /</span>
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
      <!-- ABOUT-9
        ============================================= -->
      <section id="about-9" class="wide-40 about-section division">
        <div class="container">
          <div class="row">
            <!-- ABOUT TEXT -->
            <div class="col-lg-12" style="box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; padding: 25px; border-radius: 15px;">
              <div class="col-lg-12 col-md-12">
                <div class="blog-details-desc">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="about-title" style="padding: 25px;">
                        <h2>Medical Booking</h2>
                        <?php the_content();?>
                        <br>

                       
                      </div>
                    </div>
                    <div class="col-lg-6" style="padding: 25px;">
                      <div class="about-us-img">
                       
                        <div class="about-img-2">
                          <img src="<?php echo the_post_thumbnail_url();?>" alt="About Us" width="350px">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END FAQs-1 -->
            </div> <!-- END ABOUT TEXT -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END ABOUT-9 -->



<?php get_footer();?>