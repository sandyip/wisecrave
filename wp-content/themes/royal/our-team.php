<?php get_header();
/* Template Name: Our Teams */ ?>
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
                <!-- <div class="float-sm">
                    <div class="fl-fl float-fb">
                        <i class="fas fa-download"></i>
                        <a href="" target="_blank"> Download our App!</a>
                    </div>
                </div> -->
                <!-- Floating download bar Ends -->
            <!-- ABOUT-2
                ============================================= -->
                <section id="about-2" class="wide-60 about-section division">
                    <div class="container">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="about-img pos-rel mb-30">
                              <div class="about-pair-img" data-tilt="" data-tilt-max="3" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                                <?php 
                                $id_image = get_field('team_image-1');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                            </div>
                            <div class="about-author mb-30">
                                <div class="author-coment white-bg">
                                  <p style="color: white;"><?php the_field('quotes');?></p>
                                  <div class="author author-02 d-flex align-items-center mt-25">
                                    <div class="author__thumb mr-30">
                                      <img src="https://edpartners.com.au/wp-content/themes/edupartners/assets/img/about/about4.png" alt="">
                                  </div>
                                  <div class="author__desig">
                                      <h6 class="name"><?php the_field('name');?></h6>
                                      <span class="designation"><?php the_field('position_and_company');?></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php the_field('detail_description');?>
                  
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="about-wrapper pl-70">
          <div class="section-title mb-35">
            <h2 class="mb-25"><?php the_title();?></h2>
        </div>
        <div class="mb-25">
            <?php the_content();?>
        </div>
        <div class="about-img pos-rel mt-75 mb-30">
                      <div class="about-pair-img" data-tilt="" data-tilt-max="3" style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                         <?php 
                                $id_image = get_field('detail_image');
                                $image = wp_get_attachment_image_src($id_image, 'home');
                                ?>
                                <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
                    </div>
                   <!--  <div class="about-author mb-30">
                        <div class="author-coment white-bg">
                          <p style="color: white;">"Coming Together is a Beginning, Staying Together is Progress and Working Together is Success” -Henry Ford"</p>
                          <div class="author author-02 d-flex align-items-center mt-25">
                            <div class="author__thumb mr-30">
                              <img src="https://edpartners.com.au/wp-content/themes/edupartners/assets/img/about/about4.png" alt="">
                          </div>
                          <div class="author__desig">
                              <h6 class="name">JOHN DOE</h6>
                              <span class="designation">CEO &amp; Founder</span>
                          </div>
                      </div>
                  </div>
              </div> -->
          </div>
    </div>
</div>
</div>
</div>
</section>
            <!-- CALL TO ACTION
                ============================================= -->
<section id="cta-4" class="bg-fixed cta-section division">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <!-- CALL TO ACTION TEXT -->
            <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">
              <div class="cta-txt">
                <!-- Title  -->
                <h3 class="h3-xl">Consultations for prospective immigrants</h3>
                <!-- Text -->
                <p class="p-lg">We provide professional consultation free of cost. Hurry and contact us to see the options available for you
                </p>
                <!-- Button  -->
                <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                  <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
            <!-- BRANDS
                ============================================= -->
                <div id="brands-2" class="wide-100 brands-section division">
                <div class="container">
                    <!-- TEXT -->
                    <div class="row">
                        <div class="col-md-12 text-center mb-10">
                            <h5 class="h5-md grey-color">Here are our esteemed associates in support of a better learning opportunity for all.</h5>
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
<?php get_footer();?>