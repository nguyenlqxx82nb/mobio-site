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
      //'img-src' => get_template_directory_uri(). '/images/home/marketing-email-builder.png'
    )); ?>

<?php get_template_part('template-parts/top-tenant-enterprise',null,
  	array(
			'classExtend' => 'mr-t-175 mr-t-125-s4'
		)); ?>


<?php 
  get_template_part('template-parts/customer-case', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-90-s0 mr-t-125-s4',
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
      'title' => 'TOP PICK CASE STUDIES',
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
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/guardian.png',
          'title' => 'Guardian',
          'desc' => 'Boost voucher redemption rate and optimize loyalty program with an end-to-end digital journey customer experience.',
          'next-url' => '/coming-soon',
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/routine.png',
          'title' => 'Routine',
          'desc' => 'Improve customer satisfaction through Call Center and Employee Performance Evaluation System.',
          'next-url' => '/coming-soon',
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/galle-tim.png',
          'title' => 'Galle Watch',
          'desc' => 'Respond to customers 3 times faster and optimize online deal close rate - this is a successful strategy during the pandemic! ',
          'next-url' => '/coming-soon',
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
          'img-top-class' => 'h-40',
          'desc' => 'Optimize customer experience and leverage their digital strategy using MOBIO Journey Builder
           and Social Management tools. During social isolation, the Online Sales team keeps their pace and
            maintains collaboration efficiently with MOBIO reporting system.',
          'next-url' => '/coming-soon',
          'img-src' => get_template_directory_uri() . '/images/customers/phong-vu.png',
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
          'title-sub' => 'Travel and Tourism',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/sunhospitality.png',
          'desc' => 'Integrate all platforms to create a single source of truth, meanwhile, improve social connection and manage sales performance efficiency.',
          'next-url' => '/coming-soon',
        ),
        array(
          'colClass' => 'mo-col-4',
          'title-sub' => 'entertainment',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/sunworld.png',
          'desc' => 'Achieve customer 360-degree profile by mapping customer journey and collect data from every digital touchpoints.',
          'next-url' => '/coming-soon',
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
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/sapporo.png',
          'desc' => 'Collect data in real-time from mortal-and-brick stores, to every online channels you own. Never miss a customer touchpoint.',
          'next-url' => '/coming-soon',
        ),
        array(
          'title-sub' => 'Retail',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/vnshop.png',
          'desc' => 'Personalizing messages and perfect-timing reminders to increase voucher redemption and conversion rate. ',
          'next-url' => '/coming-soon',
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
          'title-sub' => 'education',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/samsung.png',
          //'img-top-class' => 'h-40',
          'desc' => 'Keep track and appraise trainees performance through online evaluation system. Empower their trainees learning outcomes. ',
          'next-url' => '/coming-soon',
        ),
        array(
          'title-sub' => 'marketing agency',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/mokaa.png',
          //'img-top-class' => 'h-40',
          'desc' => 'Help their clients leverage their marketing campaign and deepen customer connection at every interaction.',
          'next-url' => '/coming-soon',
        ),
        array(
          'title-sub' => 'technology',
          'img-top' => get_template_directory_uri(). '/images/tenant/tenants/hpt.png',
          'desc' => 'Collect data in real-time and create frictionless online customer experience to deliver the best service.',
          'next-url' => '/coming-soon',
        ),
      )
    )  
  );
?>

<?php get_template_part('template-parts/footer-contact', null,
    array (
      'title' => 'Curious to see how it works for your business?',
      'next-url' => '/coming-soon'
    )
  ); ?>

<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>