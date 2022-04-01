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
get_template_part('template-parts/header-product',null,
  array( 
    'title-sub'=> 'Mobio sales management',
    'title' => 'Growing relationships and <br> closing deals - anytime, anywhere',
    'contact' => "1",
    'header-img' => get_template_directory_uri(). '/images/product/sales/sales-header.png'
  ));
?>
  
  <?php get_template_part('template-parts/top-tenant-enterprise',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                        )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'how it helps',
                          'title' => 'Sales toolkit that focuses on <span class="hl-text">what matters most</span>',
                        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'lead distribution',
                          'name' => 'Auto <strong>distribute qualify leads</strong> to the right sales team',
                          'nameClass' => 'f-n f-40',
                          'classExtend' => 'mr-t-100',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'desc' => '<p>Intelligence algorithms helps sales manager determine which lead is a good fit for their team, thereby, sales manager can distribute lead themselves. Plus, the lead quality is being updated and upgraded constantly by CDP and Marketing modules, helps sales team know which lead is qualified and is ready to sales.</p>',
                          'img-src' => get_template_directory_uri(). '/images/product/sales/overview-lead-distribution.png',
                          'next-button' => 'LEARN MORE',
                          'next_url' => get_site_url(). '/sales-lead-distribution'
                        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'Sales pipeline',
                        'name' => 'Manage your own <strong>sales process</strong> efficently',
                        'nameClass' => 'f-n f-40',
                        'classExtend' => 'mr-t-150',
                        'classImageRatio' => 'rt-3-4',
                        'divider' => 1,
                        'desc' => '<p>Sales pipelines show you how many deals salespeople are expected to close in a given week, month or year and how close a rep is to reaching their sales quota.</p>',
                        'next-button' => 'LEARN MORE',
                        'next_url' => get_site_url(). '/sales-pipeline',
                        'img-src' => get_template_directory_uri(). '/images/product/sales/overview-sales-pipeline.png',
                      )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'deal automation',
                          'name' => 'Just focus on closing deals, everything else is <strong>automatically done</strong>',
                          'nameClass' => 'f-n f-40',
                          'classExtend' => ' mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'img-src' => get_template_directory_uri(). '/images/product/sales/overview-deal-automation.png',
                          'desc' => '<p>An if-then-structure tool for sales team to automate their sales process, cut down prolix steps and let sales team focus on connecting with customers and closing deals. Add, manage, categorize, track properties, prepare contracts, and everything else are done automatically at every stage. </p>',
                        )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'Personal task management',
                        'name' => 'Keep every task off your plate and <strong> miss no deadline </strong>',
                        'nameClass' => 'f-n f-40',
                        'classExtend' => 'mr-t-150',
                        'classImageRatio' => 'rt-3-4',
                        'divider' => 1,
                        'desc' => '<p>A comprehensive platform for sales team to grow relationship with customers through Call Center, Email Management, Meeting Schedule through Calendar and Task Management. Every interaction between sales and customers is tracking and stored on the Deal History, helps sales and manager can look it up every time, every where in need.</p>',
                        'next-button' => 'LEARN MORE',
                        'next_url' => get_site_url(). '/sales-task-manger',
                        'img-src' => get_template_directory_uri(). '/images/product/sales/task-mngt-2.png',
                      )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'product library',
                          'name' => 'Every product <strong>in one place</strong>',
                          'nameClass' => 'f-n f-40',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'desc' => '<p>Product library helps businesses manage comprehensive products, and is also a place to store records and contracts for sales to easily manipulate and use.</p>',
                          'img-src' => get_template_directory_uri(). '/images/product/sales/overview-product-library.png',
                        )); ?>

<?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'reports and dashboards',
                        'name' => 'Manage your team performance and ensure <strong>KPIs goals</strong>',
                        'nameClass' => 'f-n f-40',
                        'classExtend' => 'mr-t-150',
                        'classImageRatio' => 'rt-3-4',
                        'divider' => 1,
                        'desc' => '<p>Comprehensive dashboards for sales manager to keep control of member productivity, speed of deal closing, KPIs performance and revenue by different caterogies so each member and leader can have a clear picture of how sales process is running. </p>',
                        'img-src' => get_template_directory_uri(). '/images/product/sales/overview-reports.png',
                      )); ?>

  
  <?php
    get_template_part('template-parts/customer-stories', null,
      array(
        'no-title' => false,
        'classExtend' => ' mr-t-150'
      ));
  ?>

  <?php
    get_template_part('template-parts/document-library', null,
      array(
        'no-title' => false,
        'classExtend' => 'mr-t-150'
      ));
  ?>

  <?php get_template_part('template-parts/footer-contact', null,
      array( 
        'title' => 'Curious about Mobio Sales Management? There’re lots more to explore!'
      )
    ); ?>


  <?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>