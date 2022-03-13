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
    'title-sub'=> 'comprehensive platform',
    'title' => 'Meet the Goals of every <br>Marketing, Sales and Service Team',
    'desc' => "Mobio Platform is not just a CDP. It's a package solution to help your business in Marketing, Sales and Service, and of course, customer data management. ",
    'header-img' => get_template_directory_uri(). '/images/Mobio-platform-cdp-cem.png'
  ));
?>

<?php 
  get_template_part('template-parts/product-button', null, 
    array(
      'classExtend' => 'mr-t-100',
      'items' => array(
        array(
          'name'=> 'customer data platform',
          'url' => get_site_url().'/products-cdp'
        ),
        array(
          'name'=> 'marketing management',
          'url' => get_site_url().'/products-marketing'
        ),
        array(
          'name'=> 'sales management',
          'url' => get_site_url().'/products-sale'
        ),
        array(
          'name'=> 'service management',
          'url' => get_site_url().'/products-services-management'
        ),
      )
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-175 mr-t-150-s4',
      'title-sm' => 'how our system works',
      'title' => 'CDP & CEM Platform',
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null, 
    array(
      'img-src' => get_template_directory_uri().'/images/home/Mobio Platform_CDP-CEM.png',
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'Product modules',
      'title' => 'The 4 Modules for every Business',
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
    'name' => '<strong>Customer Data Platform</strong>',
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
    'next-url' => get_site_url() . '/products-cdp'
  )); ?>  


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200 mr-t-150-s4',
    'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'our top feature',
    'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Marketing Management</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    // 'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/overview/marketing.png',
    'desc' => "<p>Create end-to-end and personalized digital campaigns, deliver meaningful messages at the right time, in the right channels, to the right customers. 
    Reach customers across every channel business owns, increasing customer interaction, engagement, and retention. </p>",
    'next-button' => 'Learn more',
    'next-url' => get_site_url() . '/products-marketing'
  )); ?>  

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200 mr-t-150-s4',
    // 'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'The rising star',
    'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Sales Management</strong>',
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
    'next-url' => get_site_url() . '/products-sale'
  )); ?>  

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-200 mr-t-150-s4',
    'imageLeft' => '1',
    'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'best performance',
    'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Service Management</strong>',
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
    'next-url' => get_site_url() . '/products-services-management'
  )); ?>  



<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-250 mr-t-150-s4',
      'title' => 'Wanna dig a little deeper into our features?',
      'next-button' => 'contact sales',
      'next-url' => get_site_url().'/contact'
    )
  );
?>

<?php 
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250 mr-t-150-s4'
    ));
?>

<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-250 mr-t-150-s4'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>