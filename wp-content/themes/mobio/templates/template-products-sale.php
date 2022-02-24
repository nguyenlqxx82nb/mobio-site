<?php
/**
 * Template Name: Products Sale Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 
<!-- header -->
<?php 
  get_template_part('template-parts/header-page',null,
                          array( 
                            'title' => 'Mobio sales management',
                            'name' => 'Growing relationships and closing deals - anytime, anywhere',
                          )); 
?>




  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'Mobio sales management',
                          'title' => 'Meet Mini CRM: A Minimal System To Minimize Your Effort'
                        )); ?>

  <?php get_template_part('template-parts/feature-image',null,
                        array( 
                          'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png'

                         )); ?>
  
  <?php get_template_part('template-parts/top-tenant-enterprise',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                        )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-200',
                          'title-sm' => 'how it helps',
                          'title' => 'Sales Toolkit That Focus On <span style="color: #4BBFEB; text-decoration: underline;">What Matters Most</span>',
                        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'lead distribution',
                          'name' => 'Auto <strong>distribute qualify leads</strong> to the right sales team ',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'classImageContainer' => 'pa-20 b-sd b-r-10',
                          'divider' => 1,
                          'desc' => '<p>Intelligence algorithms helps sales manager determine which lead is a good fit for their team, thereby, sales manager can distribute lead themselves. Plus, the lead quality is being updated and upgraded constantly by CDP and Marketing modules, helps sales team know which lead is qualified and is ready to sales.</p>',
                          'img-src' => get_template_directory_uri(). '/images/product/sales/sale-2.png',
                          'next-button' => 'LEARN MORE',
                          'next_url' => '#'
                        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'Sales pipeline',
                        'name' => 'Manage your own <strong>sales process</strong> efficently',
                        'nameClass' => 'f-n f-56',
                        'classExtend' => 'mr-t-250',
                        'classImageRatio' => 'rt-3-4',
                        'classImageContainer' => 'pa-20 b-sd b-r-10',
                        'divider' => 1,
                        'desc' => '<p>Sales pipelines show you how many deals salespeople are expected to close in a given week, month or year and how close a rep is to reaching their sales quota.</p>',
                        'next-button' => 'LEARN MORE',
                        'next_url' => '#',
                        'img-src' => get_template_directory_uri(). '/images/product/sales/sale-3.png',
                      )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'deal automation',
                          'name' => 'Just focus on closing deals, everything else is automatically done',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'classImageContainer' => 'pa-20 b-sd b-r-10',
                          'divider' => 1,
                          'img-src' => get_template_directory_uri(). '/images/product/sales/sale-3.png',
                          'desc' => '<p>An if-then-structure tool for sales team to automate their sales process, cut down prolix steps and let sales team focus on connecting with customers and closing deals. Add, manage, categorize, track properties, prepare contracts, and everything else are done automatically at every stage. </p>',
                        )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'Personal task management',
                        'name' => 'Keep every task off your plate and <strong> miss no deadline </strong>',
                        'nameClass' => 'f-n f-56',
                        'classExtend' => 'mr-t-250',
                        'divider' => 1,
                        'desc' => '<p>A comprehensive platform for sales team to grow relationship with customers through Call Center, Email Management, Meeting Schedule through Calendar and Task Management. Every interaction between sales and customers is tracking and stored on the Deal History, helps sales and manager can look it up every time, every where in need.</p>',
                        'next-button' => 'LEARN MORE',
                        'next_url' => '#',
                      )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'product library',
                          'name' => 'Store all your files and agreements <strong>in one place</strong>',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-150',
                          'divider' => 1,
                          'desc' => '<p>Every deal and process are attached to one or many products or services. Imagine salesman land a deal something and couldn’t find the right contact for your deal. // There are plenty of document for each type of contract and it’s hard to manage them all by yourself</p>',
                        )); ?>

  <?php get_template_part('template-parts/section-title',null,
                      array( 
                        'classExtend' => 'mr-t-300',
                        'title-sm' => 'mini crm',
                        'title' => 'Sales Management Feature list',
                      )); ?>

  
  
  <?php get_template_part('template-parts/sale-feature-list',null,
          array( 
            'classExtend' => 'mr-t-70',
            'items' => array(
              array(
                'title' => 'Deal Distribution',
                'content' => array(
                  'img-src' => get_template_directory_uri(). '/images/product/sales/sale-2.png'
                )
              ),
              array(
                'title' => 'Sales Pipeline',
                'content' => array(
                  'img-src' => get_template_directory_uri(). '/images/product/sales/sale-2.png'
                )
              ),
              array(
                'title' => 'Personal Task',
                'content' => array(
                  'img-src' => get_template_directory_uri(). '/images/product/sales/sale-3.png'
                )
              ),
              array(
                'title' => 'Product Library',
                'content' => array(
                  'img-src' => get_template_directory_uri(). '/images/product/sales/sale-1.png'
                )
              ),
              array(
                'title' => 'Reports',
                'content' => array(
                  'img-src' => get_template_directory_uri(). '/images/product/sales/sale-2.png'
                )
              ),
            )
          )); ?>


  <?php
    get_template_part('template-parts/customer-stories', null,
      array(
        'no-title' => false,
        'classExtend' => 'mr-t-250'
      ));
  ?>

  <?php
    get_template_part('template-parts/document-library', null,
      array(
        'no-title' => false,
        'classExtend' => 'mr-t-250'
      ));
  ?>

  <?php get_template_part('template-parts/footer-contact', null,
      array( 
        'title' => 'Curious about Mobio Sales Management? There are a lot to explore!'
      )
    ); ?>


  <?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>