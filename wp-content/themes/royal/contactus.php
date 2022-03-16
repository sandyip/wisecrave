<?php /* Template Name: contactus */ ?>
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
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-contact-banner.jpg');
            width: 100%;background-size: cover;background-position: center;">
            <div class="cmt-page-title-row-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title">
                                    <?php the_title();?>
                                </h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home &nbsp;/</a>
                                </span>
                                <span>
                                    <?php the_title();?></span>
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
        <!-- CONTACTS-4
        ============================================= -->
        <style type="text/css">
        .tab-content {
            display: block;
        }

        .contact-box-icon {
    background-color: #1C2439 !important;
    border: 16px solid #fbfbfb !important;
        </style>
        <section id="contacts-4" class="bg-lightgrey bg-tra-city wide-100 contacts-section division">
            <div class="container shadow br-15" style="padding: 25px;">
                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="col-md-12 section-title center">
                        <!-- Title -->
                        <h2 class="h2-xs">Have Questions? Get in Touch</h2>
                        <!-- Text -->
                        <p class="p-md">Give us a CALL! We would love to hear from you and respond to your every query as soon as possible !
                        </p>
                    </div>
                </div> <!-- END SECTION TITLE -->
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-nsw-tab" data-toggle="tab" href="#nav-nsw" role="tab" aria-controls="nav-nsw" aria-selected="true">New South Wales Office</a>
                        <a class="nav-item nav-link" id="nav-qwd-tab" data-toggle="tab" href="#nav-qwd" role="tab" aria-controls="nav-qwd" aria-selected="false">Brisbane  Office</a>
                        <a class="nav-item nav-link" id="nav-np-tab" data-toggle="tab" href="#nav-np" role="tab" aria-controls="nav-np" aria-selected="false">Kathmandu Office</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-nsw" role="tabpanel" aria-labelledby="nav-nsw-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-boxes">
                                    <div class="row">
                                        <!-- LOCATION -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    3320/57-59 Queen St, Auburn Central, Auburn NSW 2144
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- PHONES -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    02 8074 3892/ Extension: 105
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon">
                                                    <span class="flaticon-235-mail"></span>
                                                </div>
                                                <h5 class="h5-sm deepblue-color"><a href="mailto:we.info@wcevs.com.np">
                                                        <?php the_field('email');?>
                                                    </a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=3320/57-59 Queen StAuburn Central, Auburn NSW 2144&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.bgmi.org/">BGMI</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:450px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div>
                                        <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 326px;
                                            width: 548px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 326px;
                                            width: 518px;
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT FORM -->
                            <div class="col-md-5">
                                <div class="form-holder">
                                    <?php echo do_shortcode('[wpforms id="1113" title="false" description="false"]');?>
                                </div>
                            </div> <!-- END CONTACT FORM -->
                        </div> <!-- End row -->
                    </div>
                    <div class="tab-pane fade" id="nav-qwd" role="tabpanel" aria-labelledby="nav-qwd-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-boxes">
                                    <div class="row">
                                        <!-- LOCATION -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    43 Cremin St, Upper Mount Gravatt QLD 4122
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- PHONES -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    02 8074 3892/ Extension: 100
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon">
                                                    <span class="flaticon-235-mail"></span>
                                                </div>
                                                <h5 class="h5-sm deepblue-color"><a href="mailto:we.info@wcevs.com.np">
                                                        <?php the_field('email');?>
                                                    </a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><<div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=43 Cremin StUpper Mount Gravatt QLD 4122&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.bgmi.org/">BGMI</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:450px;}.gmap_iframe {height:400px!important;}</style></div><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div>
                                        <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 326px;
                                            width: 548px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 326px;
                                            width: 518px;
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT FORM -->
                            <div class="col-md-5">
                                <div class="form-holder">
                                    <?php echo do_shortcode('[wpforms id="1113" title="false" description="false"]');?>
                                </div>
                            </div> <!-- END CONTACT FORM -->
                        </div> <!-- End row -->
                    </div>
                    <div class="tab-pane fade" id="nav-np" role="tabpanel" aria-labelledby="nav-np-tab">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="contact-boxes">
                                    <div class="row">
                                        <!-- LOCATION -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-240-placeholder"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    Minbhawan, Baneshwor, Kathmandu
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- PHONES -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon"><span class="flaticon-172-telephone-1"></span></div>
                                                <h5 class="h5-sm deepblue-color">
                                                    01-4106567
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- EMAIL -->
                                        <div class="col-sm-6 col-lg-4">
                                            <div class="contact-box icon-xs">
                                                <div class="contact-box-icon">
                                                    <span class="flaticon-235-mail"></span>
                                                </div>
                                                <h5 class="h5-sm deepblue-color"><a href="mailto:we.info@wcevs.com.np">
                                                        <?php the_field('email');?>
                                                    </a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mapouter">
                                        <div class="gmap_canvas"><div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=Wisecrave&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.bgmi.org/">BGMI</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:450px!important;}</style></div><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div>
                                        <style>
                                        .mapouter {
                                            position: relative;
                                            text-align: right;
                                            height: 326px;
                                            width: 548px;
                                        }

                                        .gmap_canvas {
                                            overflow: hidden;
                                            background: none !important;
                                            height: 326px;
                                            width: 518px;
                                        }
                                        </style>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTACT FORM -->
                            <div class="col-md-5">
                                <div class="form-holder">
                                    <?php echo do_shortcode('[wpforms id="1113" title="false" description="false"]');?>
                                </div>
                            </div> <!-- END CONTACT FORM -->
                        </div> <!-- End row -->
                    </div>
                </div>
                <div class="row pt-30 justify-content-center">
                    <div class="col-md-3" style="border: 3px solid #2c3f69;border-radius: 8px;background-color: white;background-color: white;">
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow animation-element slide-left in-view">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10" style="text-align: center;">
                                <div class="featured-title">
                                    <h5>Kathmandu, Nepal</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Email:
                                        <?php the_field('nepal-email');?>
                                        <br>
                                        Address:
                                        <?php the_field('nepal-location');?><br>
                                        Phone:
                                        <?php the_field('nepal-phone');?><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1" style="border: 3px solid #2c3f69;border-radius: 8px;background-color: white;">
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow animation-element bounce-up in-view">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10" style="text-align: center;">
                                <div class="featured-title">
                                    <h5>NSW, Australia</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Email:
                                        <?php the_field('australia-email');?><br>
                                        Address:
                                        3320/57-59 Queen St, Auburn Central, Auburn NSW 2144<br>
                                        Phone:
                                        02 8074 3892/ Extension: 105<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1" style="border: 3px solid #2c3f69;border-radius: 8px;background-color: white;">
                        <div class="featured-icon-box icon-align-top-content style8 box-shadow animation-element bounce-up in-view">
                            <div class="featured-icon">
                                <div class="cmt-icon cmt-icon_element-onlytxt cmt-icon_element-color-skincolor cmt-icon_element-size-md">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="featured-content pl-10 pr-10" style="text-align: center;">
                                <div class="featured-title">
                                    <h5>Brisabane, Australia</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>
                                        Email:
                                        <?php the_field('australia-email');?><br>
                                        Address:
                                        43 Cremin St, Upper Mount Gravatt QLD 4122<br>
                                        Phone:
                                        02 8074 3892/ Extension: 100<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End container -->
        </section> <!-- END CONTACTS-4 -->
        <section id="cta-4" class="bg-fixed cta-section division mb-40">
            <div class="container white-color">
                <div class="row d-flex align-items-center">
                    <!-- CALL TO ACTION TEXT -->
                    <div class="col-md-8 col-lg-7 offset-md-4 offset-lg-5">
                        <div class="cta-txt">
                            <!-- Title  -->
                            <h3 class="h3-xl">Request Your Appointment</h3>
                            <!-- Text -->
                            <p class="p-lg">Our trained counsellors will be in touch to discuss your study goal!
                            </p>
                            <!-- Button  -->
                            <a href="#" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                                <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div> <!-- End row -->
            </div> <!-- End container -->
        </section>
        <!-- BRANDS-2
      ============================================= -->
        <div id="brands-2" class="wide-100 brands-section division">
            <div class="container">
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
            </div>
        </div> <!-- END BRANDS-2 -->
        <!-- FOOTER-2
        ============================================= -->
        <?php get_footer(); ?>