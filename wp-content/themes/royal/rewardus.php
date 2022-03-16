<?php /* Template Name: rewardus */ ?>
<?php get_header(); ?>
<!-- <div id="exampleModalCenter" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: block;" aria-modal="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="js-close" style="background-color: #edeef3;opacity: 1;text-align: right;">
          <span aria-hidden="true" style="color: black !important;">×</span>
        </button>
        <?php 
                  $id_image = get_field('modal-image');
                  $image = wp_get_attachment_image_src($id_image, 'home');
                  ?>
                  <img src="<?php echo $image[0]; ?>" class="img-fluid" alt="image" style="width: 33%; height: 22%; margin-left: 250px;">
        <div class="top-left"><?php the_field('modal-content');?> <a href="tel:014106567" ><?php the_field('modal-number');?></a> or 
Email us at <a href="mailto:we.info@wcevs.com.np"><?php the_field('modal-email');?></a></p>
  <?php the_field('modal-thankyou-content');?>
        </div>
    </div>
  </div>
</div>
<div class="modal-backdrop fade show" id="overlays"></div> -->

<!--<div id="loader-wrapper">-->
<!--    <div id="loader">-->
<!--      <div class="cssload-box-loading"></div>-->
<!--    </div>-->
<!--  </div>-->
 
    <!-- INNER PAGE WRAPPER
      ============================================= -->
    <div class="inner-page-wrapper">
      <!-- BREADCRUMB
        ============================================= -->
      <div class="cmt-page-title-row" style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-students-taking-class-in-pandemic.jpg');width: 100%;background-size: cover;background-position: center;">
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
      <!-- <div class="float-sm">
        <div class="fl-fl float-fb">
          <i class="fas fa-download"></i>
          <a href="" target="_blank"> Download our App!</a>
        </div>
      </div> -->
      <!-- Floating download bar Ends -->
             <section id="about-9" class="wide-40 about-section division">
                 
                 
                 
        <div class="container shadow br-15" style="padding: 25px;">
            
            
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<?php endif; ?>
 
          <h3 class="h3-md mb-20">Reward Us:</h3>
          <div class="row">
            <div class="col-md-6">
                <div class="row">
                
                <div class="col-md-12">
                <div class="media-outer-container">
                <div class="media-container-size media-background-image-1">
                  <div class="media-container-gradient"></div>
                  <div class="media-container-logo">
                    <a href="https://www.facebook.com/wisecravenp" target="_blank"><img src="https://icons-for-free.com/iconfiles/png/512/fb+icon-1320183899414660008.png" height="150" width="150"></a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              </div>
              
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="fb-page" style="text-align: center;" data-href="https://www.facebook.com/royaleduconsultancy" data-tabs="" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/royaleduconsultancy" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/wisecravenp"> Wise Crave Education and Visa Services Consultancy</a></blockquote>
                  </div>
                </div>
                <div class="fb-like" style="text-align: center;" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
              </div>
            </div>
              
              </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12">
              <div class="media-outer-container">
                <div class="media-container-size media-background-image-2">
                  <div class="media-container-gradient"></div>
                  <div class="media-container-logo">
                    <a href="https://www.google.com/search?newwindow=1&sxsrf=ALeKk03NpmMvs1FV4Fhc3wiiCVYoqaH03A%3A1610359813834&ei=BST8X7-wMpec4-EP2rWX4Ak&q=wise+crave+education+and+visa&oq=wise+crave+education+and+visa&gs_lcp=CgZwc3ktYWIQAzIECCMQJ1AAWABgh_wRaABwAHgAgAG3AYgBtwGSAQMwLjGYAQCqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwj_xqfl0ZPuAhUXzjgGHdraBZwQ4dUDCA0&uact=5#lrd=0x6b12998aa31158ad:0xff9be08fe6c00254,3,,," target="_blank">
                      <img src="https://cdn.icon-icons.com/icons2/2119/PNG/512/google_icon_131222.png" height="100" width="100" style="margin-top: 25px;margin-left: 25px;"></a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="fb-page" style="text-align: center;" data-href="https://www.facebook.com/royaleduconsultancy" data-tabs="" data-width="500" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/royaleduconsultancy" class="fb-xfbml-parse-ignore"><a href="https://www.google.com/search?newwindow=1&sxsrf=ALeKk03NpmMvs1FV4Fhc3wiiCVYoqaH03A%3A1610359813834&ei=BST8X7-wMpec4-EP2rWX4Ak&q=wise+crave+education+and+visa&oq=wise+crave+education+and+visa&gs_lcp=CgZwc3ktYWIQAzIECCMQJ1AAWABgh_wRaABwAHgAgAG3AYgBtwGSAQMwLjGYAQCqAQdnd3Mtd2l6wAEB&sclient=psy-ab&ved=0ahUKEwj_xqfl0ZPuAhUXzjgGHdraBZwQ4dUDCA0&uact=5#lrd=0x6b12998aa31158ad:0xff9be08fe6c00254,3,,,"> Wise Crave Education and Visa Services Consultancy</a></blockquote>
                  </div>
                </div>
                <div class="fb-like" style="text-align: center;" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section>
      <!-- FOOTER
        ============================================= -->
<?php get_footer(); ?>