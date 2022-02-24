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
          'name' => 'Why choose Mobio?',
          'desc' => 'You might have heard a lot about CDP. But have you ever heard of Operation CDP and did you ever try it? 
            Mobio CDP is an Operation CDP that provides all business operation tools, from collecting data from various sources to activating data for marketing, sales, and service activities.',
          'desc-class' => 'f-n f-18'
        )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-100',
    'title-sm' => 'ticketing system',
    'title' => 'Organize, Prioritize, And Consolidate Support Requests',
    'desc' => 'Ticketing systems enable organizations to quickly assign inquiries to the most relevant agent, provide context to customer interactions, and track inquiries from customers. The system also provides a shared inbox which helps support staff coordinate their efforts.',
    'desc-w' => 'w-1250'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-200',
    'title-sm' => 'mobio platform',
    'title' => 'How Mobio System works?',
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
  )); ?>



<!-- PLATFORM -->
<?php 
  get_template_part('template-parts/tab-platform',null,
      array( 
        'classExtend' => 'mr-t-250',
        'items' => array(
          array(
            'title' => 'CDP',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png',
              'title' => 'mobio platform',
              'name' => 'Customer Data Platform',
              'desc' => 'Mobio Operation CDP is a comprehensive customer data platform that expends from collecting and managing data, to activating data for marketing, 
                    sales, and service activities. All customer touchpoints and digital footprint are tracked and stored in data storage to create a 360 degree customer view.',
              'next_url' => '#',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'marketing management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png',
              'title' => 'mobio platform',
              'name' => 'Customer Data Platform',
              'desc' => 'Mobio Operation CDP is a comprehensive customer data platform that expends from collecting and managing data, to activating data for marketing, 
                    sales, and service activities. All customer touchpoints and digital footprint are tracked and stored in data storage to create a 360 degree customer view.',
              'next_url' => '#',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'sales management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png',
              'title' => 'mobio platform',
              'name' => 'Customer Data Platform',
              'desc' => 'Mobio Operation CDP is a comprehensive customer data platform that expends from collecting and managing data, to activating data for marketing, 
                    sales, and service activities. All customer touchpoints and digital footprint are tracked and stored in data storage to create a 360 degree customer view.',
              'next_url' => '#',
              'next' => 'Learn more'
            )
          ),
          array(
            'title' => 'service management',
            'content' => array(
              'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png',
              'title' => 'mobio platform',
              'name' => 'Customer Data Platform',
              'desc' => 'Mobio Operation CDP is a comprehensive customer data platform that expends from collecting and managing data, to activating data for marketing, 
                    sales, and service activities. All customer touchpoints and digital footprint are tracked and stored in data storage to create a 360 degree customer view.',
              'next_url' => '#',
              'next' => 'Learn more'
            )
          ),
        )
      )); 
  ?>


  <!-- TENANT -->
  <?php get_template_part('template-parts/top-tenant-enterprise',null,
                        array( 
                          'classExtend' => 'mr-t-300',
                          'title' => 'trusted by top banks and enterprises in vietnam'
                        )); ?>


  <?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-300',
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
          'classExtend' => 'mr-t-300',
          'desc' => '&#60;a quote said by anh Hung&#62;',
          'name' => 'Le Hung - Mobio CEO'
        )
    ); ?>
  
  <?php get_template_part('template-parts/customer-stories', null,
      array (
        'classExtend' => 'mr-t-300'
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