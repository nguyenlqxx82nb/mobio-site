<?php
/**
 * Template Name: Customer Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?>

<?php get_template_part('template-parts/header-page',null,
    array( 
      'name' => 'Get inspired by our customers’ success stories',
      'name-class' => 'w-600 f-b f-60 mr-t-25',
      'desc' => 'See how top enterprises tackle business challenges and achieve their goals with Mobio Platform.'
    )); ?>

<?php get_template_part('template-parts/top-tenant-enterprise',null,
  	array(
			'classExtend' => 'mr-t-175'
		)); ?>


<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-90-s1',
      'cols' => 1,
      'items' => array(
        array(
          'title' => 'FSI Case Studies',
          'name' => 'Banking Cases',
          'desc' => 'How Asian Banks are taking advantages in the digital transaction world and leading their way in this customer-obsessed era.',
          'next' => 'contact us for more information >>',
          'next-url' => '#',
          'img-src' => get_template_directory_uri() . '/images/home/banking-cases.png',
        ),
      )
    )  
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-200',
      'title-sm' => 'success stories',
      'title' => 'Top pick case Studies',
      'title-class' => 'f-b f-48 c-0-b',
      'desc' => 'Here we choose our best cases that showed meaningful results. These are all our trusted customers and loyal advocacies.'
    )
  );
?>

<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-70',
      'cols' => 3,
      'items' => array(
        array(
          'title' => 'Guardian',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title' => 'Routine',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title' => 'Galle Watch',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
      )
    )  
  );
?>

<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-50',
      'cols' => 1,
      'items' => array(
        array(
          'name' => 'Phong Vu Electronics',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
          'img-src' => get_template_directory_uri() . '/images/industry-fsi/digital-banking.png',
        ),
      )
    )  
  );
?>

<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-50',
      'cols' => 2,
      'items' => array(
        array(
          'title' => 'Sapporo',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
        array(
          'title' => 'VNShop',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
      )
    )  
  );
?>

<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-50',
      'cols' => 2,
      'items' => array(
        array(
          'colClass' => 'mo-col-8',
          'title' => 'SunHospitality',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
        array(
          'colClass' => 'mo-col-4',
          'title' => 'SunLand',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
      )
    )  
  );
?>

<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-50',
      'cols' => 1,
      'items' => array(
        array(
          'name' => 'FLC',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
          'img-src' => get_template_directory_uri() . '/images/industry-fsi/digital-banking.png',
        ),
      )
    )  
  );
?>


<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-70',
      'cols' => 3,
      'items' => array(
        array(
          'title' => 'Mytour.vn',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title' => 'VN Travel',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title' => 'HPT',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
      )
    )  
  );
?>

<?php get_template_part('template-parts/footer-contact', null,
    array (
      'title' => 'Curious to see how it works for your business?'
    )
  ); ?>

<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>