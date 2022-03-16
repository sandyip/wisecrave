<?php get_header();
/* Template Name: Ticketing & accomodation */ ?>

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
                    <a class="white-color" title="Homepage" href="<?php echo site_url('/home');?>">Home /</a>
                  </span>
                  <span>Other Services /</span>
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
          <div class="mb-4">
 <!-- FAQs-1
        ============================================= -->
              <div id="faqs-1" class="faqs-section division about-9-txt bg-lightgrey" style="padding: 25px;">
                <!-- SECTION TITLE -->
                <div class="row">
                  <div class="col-md-12">
                    <!-- Title -->
                    <?php the_content();?>
                  </div>
                </div> <!-- END SECTION TITLE -->
                <!-- QUESTIONS HOLDER -->
                <!--<div class="row">-->
                <!--  <div class="col-lg-12">-->
                <!--    <div id="accordion" role="tablist">-->
                      <!-- QUESTION #1 -->
                <!--      <div class="card">-->
                        <!-- Question -->
                <!--        <div class="card-header" role="tab" id="headingOne">-->
                <!--          <h5 class="h5-sm">-->
                <!--            <a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">-->
                <!--              <span style="color: #000 !important;">1.</span> <?php the_field('question-1');?>-->
                <!--            </a>-->
                <!--          </h5>-->
                <!--        </div>-->
                        <!-- Answer -->
                <!--        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">-->
                <!--          <div class="card-body">-->
                            <!-- INFO BOX #1 -->
                <!--            <div class="box-list">-->
                <!--              <div class="box-list-icon"><i class="fas fa-genderless"></i></div>-->
                <!--              <?php the_field('question-1-content');?>-->
                <!--            </div>-->
                            <!-- INFO BOX #2 -->
                            
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> <!-- END QUESTION #1 -->
                      <!-- QUESTION #2 -->
                <!--      <div class="card">-->
                        <!-- Question -->
                <!--        <div class="card-header" role="tab" id="headingTwo">-->
                <!--          <h5 class="h5-sm">-->
                <!--            <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">-->
                <!--              <span style="color: #000 !important;">2.</span> <?php the_field('question-2');?>-->
                <!--            </a>-->
                <!--          </h5>-->
                <!--        </div>-->
                        <!-- Answer -->
                <!--        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">-->
                <!--          <div class="card-body">-->
                <!--             <?php the_field('question-2-content');?>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> <!-- END QUESTION #2 -->
                      <!-- QUESTION #3 -->
                <!--      <div class="card">-->
                        <!-- Question -->
                <!--        <div class="card-header" role="tab" id="headingThree">-->
                <!--          <h5 class="h5-sm">-->
                <!--            <a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">-->
                <!--              <span style="color: #000 !important;">3.</span><?php the_field('question-3');?>-->
                <!--            </a>-->
                <!--          </h5>-->
                <!--        </div>-->
                        <!-- Answer -->
                <!--        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">-->
                <!--          <div class="card-body">-->
                            <!-- Text -->
                <!--            <?php the_field('question-3-content');?>-->
                          
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> <!-- END QUESTION #3 -->
                      <!-- QUESTION #4 -->
                <!--      <div class="card">-->
                        <!-- Question -->
                <!--        <div class="card-header" role="tab" id="headingFour">-->
                <!--          <h5 class="h5-sm">-->
                <!--            <a class="collapsed" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">-->
                <!--              <span style="color: #000 !important;">4.</span> <?php the_field('question-4');?>-->
                <!--            </a>-->
                <!--          </h5>-->
                <!--        </div>-->
                        <!-- Answer -->
                <!--        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">-->
                <!--          <div class="card-body">-->
                            <!-- Text -->
                <!--            <?php the_field('question-4-content');?>-->
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> <!-- END QUESTION #4 -->
                      <!-- QUESTION #5 -->
                <!--      <div class="card">-->
                        <!-- Question -->
                <!--        <div class="card-header" role="tab" id="headingFive">-->
                <!--          <h5 class="h5-sm">-->
                <!--            <a class="collapsed" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false" aria-controls="collapseFive">-->
                <!--              <span style="color: #000 !important;">5.</span> <?php the_field('question-5');?>-->
                <!--            </a>-->
                <!--          </h5>-->
                <!--        </div>-->
                        <!-- Answer -->
                <!--        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">-->
                <!--          <div class="card-body">-->
                            <!-- INFO BOX #1 -->
                <!--            <div class="box-list">-->
                <!--              <div class="box-list-icon"><i class="fas fa-genderless"></i></div>-->
                <!--             <?php the_field('question-5-content');?>-->
                <!--            </div>-->
                            <!-- INFO BOX #2 -->
                           
                <!--          </div>-->
                <!--        </div>-->
                <!--      </div> <!-- END QUESTION #5 -->
                <!--    </div> <!-- END ACCORDION -->
                <!--  </div> <!-- End col-x -->
                <!--</div> <!-- END QUESTIONS HOLDER -->
                <!-- MORE QUESTIONS BUTTON -->
                <div class="row">
                  <div class="col-md-12 text-center more-questions">
                    <h5 class="h5-md">Still have a question? <a href="faqs.html" class="darkblue-color">Ask your question here</a></h5>
                  </div>
                </div>
              </div> <!-- End container -->
              <!-- END FAQs-1 -->
          </div> <!-- End row -->

        </div> <!-- End container -->
      </section> <!-- END ABOUT-9 -->
<?php get_footer();?>