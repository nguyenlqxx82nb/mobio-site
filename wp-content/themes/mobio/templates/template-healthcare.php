<?php
/**
 * Template Name: Healthcare Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?> 
<!-- header -->
<?php get_template_part('template-parts/header-product',null,
  array( 
    'title-sub' => 'industry | healthcare',
    'title' => 'Customer Engagement to Heal the Pain of Healthcare Services',
    'desc' => "Consumers today are more and more aware of personal care and health services. If you are running a healthcare business, 
      this is the perfect time to leverage your game and become the cock of the walk.",
    'header-img' => get_template_directory_uri(). '/images/industry-healthcare/healthcare-header-2.png'
  ));
?>

<?php 
  get_template_part('template-parts/top-tenant-retail', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-120-s4',
      'title' => 'trusted by large firms in vietnam'
    )
  )
?>

<?php 
  get_template_part('template-parts/industry-insights', null,
    array(
      'classExtend' => 'mr-t-175 mr-t-200-s4',
      'title' => 'industry insights',
      'name' => 'Perspectives On Healthcare',
      'desc' => 'The Healthcare industry is massive and continues to grow fast in recent years, becoming more and more competitive. 
      <br>These trends and insights are up-to-date with statistics provided by Deloitte, McKinsey, PwC, and opinions of C-suite leaders and experts in the fields. ',
      'items' => array(
        array(
          'icon' => get_template_directory_uri().'/images/industry-healthcare/heathcare-security.svg',
          'title' => 'privacy &<br> security first',
          'desc' => 'Privacy and security are always in the top of mind for healthcare service.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-healthcare/heathcare-service.svg',
          'title' => 'Service <br> is key',
          'desc' => 'Patients want a comfortable clinic service and won’t hesitage to leave if the services don’t meet their expectation.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-healthcare/healthcare-o2o.svg',
          'title' => 'O2O patient<br> experience',
          'desc' => 'Since the outbreak, people work online, shop online and want to be taking care online as well.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-healthcare/heathcare-target.svg',
          'title' => 'targeted <br> & personalized care',
          'desc' => 'Each patients need different treatments and it’s crucial to give them a personalized care.'
        )
      ),
      'next-url' => '#'
    ))
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-200 mr-t-200-s4',
      'title-sm' => 'how can we help?',
      'title' => 'Boost Patient Satisfaction and a Better Quality of Care', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-100',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'cdp data collection',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Serve your patients from <strong>online to offline</strong>',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-healthcare/healthcare-cdp.png',
    'desc' => "<p>By using a CDP, healthcare businesses not only gather customer feedback but also make it easy to create customer-centric roadmaps based on 
    this feedback and help connect customer data to the best-in-class stack necessary to create an excellent customer experience.</p>",
    'next' => 'Explore our possibilities >>',
    'next_url' => get_site_url(). '/products-cdp',
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'survey form',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Easily collect</strong> your patients’ opinions and reviews',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-healthcare/healthcare-survey.png',
    'desc' => "<p>Surveys are the most cost-effective and reliable approach to collecting your patients’ opinions. With Mobio survey form that connects directly to CDP, you can gather patients’ reviews and have 
    a deeper understanding of what your clinic’s strengths are, attracting and maintaining long-term patient relationships.</p>",
    //'next' => 'Explore our possibilities >>',
    //'next_url' => get_site_url(). '/products-cdp',
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    // 'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'customer conversation',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Make your patients feel <strong>safe and sound</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-healthcare/healthcare-chat.png',
    'desc' => "<p>Give your customer a 5-star service with our Services Management. We also provide smart response rules that help your team reply to customers in under a minute and minimize your churn rate! But wait! There are more!</p>",
    'next' => 'Explore our possibilities >>',
    'next_url' => get_site_url (). '/service-customer-response',
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'journey builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Seamless & personalized</strong> patient experience',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-healthcare/healthcare-jb.png',
    'desc' => "<p>CX is a vital component in today's healthcare service as patients now want a fulfill personalized experience. Mobio helps healthcare business keep their eyes off patients from the moment they first visit your site, to the time they first make their first apointment, and help you upsell, cross-sell using voucher strategy.</p>",
    'next' => 'Explore our possibilities >>',
    'next-url' => get_site_url (). '/mkt-journey-builder',
  )); ?>


<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-175 mr-t-200-s4',
      'title-sm' => 'library',
      'title' => 'Most helpful paper selected by our customers',
    )); ?>
  
  
<?php get_template_part('template-parts/row-content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'content' => array(
      array(
        'title' => 'Why 2022 is the year for Retailer to use CDP?',
        'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
        'next' => 'Download Ebook >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library1.jpg'
      ),
      array(
        'title' => 'How Customer Behavior Changes In Post-covid?',
        'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain ourself.',
        'next' => 'See Guideline >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library2.jpg'
      ),
      array(
        'title' => 'How Banking Industry Adapts to the Digital Era?',
        'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
        'next' => 'Read Blog Post >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library3.jpg'
      )
    )
  )); ?>


<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-250 mr-t-200-s4'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>