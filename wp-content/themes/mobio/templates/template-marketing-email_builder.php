<?php
/**
 * Template Name: Marketing Email Builder Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<!-- header -->
<?php get_template_part('template-parts/header-page',null,
    array( 
      'title' => 'Mobio marketing management',
      'name' => 'Meet Email Builder',
      'desc' => 'Save up to 75% on development time — without additional headcount. Build more effective emails, faster to scale efforts and drive better results.'
    )); ?>


  <?php get_template_part('template-parts/row-content-two',null,
      array( 
        'imageLeft' => 1,
        'name' => 'Your email is a part of the <strong>seamless journey</strong>.',
        'nameClass' => 'f-48',
        'classExtend' => 'mr-t-150',
        'classColContent' => 'mo-col-5',
        'classColImage' => 'mo-col-7',
        'classContent' => 'pa-l-80 pa-r-30',
        'desc' => '<p>Email Marketing is crucial but email alone can’t be enough. Email Marketing will work best when it’s a part of the entire journey and combine with other channel to interact with customer. We here provide you a complete solution for your email marketing, and let it harmonize with the marketing master campaign.</p>',
        'next' => 'See journey Builder >>',
        'img-src' => get_template_directory_uri(). '/images/product/marketing/email-builder-header.png',
        'next_url' => '#'
      )); ?>

  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-250',
        'title' => 'Create email in your own style',
        'desc' => 'Build email template in your unique style with our drag-and-drop interface. We are confident that everything you need in an email campaign, we have it all, and even exceed your expectations.'
      )); ?>
  
  <?php get_template_part('template-parts/feature-image',null,
      array( 
        'img-src' => get_template_directory_uri(). '/images/product/marketing/email-builder-visual.png'
      )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-250',
        'title' => 'Or start with our Premade Templates',
        'desc' => 'Our templates are trusted by top enterprises and proven to be user-friendly and effective, help you to optimize open and conversion rate'
      )); ?>
  
  <?php get_template_part('template-parts/feature-image',null,
    array(
      'img-src' => get_template_directory_uri(). '/images/product/marketing/email-builder-2.png'
    )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-200',
        'title' => 'Why choose us?',
        'desc-top' => 'There are so many other email platform.'
      )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
      array( 
        'imageLeft' => 0,
        'nameClass' => 'f-48',
        'classExtend' => 'mr-t-100',
        'classContent' => 'pa-l-40 pa-r-40',
        'classImageContainer' => '',
        'classColImage' => 'mo-col-7',
        'classColContent' => 'mo-col-5',
        'classImageRatio' => 'rt-3-4',
        'desc' => '<p class="lh2"><strong>Ease of Use</strong><br><br>
              Build and send in minutes with the drag-and-drop email builder—no coding required.<br><br>
              <strong>Complete Customization</strong><br><br>
              Customize our premade templates, or upload your HTML email templates.<br><br>
              <strong>Mobile and Tablet Optimization</strong><br><br>
              Make sure your emails are at a good shape on every devices your customers use.<br><br>
              <strong>Share for All Team</strong><br><br>
              Save your designed templates for entire team to use, and ensure consistent branding.<br><br>
              <strong>All-in-one Platform</strong><br><br>
              Not only use email builder, you can also combine with other tools in our platform and optimize your marketing execution without the need to switch through so many vendors. </p>',
        'img-src' =>  get_template_directory_uri(). '/images/product/marketing/email-builder-3.png'
      )); ?>
    
    <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-250',
        'title-sm' => 'email in action',
        'title' => 'There’re Many Cool Things You Can Do',
      )); ?>
    
    <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 0,
          'nameClass' => 'f-48',
          'classExtend' => 'mr-t-50',
          'classContent' => 'pa-l-40 pa-r-40',
          // 'classImageContainer' => 'h-100',
          'classColImage' => 'mo-col-7',
          'classColContent' => 'mo-col-5',
          
          'desc' => '<p class="lh5">Send email to your target audiences and get notice at every step they take in their mail box. You can choose which link or button you want to track and how your customers interact with it.<br> 
                &nbsp; &bull; &nbsp; Register multiple domains <br>
                &nbsp; &bull; &nbsp; Email Address Verify for a clean and clear email list <br>
                &nbsp; &bull; &nbsp; Add Behavior Tag to see customer interests <br>
                &nbsp; &bull; &nbsp; Track link to see how well your campaign performs. </p>',
          'img-src' => get_template_directory_uri() .'/images/product/marketing/email-builder-4.png',
            'next-button' => 'REQUEST A DEMO',
            'next-url' => '#'
        )); ?>

  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title-sm' => 'email reports',
        'title' => 'Detail Reports that show Insights',
      )); ?>
  
  <?php get_template_part('template-parts/feature-image',null,
    array(
      'class-image-wrapper' => 'w-600 mr-auto w-300-s1',
      'img-src' => get_template_directory_uri() .'/images/product/marketing/email-builder-5.png',
    )); ?>

  <?php get_template_part('template-parts/quote-site',null,
    array(
      'classExtend' => 'mr-t-250',
      'color' => 'c-000',
      'classContainer' => 'b-sd auto b-fff b-r-10',
      'desc' => '“Mobio Email Builder is my dream tool."',
      'name' => 'Mr. Nguyen Van Dzung - Marketing Executive at BIDV',
    )); ?>
  <!-- <div class="mo-row mr-t-250 mr-b-160 mr-l-40 mr-r-40 b-sd auto pa-t-80 pa-b-80 b-r-15">
    <div class="mr-auto avatar-container">
      <img src="<?php echo get_template_directory_uri() . '/images/product/marketing/avatar.png' ?>" />
    </div>
    <div class="f-b f-34 text-center mr-t-30"><p>“Mobio Email Builder is my dream tool. Why have I never use this before?”</p></div>
    <div class="f-n f-25 text-center mr-t-20"><p>Mr. Nguyen Van Dzung - Marketer at BIDV Bank / at one of the biggest banks in Vietnam</p></div>
  </div> -->

  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title' => 'Some Documents You Might Find Helpful',
        'desc' => 'Don’t forget to check out our ultimate guidelines for a successful email marketing campaign. <br> With our strong experience consulting top brands, we believe there would be something helpful for you!'
      )); ?>
  <?php
      get_template_part('template-parts/document-library', null,
        array(
          'no-title' => true,
          'classExtend' => 'mr-t-250'
        ));
    ?>

  <?php get_template_part('template-parts/footer-contact', null,
      array( 
        'title' => 'Curious about Email Builder? There’re lots more to explore!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>