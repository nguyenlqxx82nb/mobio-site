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
  <body class="b-g-b vh-100">
    <div>

    </div>
    <div class="auto b-fff">
      <div class="auto-container auto"> 
        <div class=" mr-t-30 mr-b-80 mr-b-20-s1 mr-l-20-s1">
          <a href="<?php echo get_site_url(); ?>">
            <img class="menu-logo" src="<?php  echo get_template_directory_uri() . '/images/mobio-logo-blue.png' ?>" />
          </a>
        </div>
        
        <div class="mo-col-6 pa-b-60 mo-col-12-s1 pa-20-s1">
          <div class="f-b f-64 c-4-b w-700 f-24-s1 w-300-s1"><p>Trusted by top Banks, Enterprises and Brands in Vietnam</p></div>
          <div class="f-n f-24 w-650 mr-t-35 mr-t-15-s1 f-14-s1 w-300-s1"><p>As a tech consulting firm and a platform provider, we have tons of experience in support companies address their business challenges. Our experts are here to listen and show you how our platform can help you. <br><br>
          <strong>Fill in the form or call <a href="tel:+84 90 343 9982">+84 90 343 9982</a></strong></p></div>
        </div>
      </div>
    </div>

    <div class="mr-t-20-s1 mr-l-20-s1 mr-r-20-s1">
      <div class="contact-form b-sd auto position-absolute pa-l-65 pa-r-65 pa-t-70 pa-b-35 b-r-10 mo-col-12-s1 f-18 pa-20-s1 f-14-s1 mr-b-20-s1">
        <div class="text-center f-b f-36 f-20-s1"><p>Talk To Our Expert</p></div>
        <div class="f-n f-22 text-center mr-t-15 f-14-s1"><p>Tell us your requirements and we’ll reach you shortly!</p></div>
        <div class="mo-row row mr-t-50 mr-t-20-s1">
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
        <input placeholder="Work Email" />

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

        <div class="mr-t-20 f-n f-14 f-12-s1">
          <p>MOBIO needs the contact information you provide to contact you about our product & services. You may unsubcribe at anytime. For more information on how to unsubscribe & our privacy practises, please review our privacy policy. </p>
        </div>

        <div class="text-center mr-t-30 mr-t-20-s1">
          <button>SUBMIT</button>
        </div>

      </div>
    </div>
    
    

  </body>
</html>