<?php
/**
 * Template Name: Contact Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<?php 
  $email = $_GET['email'];
?>
  <body class="b-g-b">
    <div class="auto b-fff" style="margin-bottom: 450px;">
      <div class="auto-container"> 
        <div class=" mr-t-30 mr-b-80 mr-b-40-s4 mr-b-20-s0 mr-l-20-s0">
          <a href="<?php echo get_site_url(); ?>">
            <img class="menu-logo" src="<?php  echo get_template_directory_uri() . '/images/logo-blue.svg' ?>" />
          </a>
        </div>
        
        <div class="mo-col-6 pa-b-60 mo-col-12-s0 pa-20-s0">
          <div class="f-b f-64 f-36-s4 c-4-b w-700 w-550-s4 f-24-s0 w-300-s0"><p>Trusted by top Banks, Enterprises and Brands in Vietnam</p></div>
          <div class="f-n f-24 f-18-s4 w-650 mr-t-35 w-550-s4 mr-t-15-s0 f-14-s0 w-300-s0"><p>As a tech consulting firm and a platform provider, we have tons of experience in support companies address their business challenges. Our experts are here to listen and show you how our platform can help you. <br><br>
          <strong>Fill in the form or call <a href="tel:+84 90 343 9982">+84 90 343 9982</a></strong></p></div>
        </div>
      </div>
    </div>

    <div class="mr-t-20-s0 mr-l-20-s0 mr-r-20-s0">
      <div class="contact-form b-sd auto position-absolute mr-b-20 pa-l-65 pa-r-65 pa-l-40-s4 pa-r-40-s4 pa-t-70 pa-b-35 pa-t-40-s4 pa-b-30-s4
         b-r-10 mo-col-12-s0 f-18 f-14-s4 pa-20-s0 f-14-s0 mr-b-20-s0">
        <div class="text-center f-b f-36 f-20-s4 f-20-s0"><p>Talk To Our Expert</p></div>
        <div class="f-n f-22 f-18-s4 text-center mr-t-15 f-14-s0"><p>Tell us your requirements and we’ll reach you shortly!</p></div>
        <div class="mo-row row mr-t-50 mr-t-20-s0">
          <div class="mo-col-6 pa-r-10">
            <div class="f-b mr-b-5"><p>FIRST NAME*</p></div>
            <input placeholder="First name" />
          </div>
          <div class="mo-col-6 pa-l-10">
            <div class="f-b mr-b-5"><p>LAST NAME*</p></div>
            <input placeholder="First Name" />
          </div>
        </div>

        <div class="f-b mr-t-20 mr-b-5"><p>EMAIL*</p></div>
        <input placeholder="Work Email" value="<?php echo $email ? $email : '' ; ?>" />

        <div class="mo-row row mr-t-20">
          <div class="mo-col-6 pa-r-10">
            <div class="f-b mr-b-5"><p>COMPANY*</p></div>
            <input placeholder="Company Name" />
          </div>
          <div class="mo-col-6 pa-l-10">
            <div class="f-b mr-b-5"><p>JOB POSITION*</p></div>
            <input placeholder="Job Position" />
          </div>
        </div>

        <div class="mo-row row mr-t-20">
          <div class="mo-col-6 pa-r-10">
            <div class="f-b mr-b-5"><p>COUNTRY*</p></div>
            <input placeholder="Select Country" />
            <!-- <select class="">
              <option>Select Country</option>
              <option>Việt Nam</option>
              <option>USA</option>
              <option>USA</option>
            </select> -->
          </div>
          <div class="mo-col-6 pa-l-10">
            <div class="f-b mr-b-5"><p>PHONE</p></div>
            <input placeholder="Phone Number" />
          </div>
        </div>

        <div class="f-b mr-t-20 mr-b-5"><p>REQUEST</p></div>
        <textarea placeholder="Tell us something about your business and your needs"></textarea>

        <div class="mr-t-20 f-n f-14 f-12-s0">
          <p>MOBIO needs the contact information you provide to contact you about our product & services. You may unsubcribe at anytime. For more information on how to unsubscribe & our privacy practises, please review our privacy policy. </p>
        </div>

        <div class="text-center mr-t-30 mr-t-20-s0">
          <button>SUBMIT</button>
        </div>

      </div>
    </div>
    
    

  </body>
</html>