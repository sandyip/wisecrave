<?php /* Template Name: educationservice */ ?>
<?php get_header(); ?>
<!--<div id="loader-wrapper">-->
<!--    <div id="loader">-->
<!--      <div class="cssload-box-loading"></div>-->
<!--    </div>-->
<!--  </div>-->
  <!-- PAGE CONTENT
    ============================================= -->
  <div id="page" class="page">
    <!-- HEADER
      ============================================= -->
   <header id="header-2" class="header white-menu">
        <div class="header-wrapper">
          <!-- MOBILE HEADER -->
          <div class="wsmobileheader clearfix">
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            <span class="smllogo"><img src="images/new.png" width="210" alt="mobile-logo" /></span>
            <a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
          </div>
          <!-- NAVIGATION MENU -->
          <div class="wsmainfull menu clearfix">
            <!-- HEADER STRIP -->
            <div class="headtoppart clearfix">
              <div class="headerwp clearfix">
                <div class="headertopleft header-contacts">
                  <span class="txt-400 b-right">
                    <a class="txt-400 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Countries
                   </a>
                   <div class="dropdown-menu btn-primary" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Nepal</a>
                    <a class="dropdown-item" href="#">Australia</a>
                  </div>
                </span>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fab fa-facebook-f"></i><span></span></a>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fab fa-instagram"></i><span></span></a>
              </span>
              <span class="txt-400 b-right"><a href="rewardus.html"><i class="fab fa-youtube"></i><span></span></a>
              </span>
              <span class="txt-400"><a href="rewardus.html"><i class="fa fa-sign-in-alt"></i><span>Reward Us</span></a>
            </div>
            <div class="headertopright header-contacts">
              <span>
                <a href="tel:(02) 8074 3892" class="txt-400 b-right"><i class="far fa-envelope-open"></i>(02) 8074 3892</a>
              </span>
              <span>
                <a href="mailto:info@royaledu.com.au" class="txt-400 b-right"><i class="far fa-envelope-open"></i>info@royaledu.com.au</a>
              </span>
              <span class="txt-400"><a href="login.html"><i class="fa fa-sign-in-alt"></i><span>Login</span></a>
            </span>
          </div>
        </div>
      </div> <!-- END HEADER STRIP -->
      <div class="wsmainwp clearfix">
        <div class="desktoplogo">
          <a href="<?php echo site_url('/home');?>" class="logo-black">
             <?php 
                if(has_custom_logo() || is_customize_preview()){
                the_custom_logo();
            }else{
                ?>
                Wisecrave
            <?php } ?>
          </a>
        </div>
        <!-- MAIN MENU -->
        <nav class="wsmenu clearfix blue-header">
          <!-- <ul class="wsmenu-list">
            <li aria-haspopup="true"><a href="home.html">Home <span class="nl-simple"></span></a>
            </li>
            <li aria-haspopup="true"><a href="about.html">About Us <span class="nl-simple"></span></a>
            </li> -->
            <!-- DROPDOWN MENU -->
            <!-- <li aria-haspopup="true"><a href="services.html">Services<span class="wsarrow"></span></a>
              <ul class="sub-menu">
                <li aria-haspopup="true"><a href="">Study Abroad<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="countries_aus.html">Study in Australia</a></li>
                    <li aria-haspopup="true"><a href="countries_uk.html">Study in UK</a></li>
                    <li aria-haspopup="true"><a href="countries_can.html">Study in Canada</a></li>
                    <li aria-haspopup="true"><a href="countries_nw.html">Study in Norway</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="#">Student Service<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="educationservice.html">Education Service</a></li>
                    <li aria-haspopup="true"><a href="oba-service.html">Outcome based Assessment (OBA)</a></li>
                    <li aria-haspopup="true"><a href="studentvisa.html">Student Visa</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="">Migration Service<span class="wsarrowbr"></span>
                  <ul class="sub-menu">
                    <li aria-haspopup="true"><a href="visa_temp.html">Temporary Graduate Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_visitor.html">Visitor Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_partner.html">Partner Visa</a></li>
                    <li aria-haspopup="true"><a href="visa_other.html">Other Visa</a></li>
                    <li aria-haspopup="true"><a href="py&naati.html">PY & NAATI</a></li>
                  </ul>
                </li>
                <li aria-haspopup="true"><a href="services.html">Other Services</a></li>
              </ul>
            </li> --> <!-- END DROPDOWN MENU -->
           <!--  <li aria-haspopup="true"><a href="">Test Preparation <span class="nl-simple"></span></a>
              <ul class="sub-menu">
                <li aria-haspopup="true"><a href="ielts.html">IELTS</a></li>
                <li aria-haspopup="true"><a href="toefl.html">TOEFL</a></li>
                <li aria-haspopup="true"><a href="pte.html">PTE</a></li>
                <li aria-haspopup="true"><a href="gre.html">GRE</a></li>
                <li aria-haspopup="true"><a href="sat.html">SAT</a></li>
                <li aria-haspopup="true"><a href="gmat.html">GMAT</a></li>
              </ul>
            </li>
            <li aria-haspopup="true"><a href="blog.html">Blog <span class="nl-simple"></span></a>
            </li>
            <li class="nl-simple" aria-haspopup="true"><a href="contactus.html">Contact Us</a></li>
          </ul> -->
          <?php
              wp_nav_menu(
                array(
                  'menu' => 'primary-menu',
                  'container' => '',
                  'items_wrap' => '<ul class="wsmenu-list">%3$s</ul>'
                )
              ) 

              ?>
        </nav> <!-- END MAIN MENU -->
      </div>
    </div> <!-- END NAVIGATION MENU -->
  </div> <!-- End header-wrapper -->
</header> <!-- END HEADER -->
    <!-- INNER PAGE WRAPPER
      ============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
        ============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-student-taking-language-class.jpg');width: 100%;background-size: cover;background-position: center;">
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
          <li class="fb"><a href="https://www.facebook.com/WiseCraveaus"><i class="fab fa-facebook-f"></i></a></li>
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
                <span class="section-id id-color">Education Service</span>
                <!-- Title -->
                <p class=""><?php the_field('content');?></p>
               
              </div>
            </div> <!-- END ABOUT TEXT -->
            <!-- SERVICES IMAGE -->
            <div class="col-lg-5 col-xl-5 offset-xl-1">
              <div class="about-4-img text-center">
                <?php 
                    $id_image = get_field('image');
                    $image = wp_get_attachment_image_src($id_image, 'educationservice');
                    ?>
                    <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image">
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
                <h4 class="h4-xs txt-400">Need immigration &amp; visa consultation? <a href="https://wcevs.com.au/contact">Send a request</a> for free consultation</h4>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section>
      <!-- FOOTER
        ============================================= -->
<?php get_footer(); ?>