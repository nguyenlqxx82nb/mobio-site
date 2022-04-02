<?php
/**
 * Template Name: Why Mobio Template
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
    'title' => 'why us?',
    'name' => 'What makes us different?',
    'bg-class' => 'header-why-mobio',
    'class-col-left' => 'mo-col-8',
    'class-col-right' => 'mo-col-4',
    'desc' => 'You might have heard a lot about CDP. But have you ever heard of Operation CDP, and did you ever try it? 
                Mobio CDP is an Operation CDP that provides all business operation tools, from collecting data from various sources to 
                activating data for marketing, sales, and service activities.',
    'desc-class' => 'f-n f-16',
    'desc-w' => 'w-600'
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-100',
    'title-sm' => 'data at the heart of our system',
    'title' => 'How Data plays its role in the Customer Journey',
    'desc' => 'You often hear about the importance of knowing your customers. It’s crucial to learn about their needs, interests, pain points, affinities, and more. Customer Journey Mapping gives you insights into these areas as well as how your customers interact with your company’s products or services.',
    'desc-w' => 'w-900'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 'img-src' => get_template_directory_uri(). '/images/why-mobio/mobio_customer-360-degree.png',
    'classExtend' => '',
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'MOBIO SYSTEM',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>How Mobio System works?</strong>',
    'nameClass' => 'f-n f-40',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/why-mobio/mobio-platform.png',
    'desc' => "<p>Mobio Platform is a comprehensive system that includes Marketing, Sales, Service operation tools with CDP to collect and manage data.</p>
    <p class='mr-t-10'>The Platform is a self-closing process that collects every customer's digital footprint across channels and uses that to run a customization marketing campaign, close deals, and provide customer service, then the data of customer behavior interacted with the business will go back and enrich the CDP.</p>
    <p class='mr-t-10'>A cycle keeps going on to build a 360-degree customer view.</p>",
      )); ?>

<!-- PLATFORM -->
<?php 
  get_template_part('template-parts/tab-platform',null,
      array( 
        'classExtend' => 'mr-t-150',
        'items' => array(
          array(
            'title' => 'CDP',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/why-mobio/why-us-cdp-2.png',
              'title' => 'mobio platform',
              'name' => 'Customer Data Platform',
              'desc' => 'Mobio Operation CDP is a comprehensive customer data platform that expends from collecting and managing data, to activating data for marketing, 
                    sales, and service activities. All customer touchpoints and digital footprint are tracked and stored in data storage to create a 360-degree customer view.',
              'next-url' => get_site_url() . '/products-cdp',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'marketing management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/why-mobio/why-us-marketing-management.png',
              'title' => 'mobio platform',
              'name' => 'Marketing Management',
              'desc' => 'Create end-to-end and personalized digital campaigns, deliver meaningful messages at the right time, in the right channel, to the right customer. 
              Reach customers across every channel your company owns, increasing customer interaction, engagement, and retention.',
              'next-url' => get_site_url() . '/products-marketing',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'sales management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/why-mobio/why-us-sales-management.png',
              'title' => 'mobio platform',
              'name' => 'Sales Management',
              'desc' => 'Gather information and contact details of potential leads, and provide lead scoring to analyze leads quality. Help sales managers track team member performance and ensure KPI progress. 
              Sales Management also helps teams manage personal tasks to stay on track, and include communication tools to contact customers directly from the platform.',
              'next-url' => get_site_url() . '/products-sale',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'service management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/why-mobio/why-us-service-management.png',
              'title' => 'mobio platform',
              'name' => 'Service Management',
              'desc' => 'This module was built specifically for the Customer Success team to connect and interact with customers in real-time via social channels and web live chat. 
              Build Loyalty program to engage customers and expand purchasing lifecycle. Left no customer issues behind with Ticket Management System.',
              'next-url' => get_site_url() . '/products-services-management',
              'next' => 'Learn more'
            )
          ),
        )
      )); 
  ?>


  <!-- TENANT -->
  <?php get_template_part('template-parts/top-tenant-enterprise',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title' => 'trusted by top banks and enterprises in vietnam'
                        )); ?>


  <?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-150',
      'title-sm' => 'why are we different?',
      'title' => '<p>Why Enterprises Choose Mobio?</p>',
    )); ?>

  <?php get_template_part('template-parts/why-choose-mobio',null,
        array(
          'not-title' => true
         )
    ); ?>

  <?php get_template_part('template-parts/quote-site',null,
        array( 
          'classExtend' => 'mr-t-150',
          'avatar' => get_template_directory_uri() . '/images/anh-Hung-CEO.jpg',
          'desc' => '“At MOBIO, we always care about the Value! <br><br>
 
          The Value we make, the Value we bring to our customers.<br><br> 
           
          Software/Solution/IT things are expensive and always take a big chunk of every company’s cost. 
          By combining Marketing Tools, Sale Tools, Service Tool on top of an All-in-One Data Platform and offering 
          as a SaaS, we believe it will cut down a lot of investment & integration costs but in the meantime, it also 
          push the digital transformation process of Enterprise 2-3 time faster.<br><br> 
           
          That is the Value we offer!"',
          'name' => 'Le Hung',
          'subTitle' => 'CEO, Mobio JSC'
        )
    ); ?>
  
  <?php get_template_part('template-parts/customer-stories', null,
      array (
        'classExtend' => 'mr-t-150'
      )
    ); ?>
  

  <?php get_template_part('template-parts/footer-connect', null,
      array (
        'classExtend' => 'mr-t-150'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>