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
    <div class="auto-container text-center pa-b-100 pa-b-50-s1">
      <a href="<?php echo get_site_url(); ?>">
        <img class="menu-logo mr-t-50 mr-t-20-s1" src="<?php  echo get_template_directory_uri() . '/images/mobio-logo-white.png' ?>" />
      </a>

      <div class="upper-case c-fff f-b f-120 f-70-s4 mr-t-200 mr-t-100-s4  mr-t-80-s1 f-44-s1"><p>coming soon</p></div>
      <div class="w-600 f-n f-22 f-20-s4 c-fff mr-t-30 mr-auto mr-t-30-s1 f-16-s1 mr-auto w-300-s1"><p>We will be landing this site soon. Add your email below and be among the first to know when we officially take fight.</p></div>
      <div class="input-wrap email-submit input-border-left input-wrap-action w-600 w-350-s1 mr-auto mr-t-45">
        <input placeholder="Enter your email address" /> 
        <div class="input-action f-b f-20 f-18-s4 c-fff h-100 d-flex justify-content-center align-items-center"><p>Submit</p></div>
      </div>
      <!-- socials -->
      <div class="d-flex justify-content-center mr-t-120 mr-t-80-s4  mr-t-50-s1">
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
