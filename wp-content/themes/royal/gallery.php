<?php get_header();
/*Template Name: Gallery Page*/
?>

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
      <div class="cmt-page-title-row">
        <div class="cmt-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="page-title-heading">
                  <h2 class="title">About Us</h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/');?>">Home &nbsp;/</a>
                  </span>
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
      <!-- ABOUT-2
        ============================================= -->
<section class="container wide-60 division">
  <h1 class="my-4 text-center text-lg-left">Image Gallery</h1>
  <div class="row gallery">
    <?php 
    $args = array(
      'post_type'     => 'gallerys',
      'posts_per_page'  => 9,
      'orderby'         => 'date',
      'order'           => ''
    );
    $gallerys = new WP_Query($args);
    while($gallerys-> have_posts()) : $gallerys -> the_post();
    ?>

    <div class="col-lg-4 col-md-4 col-xs-6 thumb">
      <a href="<?php echo the_post_thumbnail_url();?>">
        <figure><img class="img-fluid img-thumbnail" src="<?php echo the_post_thumbnail_url();?>" title="<?php the_title();?>" alt="Random Image"></figure>
      </a>
    </div>

    <?php endwhile; wp_reset_postdata();?>

  </div>
</section>

      <!-- CALL TO ACTION
        ============================================= -->
      <section id="cta-1" class="bg-scroll bg-image cta-section division">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <!-- CALL TO ACTION TEXT -->
            <div class="col-lg-8 col-xl-8">
              <div class="cta-txt">
                <!-- Title  -->
                <h3 class="h3-md txt-400">Free Immigration &amp; Visa Consultation</h3>
                <!-- Text -->
                <p class="p-mds">If you are in doubt and confused to choose your destination for higher education based on your socio-economic background, and wants to balance between the course and quality, call us!
                </p>
              </div>
            </div>
            <!-- CALL TO ACTION BUTTON -->
            <div class="col-lg-4 col-xl-3 offset-xl-1">
              <div class="cta-btn text-center">
                <!-- Phone Number -->
                <p class="p-mds">Call : <span>+977 9800000000</span></p>
                <!-- Button  -->
                <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                  <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END CALL TO ACTION -->

      <!-- BRANDS
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

    <?php endwhile;?>

<?php get_footer();?>