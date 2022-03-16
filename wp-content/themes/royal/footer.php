    <footer id="footer-3" class="bg-blue-map wide-40 footer division">
      <div class="container white-color">
        <!-- FOOTER CONTENT -->
        <div class="row">
          <!-- FOOTER CONTACTS -->
          <div class="col-lg-3 col-xl-3">
            <div class="footer-box mb-40">
              <img src="<?php echo get_theme_mod('royal_img_handle');?>" width="200" alt="footer-logo"> <br> <br>
              <h5 class="h5-md">Contact Details</h5>
              <!-- Address -->
              <p class="p-sm"><?php echo get_theme_mod('royal_address_handle');?></p>
              
              <!-- Phone -->
              <p class="p-sm mt-20">Phone: <a href="tel:014106567
"><?php echo get_theme_mod('royal_phone_content_handle');?></a></p>
              <!-- Email -->
              <p class="p-sm foo-email">Email: <a href="mailto:we.info@wcevs.com.np
"><?php echo get_theme_mod('royal_email_content_handle');?>
</a></p>
            </div>
          </div>
          <!-- FOOTER LINKS -->
          <div class="col-lg-3 col-xl-3">
            <div class="footer-links mb-40">
              <h5 class="h5-md">Useful Links</h5>
              <!-- Footer Links -->
              <ul class="foo-links clearfix">
         
         
         <li>
         <p>
         <a href="https://www.homeaffairs.gov.au/" target="_blank">Department of Home Affairs (DHA)</a> </p>
         <p>
         <a href="https://www.ato.gov.au/" target="_blank">Australian Taxation Office</a> 
         </p>
         <p>
         <a href="https://immi.homeaffairs.gov.au/visas/already-have-a-visa/check-visa-details-and-conditions/check-conditions-online" target="_blank">Visa Entitlement Verification Online (VEVO)</a> 
         
           </p>
           <p>
           
          <a href="https://immi.homeaffairs.gov.au/help-support/meeting-our-requirements/character" target="_blank">Overseas Police Check</a> 
          </p>
          <p>
         
         <a href="https://www.fairwork.gov.au/" target="_blank">The Fair Work Ombudsman</a> 
         </p>
         
         </li>
              </ul>
            </div>
          </div>
          <!-- FOOTER LINKS -->
          <div class="col-lg-3 col-xl-3">
            <div class="footer-links mb-40">
              <h5 class="h5-md">Test Preparation</h5>
              <!-- Footer Links -->
              <ul class="foo-links clearfix">
                 <?php 
             $args = array(
            'post_type' => 'courses',
            'posts_per_page' => 7,
            'orderby' => 'title',
            'order' => 'ASC'
            );
            $posts = new WP_Query($args);
            while($posts->have_posts()) : $posts-> the_post();

            ?>
                <li><a href="<?php the_field('read_more');?>"><?php the_title();?></a></li>
                <?php endwhile; wp_reset_postdata();?>
              </ul>
            </div>
          </div>
          <!-- FOOTER NEWSLETTER FORM -->
          <div class="col-lg-3 col-xl-3">
            <div class="footer-form mb-20">
              <h5 class="h5-md">Stay Always In Touch</h5>
              <!-- Newsletter Form Input -->
              <form class="newsletter-form">
                <div class="input-group">
                  <input type="email" class="form-control" placeholder="Your email address" required id="s-email">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-md btn-tra-white primary-hover">Subscribe</button>
                  </span>
                </div>
                <!-- Newsletter Form Notification -->
                <label for="s-email" class="form-notification"></label>
              </form>
              
              
              <p style="font-size:16px;border-bottom: 1px solid white;">Connect with Wise Crave Edu</p>
              
              
              
              <span class="txt-400"><a href="<?php echo get_theme_mod('royal_facebook_handle');?>"><i class="fab fa-facebook-f"></i><span></span></a>
         </span>
         <span class="txt-400" style="margin-left:10px"><a href="<?php echo get_theme_mod('royal_insta_handle');?>"><i class="fab fa-instagram"></i><span></span></a>
       </span>
       <span class="txt-400" style="margin-left:10px"><a href="<?php echo get_theme_mod('royal_youtube_handle');?>"><i class="fab fa-youtube"></i><span></span></a>
     </span>
      <span class="txt-400" style="margin-left:10px"><a href="<?php echo get_theme_mod('royal_twitter_handle');?>"><i class="fab fa-twitter"></i><span></span></a>
     </span>
      <span class="txt-400" style="margin-left:10px"><a href="<?php echo get_theme_mod('royal_linkedin_handle');?>"><i class="fab fa-linkedin"></i><span></span></a>
     </span>
              
          

            </div>
          </div>
        </div> <!-- END FOOTER CONTENT -->
        <!-- BOTTOM FOOTER -->
        <div class="bottom-footer">
          <div class="row d-flex align-items-center">
            <!-- FOOTER LOGO -->
            <div class="col-md-8 col-lg-8">
               <p class="footer-copyright">&copy;<?php echo get_theme_mod('royal_copyright_handle');?>
                 <a href="https://wcevs.com.au/privacy-policy/">|| Privacy Policy</a> ||
             <a href="https://wcevs.com.au/terms-conditions/">Terms & Conditions</a>
             
             <a href="https://wcevs.com.au/refund-policy/">|| Refund Policy</a>
             
             
             
             
             
             </p>
              <!-- Footer Logo -->
              
            </div>
            <!--<div class="col-md-4 col-lg-4" style="text-align: center; margin-top: 0px;">-->
            <!-- <p class="p-sm"><a href="#">Privacy Policy</a></p>       ||-->
            <!--  <p class="p-sm"><a href="#">Terms & Conditions</a></p>-->
            <!--</div>-->
            <!-- FOOTER SOCIALS LINKS -->
            <div class="col-md-4 col-lg4">
                <a href="https://tekgro.com.au/" target="_blank">
               <span class="dev">Digital Marketing:</span> </a><a href="https://tekgro.com.au/" target="_blank">
                <img class="img-fluid dev-logo" style="width:80px" src="<?php echo get_theme_mod('royal_img1_handle');?>">
              </a>
             
              
            </div>
          </div>
        </div> <!-- END BOTTOM FOOTER -->
      </div>
    </footer>
  </div> <!-- INNER PAGE WRAPPER -->
  </div> <!-- END PAGE CONTENT -->
  <!-- EXTERNAL SCRIPTS
    ============================================= -->
<?php wp_footer(); ?>
<div class="floatingButtonWrap">
    <div class="floatingButtonInner">
        <a href="#" class="floatingButton">
            <i class="fa fa-plus icon-default"></i>
        </a>
        <ul class="floatingMenu">
            <li> <li>
                <a href="#">Chat with Us</a>
            </li>
                        <!-- Messenger Chat plugin Code -->
    <div id="fb-root"">
    
    </div>

 

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

 

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108674737728857");
      chatbox.setAttribute("attribution", "biz_inbox");
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

 

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
            </li>
            <li>
                <a href="#">Book an Appointment
                <div class="book_icon">
                <img src="<?php echo get_template_directory_uri(); ?>/images/headphones-svgrepo-com.svg" height="60" width="60" data-toggle="tooltip" data-placement="top" title="Book with Us!"/>
                </div>
                </a>
            </li>
        </ul>

    </div>
</div>
</body>

</html>
