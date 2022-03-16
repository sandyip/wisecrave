<?php /* Template Name: oba-service */ ?>
<?php get_header(); ?>
<!--<div id="loader-wrapper">-->
<!--    <div id="loader">-->
<!--      <div class="cssload-box-loading"></div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- PAGE CONTENT
    ============================================= -->

    <!-- INNER PAGE WRAPPER
      ============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
        ============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-medical-student-scaled.jpg');width: 100%;background-size: cover;background-position: center;">
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
                  <span>Student Service /</span>
                  <span><?php the_title();?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="sticky-social">
        <ul class="social">
          <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
          <li class="insta"><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
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
                <span class="section-id id-color">Outcome based Assessment (OBA)</span>
                <!-- Title -->
                <h3 class="h3-lg darkblue-color"><?php the_field('title');?></h3>
                <!-- Text #1 -->
                <div class="box-list">
                  <div class="box-list-icon"><i class="fas fa-genderless" style="color: #c2162c !important;"></i></div>
                  <p><?php the_field('content');?>
                  </p>
                </div>
               
                <!-- Button -->
                <a href="tel:(02) 8074 3892" class="btn btn-md btn-primary black-hover">
                  Call: (02) 8074 3892
                </a>
              </div>
            </div> <!-- END ABOUT TEXT -->
            <!-- SERVICES IMAGE -->
            <div class="col-lg-5 col-xl-5 offset-xl-1">
              <div class="about-4-img text-center">
                <?php 
                    $id_image = get_field('image');
                    $image = wp_get_attachment_image_src($id_image, 'oba-service');
                    ?>
                    <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
              </div>
            </div>
          </div>
        </div>
      </section>
         <section id="about-2" class="wide-40 mb-40 about-section division">
        <div class="container shadow br-15" style="padding: 25px;">
          <div class="row d-flex align-items-center">
            <!-- ABOUT IMAGE -->
            <div class="col-md-6">
              <div class="about-img text-center mb-40">
               <?php 
                    $id_image = get_field('image-2');
                    $image = wp_get_attachment_image_src($id_image, 'oba-service');
                    ?>
                    <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
              </div>
            </div>
            <!-- ABOUT TEXT -->
            <div class="col-md-6">
              <div class="about-2-txt pc-20 mb-40">
                <!-- Section ID -->
                <span class="section-id id-color">Student Visa</span>
                <!-- Title -->
                <h3 class="h3-lg"><?php the_field('title-2');?></h3>
                <!-- INFO BOX #1 -->
                <div class="box-list">
                  <?php the_field('content-2');?>
                </div>
                
              </div>
            </div> <!-- END ABOUT TEXT -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
      <section id="cta-3" class="bg-darkblue cta-section division">
        <div class="container white-color">
          <div class="row d-flex align-items-center">
            <!-- CALL TO ACTION TEXT -->
            <div class="col-lg-12">
              <div class="cta-txt text-center">
                <h4 class="h4-xs txt-400">Need immigration &amp; visa consultation? <a href="https://wcevs.com.np/contactus/">Send a request</a> for free consultation</h4>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
      <!-- FOOTER
        ============================================= -->
   <?php get_footer(); ?>