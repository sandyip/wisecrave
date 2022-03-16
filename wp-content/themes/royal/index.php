<?php /* Template Name: blog */ ?>
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
      <div class="cmt-page-title-row"   style="background: url('https://wcevs.com.au/wp-content/uploads/2021/06/wise-crave-study-in-usa.jpg');width: 100%;background-size: cover;background-position: center;">
        <div class="cmt-page-title-row-inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <div class="page-title-heading">
                  <h2 class="title">Blog</h2>
                </div>
                <div class="breadcrumb-wrapper">
                  <span>
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home &nbsp;/</a>
                  </span>
                  <span>Blog</span>
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
      <!-- BLOG PAGE CONTENT
				============================================= -->
      <section id="blog-page" class="wide-100 blog-page-section division">
        <div class="container">
          <div class="row">
            <!-- BLOG POSTS HOLDER -->
            <div class="col-lg-8">
              <div class="posts-holder pr-15">
                <?php while(have_posts()) : the_post();?>
                <!-- BLOG POST #1 -->
                <div class="blog-post">
                  <!-- BLOG POST IMAGE -->
                  <div class="blog-post-img mb-30">
                    <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" />
                  </div>
                  <!-- BLOG POST TEXT -->
                  <div class="blog-post-txt">
                    <!-- Post Meta -->
                    <p class="post-meta"><a href="<?php the_permalink();?>" class="grey-color">Immigration Visa</a> - <?php echo get_estimated_reading_time( get_the_content() ); ?></p>
                    <!-- Title -->
                    <h4 class="h4-xs">
                      <a href="<?php the_permalink();?>" class="darkblue-color"><?php the_title();?></a>
                    </h4>
                    <!-- Text -->
                    <a href="<?php the_permalink();?>">
                    <p><?php echo wp_trim_words(get_the_content() , 60);?>
                    </a>
                    </p>
                    <!-- Post Data -->
                    <p class="post-data">By <a href="<?php the_permalink();?>"><?php the_author();?></a> -<?php the_time();?></p>
                  </div>
                </div> <!-- END BLOG POST #1 -->
              <?php endwhile;?>
               <nav aria-label="Page navigation example">
               <ul class="pagination">
              <?php previous_posts_link();?>
              <?php next_posts_link();?>

               </ul>
              </nav>
               
                <!-- BLOG PAGE PAGINATION -->
                <!-- <div class="blog-page-pagination">
                  <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center primary-pagination">
                      <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a> </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                    </ul>
                    
                  </nav>
                </div> -->
              </div>
            </div> <!-- END BLOG POSTS HOLDER -->
            <!-- SIDEBAR -->
            
            <aside id="sidebar" class="col-lg-4">
              <?php if(is_active_sidebar('course-sidebar') ):?>
                <?php dynamic_sidebar('course-sidebar');?>
              <?php endif;?>
              <!-- SEARCH FIELD -->
           <!--    <div id="search-field" class="sidebar-div mb-50">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div> -->
              <!-- BLOG CATEGORIES -->
             <!--  <div class="blog-categories sidebar-div mb-50"> -->
                <!-- Title -->
               <!--  <h5 class="h5-lg">Categories</h5> -->
                <!-- List -->
               <!--  <ul class="blog-category-list clearfix">
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Education Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Skilled Woker Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Work Permit Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> PR and Migrate Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Business Visa</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Spouse/Family Visas</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Tourist & Visitor Visas</a></li>
                  <li><a href="" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Working Holiday Visas</a></li>
                </ul>
              </div> -->
             
              <!-- TAGS CLOUD -->
              <!-- <div class="tags-cloud sidebar-div mb-50"> -->
                <!-- Title -->
                <!-- <h5 class="h5-lg">Tags Cloud</h5>
                <span class="badge"><a href="#">Consultations</a></span>
                <span class="badge"><a href="#">Education</a></span>
                <span class="badge"><a href="#">Embassy</a></span>
                <span class="badge"><a href="#">Immigration</a></span>
                <span class="badge"><a href="#">Travelling</a></span>
                <span class="badge"><a href="#">Travel Tips</a></span>
                <span class="badge"><a href="#">Tourism</a></span>
                <span class="badge"><a href="#">Visa</a></span>
              </div> -->
              <!-- SIDEBAR COUNTRIES -->
             <!--  <div class="sidebar-countries sidebar-div mb-50"> -->
                <!-- Title -->
               <!--  <h5 class="h5-lg">Countries: </h5> -->
                <!-- List -->
                <!-- <ul class="sidebar-country-list clearfix">
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
                  </li>
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-uk.jpg" alt="sidebar-image" />United Kingdom</a>
                  </li>
                  <li><a href="">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-usa.jpg" alt="sidebar-image" />United States of America</a>
                  </li>
                </ul>
              </div> -->
              <div id="requestform">
              <?php echo do_shortcode('[wpforms id="1115" title="false" description="false"]');?>
            </div>
            </aside> <!-- END SIDEBAR -->

          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END BLOG PAGE CONTENT -->
      <!-- CALL TO ACTION-4
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
                <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                  tempus, and blandit ligula varius
                </p>
                <!-- Button  -->
                <a href="mailto:youremail@mail.com" class="btn btn-md btn-primary tra-white-hover btn-arrow">
                  <span>Get Consultation <i class="fas fa-arrow-right"></i></span>
                </a>
              </div>
            </div>
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END CALL TO ACTION-4 -->
      <!-- FOOTER
				============================================= -->
<?php get_footer(); ?>