<?php
/**
 * Template Name: Industry Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio
 */

get_header();
?>

<!-- header -->
<?php get_template_part('template-parts/header-page',null,
  array( 
    'title' => 'customer industries',
    'name' => 'Create Frictionless Customer Experience in Every Industry',
    'name-class' => 'w-650 f-b f-60 mr-t-25',
  ));
?>


<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-70',
      'title-sm' => 'customer industries',
      'title' => 'Gain New Insights about your Customers',
      'desc' => 'MOBIO CDP is designed to conquer to challenges of every industry and company has to deal with. 
      We understand that each business has its problems and requires different solutions. 
      Our experimental experts are here to help you get deeper insights about your industry and customers and how Mobio Platform can resolve your current and future business needs.',
      'desc-w' => 'w-1200 w-850-s4'
    )
  );
?>

<?php 
  get_template_part('template-parts/industry-button', null,
  array(
    'classExtend' => 'mr-t-50',
    'items' => array(
      array(
        'name' => 'Financial Services',
        'url' => get_site_url(). '/industry-fsi',
      ),
      array(
        'name' => 'Retail',
        'url' => get_site_url(). '/industry-retail',
      ),
      array(
        'name' => 'Real Estate',
        'url' => get_site_url(). '/industry-real_estate',
      ),
      array(
        'name' => 'Healthcare',
        'url' => get_site_url(). '/industry-healthcare',
      )
    )
  ))
?>

<?php get_template_part('template-parts/top-tenant-enterprise',null,
  	array(
			'classExtend' => 'mr-t-175 mr-t-150-s4'
		)); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'icon' => get_template_directory_uri(). '/images/industry/industry-1.svg',
      'title' => 'most innovative fsi companies',
      'title-class' => 'f-18 c-1-b',
      'name' => 'Financial Services',
      'nameClass' => 'f-b f-40',
      'classExtend' => 'mr-t-250 mr-t-150-s4',
      'classImageContainer' => 'b-sd-n',
      'classImageRatio' => 'rt-9-16',
      // 'classImageContainer' => 'pa-0',
      // 'classImage' => 'b-r-10',
      // 'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/industry/financial-service-industry.png',
      'desc' => '<p>Interact with FSI customers in real-time with the right message on the right channel, developing customer engagement and boosting customer retention.
        <br><br>Strong solutions for Card Center, Retail Banking, and Digital Banking.</p>',
      // 'next' => 'learn how to manage your workspace >>',
      'next-button' => 'Learn More',
      'next-url' => get_site_url(). '/industry-fsi',
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      //'imageLeft' => 1,
      'icon' => get_template_directory_uri(). '/images/industry/industry-2.svg',
      'title' => 'top retail chains in asian market',
      'title-class' => 'f-18 c-1-b',
      'name' => 'Retail',
      'nameClass' => 'f-b f-40',
      'classExtend' => 'mr-t-250  mr-t-150-s4',
      'classImageContainer' => 'b-sd-n',
      'classImageRatio' => 'rt-3-4',
      // 'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/industry/retail-industry.png',
      'desc' => '<p>Increase your AOV, upsell and cross-sell efficiently, boost your customer engagement, perfect timing to offer deals and promotion, track every behavior and digital footprint. 
      <br><br>Designed solutions for Retailers to increase revenue and reduce customer churn rate.</p>',
      // 'next' => 'learn how to manage your workspace >>',
      'next-button' => 'Learn More',
      'next-url' => '#'
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'icon' => get_template_directory_uri(). '/images/industry/industry-4.svg',
      'title' => 'beauty & healthcare',
      'title-class' => 'f-18 c-1-b',
      'name' => 'Healthcare',
      'nameClass' => 'f-b f-40',
      'classExtend' => 'mr-t-250 mr-t-150-s4',
      'classImageContainer' => 'b-sd-n',
      'classImageRatio' => 'rt-3-4',
      // 'classImageContainer' => 'pa-0',
      // 'classImage' => 'b-r-10',
      // 'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/industry/healthcare.png',
      'desc' => '<p>Collect and store all customer data to let you know your customer better than they know themselves. Provide deeper customer insights to meet your customer requirements and give them the best services. 
      <br><br>Complete solutions for Healthcare businesses to boost sales and increase customer engagement. </p>',
      // 'next' => 'learn how to manage your workspace >>',
      'next-button' => 'Learn More',
      'next-url' => '#'
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      //'imageLeft' => 1,
      'icon' => get_template_directory_uri(). '/images/industry/industry-3.svg',
      'title' => 'real estate investor',
      'title-class' => 'f-18 c-1-b',
      'name' => 'Real Estate',
      'nameClass' => 'f-b f-40',
      'classExtend' => 'mr-t-250  mr-t-150-s4',
      'classImageContainer' => 'b-sd-n',
      'classImageRatio' => 'rt-3-4',
      // 'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/industry/real-estate.png',
      'desc' => '<p>Help Real Estate Agents to run marketing campaigns and close deals faster, as weel as manage deep connection with customers.
      <br><br>Complete solutions for Real Estate agents to boost sales and increase customer engagement. </p>',
      // 'next' => 'learn how to manage your workspace >>',
      'next-button' => 'Learn More',
      'next-url' => '#'
    )); ?>

<?php 
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250  mr-t-150-s4'
    ));
?>

<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-250  mr-t-150-s4'
  ));
?>

<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>