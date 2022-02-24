<?php
/**
 * Template Name: Products Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 

<?php get_template_part('template-parts/header-product',null,
  array( 
    'title' => 'Meet The Goals Of Every Marketing, Sales And Service Team',
    'desc' => "Mobio Platform is not just a CDP. It's a package solution to help your business in Marketing, Sales and Service, and of course, customer data management. ",
    'header-img' => get_template_directory_uri(). '/images/product/overview/header.png'
  ));
?>

<?php 
  get_template_part('template-parts/product-button', null, 
    array(
      'classExtend' => 'mr-t-100',
      'items' => array(
        array(
          'name'=> 'customer data platform',
          'url' => '#'
        ),
        array(
          'name'=> 'marketing management',
          'url' => '#'
        ),
        array(
          'name'=> 'sales management',
          'url' => '#'
        ),
        array(
          'name'=> 'service management',
          'url' => '#'
        ),
      )
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-175',
      'title-sm' => 'Product',
      'title' => 'CDP x CEM',
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null, 
    array(
      'img-src' => get_template_directory_uri().'/images/home/mobio_platform.png',
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'Product modules',
      'title' => 'The 4 Modules For Every Business',
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-100',
    // 'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'The heart of our product',
    'title-class' => 'f-18 c-1-b',
    'name' => 'Customer Data Platform',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/overview/cdp.png',
    'desc' => "<p>Record and track customers’ online behavior across devices in real-time, gather insights on customers’ data trails, 
    and be supplemented by other owned data sources. CDP provides a 360-degree view of customers, creating the foundation for an omnichannel customer experience.</p>",
    'next-button' => 'Learn more',
    'next-url' => '#'
  )); ?>  


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200',
    'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'our top feature',
    'title-class' => 'f-18 c-1-b',
    'name' => 'Marketing Management',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/overview/marketing.png',
    'desc' => "<p>Create an end-to-end and personalized digital campaign, deliver meaningful messages at the right time, in the right channel, to the right customer. 
    Reach customers across every channel your company owns, increasing customer interaction, engagement, and retention. </p>",
    'next-button' => 'Learn more',
    'next-url' => '#'
  )); ?>  

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200',
    // 'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'The rising star',
    'title-class' => 'f-18 c-1-b',
    'name' => 'Sales Management',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/overview/sales.png',
    'desc' => "<p>Gather information and contact details of potential leads, and provide lead scoring to analyze leads quality. Let sales managers track team member performance and ensure KPI progress. 
    This also helps teams manage personal tasks to stay on track, and include communication tools to contact customers directly from the platform. </p>",
    'next-button' => 'Learn more',
    'next-url' => '#'
  )); ?>  

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200',
    'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'best performance',
    'title-class' => 'f-18 c-1-b',
    'name' => 'Service Management',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/overview/service.png',
    'desc' => "<p>This module was built specifically for the Customer Success team to connect and interact with customers in real-time via social channels and web live chat. 
      Build Loyalty program to engage customers and expand purchasing lifecycle. 
      Let no customer issues behind with Ticket Management System.</p>",
    'next-button' => 'Learn more',
    'next-url' => '#'
  )); ?>  



<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-250',
      'title' => 'Want To Learn Deeper About Our Features?',
      'next-button' => 'contact sales',
      'next-url' => get_site_url().'/contact'
    )
  );
?>

<?php 
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-250'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>