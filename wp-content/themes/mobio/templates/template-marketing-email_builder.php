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
      'desc' => 'Save up to 75% on development time — without additional headcount. Build more effective emails, faster to scale efforts and drive better results.',
      'img-src' => get_template_directory_uri() . '/images/product/marketing/email-header.png'
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
        'classExtend' => 'mr-t-250 mr-t-150-s4',
        'title' => 'Create email in your own style',
        'desc' => 'Build email template in your unique style with our drag-and-drop interface. We are confident that everything you need in an email campaign, we have it all, and even exceed your expectations.'
      )); ?>
  
  <?php get_template_part('template-parts/feature-image',null,
      array( 
        'img-src' => get_template_directory_uri(). '/images/product/marketing/email-visual.png'
      )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-250 mr-t-150-s4',
        'title' => 'Or start with our Premade Templates',
        'desc' => 'Our templates are trusted by top enterprises and proven to be user-friendly and effective, <br>help you to optimize open and conversion rate'
      )); ?>
  
  <?php get_template_part('template-parts/feature-image',null,
    array(
      'img-src' => get_template_directory_uri(). '/images/product/marketing/email-builder-2.png'
    )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-200 mr-t-150-s4',
        'title-sm' => 'why email builder?',
        'title' => 'There are so many other email platform. Why choose us?',
        //'desc-top' => 'There are so many other email platform.'
      )); ?>

<?php 
    get_template_part('template-parts/content-three', null, 
      array(
        'classExtend' => 'mr-t-50',
        'items' => array(
          array(
            'icon-src' => get_template_directory_uri().'/images/product/marketing/email-1.svg',
            'name' => 'All-in-one Platform',
            'desc' => 'You can also use other tools in our platform and optimize your marketing execution without the need to switch through so many vendors. '
          ),
          array(
            'icon-src' => get_template_directory_uri().'/images/product/marketing/email-2.svg',
            'name' => 'Complete customization',
            'desc' => 'Build email templates in your style, or upload your HTML email as your wish.'
          ),
          array(
            'icon-src' => get_template_directory_uri().'/images/product/marketing/email-3.svg',
            'name' => 'PC, Mobile, and Tablet Optimization',
            'desc' => 'Make your emails look good on every device your customers use.'
          ),
        )
      )
    );
  ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-250 mr-t-150-s4',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'email in action',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'There’re many <strong>cool things</strong> you can do',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-40 pa-r-40',

    'img-src' => get_template_directory_uri(). '/images/product/marketing/email-in-action.png',
    'desc' => "<p>
      Send email to your target audiences and get a notice at every step they take in their mailbox.
      You can choose which link or button you want to track and how your customers interact with it. <br>
      &nbsp;&nbsp;&#8226; &nbsp;Register multiple domains<br>
      &nbsp;&nbsp;&#8226; &nbsp;Email Address Verify for a clean and clear email list <br>
      &nbsp;&nbsp;&#8226; &nbsp;Add Behavior Tag to see customer interests<br>
      &nbsp;&nbsp;&#8226; &nbsp;Track link to see how well your campaign performs.
    </p>",
    'next-button' => 'REQUEST A DEMO',
     'next-url' => get_site_url() . '/contact'
  )); ?>
    

  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150 mr-t-150-s4',
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
      'classExtend' => 'mr-t-250 mr-t-150-s4',
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
        'classExtend' => 'mr-t-150 mr-t-150-s4',
        'title-sm' => 'library',
        'title' => 'Some documents you might find helpful',
        'desc' => 'Don’t forget to check out our ultimate guidelines for a successful email marketing campaign. <br> With our strong experience consulting top brands, we believe there would be something helpful for you!'
      )); ?>
  <?php
      get_template_part('template-parts/document-library', null,
        array(
          'no-title' => true,
          'classExtend' => 'mr-t-250 mr-t-150-s4'
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