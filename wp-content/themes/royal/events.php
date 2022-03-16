<?php get_header();
/* Template Name: events */ ?>
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
                      <div class="cmt-page-title-row" style="background: url(<?php echo get_template_directory_uri(); ?>/images/breadump-bg3.jpg);
            width: 100%;background-size: cover;background-position: center;">
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
      <!-- ABOUT-9
        ============================================= -->
      <section id="about-9" class="wide-40 about-section division">
        <div class="container">
    <div id="2020" class="spacer-toc"><i class="fa fa-calendar"></i></div>
    <h2 class="border-line">2020</h2>

    <!-- 2019 -->
    <div class="timeline-event-wrapper">

     <?php 
     $ourcurrentpage = get_query_var('paged');
    $args = array(
      'post_type'  => 'events',
      'posts_per_page'   => 2,
      'orderby'         => 'date',
      'order'          => '',
      'paged'          => $ourcurrentpage
    );
    $events = new WP_Query($args);
    while($events-> have_posts()) : $events -> the_post();
    ?>
      <div class="timeline-event">
        <div class="timeline-event-img">
          <a href="https://wcevs.com.np/events/ielts-preparation/" class="w-fancybox">
            <img src="<?php echo the_post_thumbnail_url();?>" title="Event 1" alt="Event 1">
          </a>
        </div>
        <div class="timeline-event-date"><span class="black"><?php the_field('calendar');?></span>Category</div>
        <div class="timeline-event-content">
          <h2><a href="https://wcevs.com.np/events/ielts-preparation/" target="_blank" title="Event 1"><?php the_title();?></a></h2>
          <?php echo wp_trim_words(get_the_content() , 40);?>
          <p class="timeline-content-ensemble"><?php the_field('status');?></p>
        </div>
      </div>

     <?php endwhile; wp_reset_postdata();?>
     <nav aria-label="Page navigation example">
      <ul class="pagination">
      <?php previous_posts_link('Previous Page', $events->max_num_pages)?>
       <?php next_posts_link('Next Page', $events->max_num_pages)?>
     
     </ul>
</nav>
    </div><!-- end timeline-event-wrapper  -->

    <div><a href="#top-toc"><i class="fa fa-angle-up fa-2x"></i></a></div>

    <div class="wsite-spacer" style="height:4rem;"></div> 

   <!--  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>

    <li class="page-item"><a class="page-link" href="#">Next</a></li> 
  
  </ul>
</nav> -->
  </div>
      </section>


<?php get_footer();?>