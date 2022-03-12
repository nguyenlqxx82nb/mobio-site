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
      'title' => 'customer cases',
      'name' => 'Get inspired by our Customers’ Success Stories',
      'name-class' => 'w-900 f-b f-60 mr-t-25',
      'desc' => 'See how top enterprises tackle business challenges and achieve their goals with Mobio Platform.',
      'img-src' => get_template_directory_uri(). '/images/home/marketing-email-builder.png'
    )); ?>

<?php get_template_part('template-parts/top-tenant-enterprise',null,
  	array(
			'classExtend' => 'mr-t-175 mr-t-125-s4'
		)); ?>


<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-90-s1 mr-t-125-s4',
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
      'classExtend' => 'mr-t-200 mr-t-150-s4',
      'title-sm' => 'success stories',
      'title' => 'Top pick case Studies',
      'title-class' => 'f-b f-48 c-0-b',
      'desc' => 'Here we choose our best cases that showed meaningful results.<br>These are all our trusted customers and loyal advocacies.'
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
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/guardian.png',
          'title' => 'Guardian',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/routine.png',
          'title' => 'Routine',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/galle.png',
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
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/phongvu.png',
          'img-top-class' => 'h-50',
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
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/sakuko.png',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/vnshop.png',
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
          'title-sub' => 'entertainment',
          'img-top' => get_template_directory_uri(). '/images/tenant/sunworld.png',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#'
        ),
        array(
          'colClass' => 'mo-col-4',
          'img-top' => get_template_directory_uri(). '/images/tenant/vnlife.png',
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
          'img-top' => get_template_directory_uri(). '/images/tenant/flc.png',
          'img-top-class' => 'h-90',
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
          'img-top' => get_template_directory_uri(). '/images/tenant/VNTravel.png',
          // 'img-top-class' => 'h-90',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'img-top' => get_template_directory_uri(). '/images/tenant/mytour.vn.png',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
        array(
          'img-top' => get_template_directory_uri(). '/images/tenant/hpt.png',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '#',
        ),
      )
    )  
  );
?>

<?php get_template_part('template-parts/footer-contact', null,
    array (
      'title' => 'Curious to see how it works for your business?',
      'next-url' => '#'
    )
  ); ?>

<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>