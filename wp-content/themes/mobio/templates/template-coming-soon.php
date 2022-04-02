<?php
/**
 * Template Name: Coming Soon Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<body class="b-g-b vh-100">
  <div class="coming-soon-container h-100">
    <div class="auto-container text-center pa-b-100 pa-b-50-s0">
      <a href="<?php echo get_site_url(); ?>">
        <img class="menu-logo mr-t-50 mr-t-20-s0" src="<?php  echo get_template_directory_uri() . '/images/logo-gray.svg' ?>" />
      </a>

      <div class="upper-case c-fff f-b f-70 mr-t-100  mr-t-80-s0 f-44-s0"><p>coming soon</p></div>
      <div class="w-600 f-n f-20 c-fff mr-t-30 mr-auto mr-t-30-s0 f-16-s0 mr-auto w-300-s0"><p>We will be landing this site soon. Add your email below and be among the first to know when we officially take fight.</p></div>
      <div class="input-wrap email-submit input-border-left input-wrap-action w-600 w-350-s0 mr-auto mr-t-45">
        <input placeholder="Enter your email address" /> 
        <div class="input-action f-b f-18 c-fff h-100 d-flex justify-content-center align-items-center cursor-pointer"><p>Submit</p></div>
      </div>
      <!-- socials -->
      <div class="d-flex justify-content-center mr-t-80  mr-t-50-s0">
        <a href="#" class="social-link mr-r-15">
          <img src="<?php  echo get_template_directory_uri() ?>/images/facebook.png" />
        </a>
        <a href="#" class="social-link mr-r-15">
          <img src="<?php  echo get_template_directory_uri() ?>/images/instagram.png" />
        </a>
        <a href="#" class="social-link">
          <img src="<?php  echo get_template_directory_uri() ?>/images/youtube.png" />
        </a>
      </div>
    </div>
  </div>

</body>
</html>
