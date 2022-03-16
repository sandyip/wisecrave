<?php /* Template Name: csr */ ?>
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
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-covid-security.jpg');width: 100%;background-size: cover;background-position: center;">
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
                  <span>About Us /</span>
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
      <section id="tabs-2" class="wide-60 tabs-section division">
        <div class="container shadow br-15" style="padding: 25px;">
          <div class="row">
            <!-- TABS NAVIGATION -->
            <div class="col-md-12">
              <div class="tabs-nav clearfix">
                <ul class="tabs-2 primary-tabs">
                  <!-- TAB-1 LINK -->
                  <li class="tab-link displayed" data-tab="tab-11">
                    <span>Corporate Social Responsibility</span>
                  </li>
                  <!-- TAB-2 LINK -->
                  <li class="tab-link" data-tab="tab-12">
                    <span>Privacy Policy</span>
                  </li>
                  <!-- TAB-3 LINK -->
                  <li class="tab-link" data-tab="tab-13">
                    <span>Terms & Conditions</span>
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
                    <div class="col-md-6">
                      <div class="tab-img text-center mb-40">
                        <?php 
                        $id_image = get_field('top_image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                      </div>
                    </div>
                    <!-- TAB-1 TEXT -->
                    <div class="col-md-6">
                      <div class="txt-block pc-20 mb-40" class="p-25">
                        <span class="section-id id-color">We love our clients
                        </span>
                        <h3 class="h3-lg"><?php the_field('csr_title');?>
                        </h3>
                        <?php the_field('csr_content');?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8" style="padding: 60px;">
                        <h4><?php the_field('csr_bottom_title');?></h4>
                        <?php the_field('csr_bottom_content');?>
                      </div>

                      <div class="col-md-4" class="p-25">
                        <?php 
                        $id_image = get_field('csr_bottom_image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                      </div>
                    </div>
                  
                  </div>
                </div> <!-- END TAB-2 CONTENT -->
                <!-- TAB-2 CONTENT -->
                <div id="tab-12" class="tab-content">
                  <div class="row d-flex align-items-center">
                    <!-- TAB-2 IMAGE -->
                    <div class="col-md-6">
                      <div class="tab-img text-center mb-40">
                        <?php 
                        $id_image = get_field('privacy_image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                      </div>
                    </div>
                    <!-- TAB-2 TEXT -->
                    <div class="col-md-6">
                      <div class="txt-block pc-20 mb-40" class="p-25">
                        <span class="section-id id-color">PRIVACY POLICY
                        </span>
                        <h3 class="h3-lg"><?php the_field('privacy_title');?>
                        </h3>
                        <?php the_field('privacy_content');?>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8" style="padding: 60px;">
                        <h4><?php the_field('privacy_bottom_title');?></h4>
                        <?php the_field('privacy_bottom_content');?>
                      </div>
                      <div class="col-md-4" class="p-25">
                        <?php 
                        $id_image = get_field('privacy_bottom_image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                      </div>
                    </div>
                   

                  </div>
                </div> <!-- END TAB-2 CONTENT -->
                <!-- TAB-3 CONTENT -->
                <div id="tab-13" class="tab-content">
                  <div class="row d-flex align-items-center">
                    <!-- TAB-3 TEXT -->
                    <div class="col-md-12">
                      <div class="article" id="content" style="padding: 60px;">
                        <div id="placeholders">
                          <h1><?php the_field('terms_title');?> </h1>
                         
                          <?php the_field('terms_content');?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> <!-- END TAB-3 CONTENT -->
              </div>
            </div> <!-- END TABS CONTENT -->
          </div>
        </div>
      </section>
      <!-- FOOTER
        ============================================= -->
   <?php get_footer(); ?>