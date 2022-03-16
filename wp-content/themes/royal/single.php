<?php get_header();?>


<style>
    
.sblog-post-txt h2{
  text-decoration: underline;
}
</style>



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




<!-- SINGLE POST
        ============================================= -->
      <section id="single-post" class="wide-80 blog-page-section division">
        <div class="container">
          <div class="row">
            <!-- POST CONTENT -->
            <div class="col-lg-8">
              <div class="single-blog-post pr-15">
                <!-- BLOG POST IMAGE -->
                <div class="blog-post-img mb-30">
                  
                </div>
                <!-- Post Data -->
               
                <!-- Title -->
                <h4 class="h4-lg deepblue-color mb-30"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
                <!-- POST TEXT -->
                <div class="sblog-post-txt">
                  <!-- Text -->
                   <p class="post-meta"><?php echo get_the_date('M');?> <?php echo get_the_date('j');?> <?php echo get_the_date('Y');?> </p>
                     <?php while ( have_posts() ) : the_post(); ?>
<div class="body">
	<div class="container">
		<div class="clear"></div>
		<div class="main">
			<div class="post content">
				<h3 class="page-title"></h3>
				<?php the_post_thumbnail(); ?>

				<div class="content">
				    <br>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php endwhile; ?>
                        
                  
                  
                  <!-- BLOG POST SHARE LINKS -->
                  <div class="row post-share-links d-flex align-items-center">
                    <!-- POST TAGS -->
                    <div class="col-md-9 col-xl-6 post-tags-list">
                      <span><a href="#">Consultations</a></span>
                      <span><a href="#">Immigration</a></span>
                      <span><a href="#">Visa</a></span>
                    </div>
                    <!-- POST SHARE ICONS -->
                    <div class="col-md-3 col-xl-6 post-share-list text-right">
                      <ul class="share-social-icons text-center clearfix">
                        <li><a href="#" class="share-ico ico-facebook"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a href="#" class="share-ico ico-twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="share-ico ico-like"><i class="far fa-bookmark"></i></a></li>
                      </ul>
                    </div>
                  </div> <!-- END BLOG POST SHARE -->
                </div> <!-- END POST TEXT -->
                <!-- ABOUT POST AUTHOR -->
                <div class="author-senoff">
                  <!-- Avatar -->
                  <img src="<?php bloginfo('template_url'); ?>/images/review-author-6.jpg" alt="author-avatar">
                  <!-- Text -->
                  <div class="author-senoff-txt">
                    <!-- Title -->
                    <h5 class="h5-md">Published by Roshan Pokhrel</h5>
                    <p>Wise Crave Education and Visa Services is an educational consultancy that maintains a level of standard in compliance with the regulatory framework of federal government of Australia and education providers. It helps the students to get exposure to high-level professionalism.
                    </p>
                  </div>
                </div> <!-- END ABOUT POST AUTHOR -->
                
                <!-- COMMENT FORM -->
                <div id="leave-comment">
                  <!-- Title -->
                  <h5 class="h5-xl noto-font-700 purple-color">Leave a Comment</h5>
                  <!-- Text -->
                  <p class="grey-color">Your email address will not be published. Required fields are marked *</p>
                  <form name="commentForm" class="row comment-form">
                    <div id="input-message" class="col-md-12 input-message">
                      <p>Add Comment *</p>
                      <textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>
                    </div>
                    <div id="input-name" class="col-md-12">
                      <p>Name*</p>
                      <input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
                    </div>
                    <div id="input-email" class="col-md-12">
                      <p>Email*</p>
                      <input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
                    </div>
                    <!-- Contact Form Button -->
                    <div class="col-lg-12 mt-15 form-btn">
                      <button type="submit" class="btn btn-primary tra-black-hover submit">Post Comment</button>
                    </div>
                    <!-- Contact Form Message -->
                    <div class="col-md-12 comment-form-msg text-center">
                      <div class="sending-msg"><span class="loading"></span></div>
                    </div>
                  </form>
                </div> <!-- END COMMENT FORM -->
              </div>
            </div> <!-- END POST CONTENT -->
            <!-- SIDEBAR -->
            <aside id="sidebar" class="col-lg-4">
               <?php if(is_active_sidebar('blog-sidebar') ):?>
                <?php dynamic_sidebar('blog-sidebar');?>
              <?php endif;?>
              <!-- SEARCH FIELD -->
              <div id="search-field" class="sidebar-div mb-50">
              <!--   <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-field">
                  <div class="input-group-append">
                    <button class="btn" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </div>
              </div> -->
              <!-- BLOG CATEGORIES -->
             <!--  <div class="blog-categories sidebar-div mb-50"> -->
                <!-- Title -->
                <!-- <h5 class="h5-lg">Categories</h5> -->
                <!-- List -->
               <!--  <ul class="blog-category-list clearfix">
                  <li><a href="https://wcevs.com.np/top-seven-best-australian-cities-for-international-students/" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Top Seven Best Australian Cities for International Students</a></li>
                  <li><a href="https://wcevs.com.np/what-are-the-safety-measures-and-tips-for-international-students-while-studying-in-australia/" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> What are the safety measures and tips for international students while studying in Australia?</a></li>
                  <li><a href="https://wcevs.com.np/step-by-step-guidance-to-study-in-australia/" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Step-by-Step Guidance to Study in Australia</a></li>
                  <li><a href="https://wcevs.com.np/five-things-you-need-to-do-when-you-arrive-in-australia/" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Five Things You Need To Do When You Arrive In Australia</a></li>
                  <li><a href="https://wcevs.com.np/why-you-should-use-an-education-consultant/" class="txt-400"><i class="fas fa-angle-double-right primary-color"></i> Why You Should Use An Education Consultant?</a></li>
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
              <!-- <div class="sidebar-countries sidebar-div mb-50"> -->
                <!-- Title -->
               <!--  <h5 class="h5-lg">Countries: </h5> -->
                <!-- List -->
               <!--  <ul class="sidebar-country-list clearfix">
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-canada.jpg" alt="sidebar-image" />Canada</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-uk.jpg" alt="sidebar-image" />United Kingdom</a>
                  </li>
                  <li><a href="country-detail.html">
                      <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/images/sidebar-usa.jpg" alt="sidebar-image" />United States of America</a>
                  </li>
                </ul>
              </div> -->
            </aside> <!-- END SIDEBAR -->
          </div> <!-- End row -->
        </div> <!-- End container -->
      </section> <!-- END SINGLE POST -->
      
      
      
      <?php get_footer();?>