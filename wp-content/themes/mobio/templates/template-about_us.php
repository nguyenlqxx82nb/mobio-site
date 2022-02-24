<?php
/**
 * Template Name: About Us Template
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
      'classExtend' => '',
      'class-col-left'=> 'mo-col-6',
      'class-col-right'=> 'mo-col-6',
      'title' => 'about us',
      'name' => 'MOBIO 100%',
      'name-class' => 'f-b f-90 mr-t-30',
      'desc' => 'A great workplace with exceptional people and unlimited ideas. 
          A great workplace where everybody’s opinions are listened
          A workplace where unique / superb / superior / exquisite ideas are created and exeptional people are born',
      'desc-class' => 'f-n f-18 mr-t-5-s1',
      'ignoreContact' => 1,
      'top' => 'mr-t-100 mr-t-0-s1', 
      'video-id'=> '3aCflnMjvCQ',
      
    )); ?>


<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'our mission',
      'name' => 'A Comprehensive CDP & CEM Platform',
      'nameClass' => 'f-b f-56',
      'classExtend' => 'mr-t-150',
      'classImageContainer' => 'b-sd-0 pa-0',
      'classImageRatio' => 'rt-3-4',
      'classImage' => '',
      'divider' => 1,
      'desc' => '<p>Catching up with global digital trends, Mobio was established to create a comprehensive CDP & CEM Platform, enable businesses to effectively implement marketing campaigns and optimize the customer experience. 
      <br><br>Our goals are to help customers get the most from their data and operate business activation <strong>all in one place:</strong> A comprehensive platform that meets the goals of all Marketing, Sales, Services team. We’re just getting started, and we’re so grateful for all our trusted tenants and partners that are joining in this journey with us.   
      </p>',
      'next-button' => 'become our partner',
      'next-url' => '#'
    )); ?>

  <?php
    get_template_part('template-parts/about-vision',null,
      array(
        'classExtend' => 'mr-t-200',
        'title' => 'our vision',
        'desc' => 'Become the Pioneer of Digital Trend and the Top-of-mind Brand in CDP & CEM Solutions.'
      ));
  ?>

  <?php
    get_template_part('template-parts/about-journey',null,
      array(
        'classExtend' => 'mr-t-200',
        'title-sm' => 'our milestone',
        'title' => 'A Journey That Means The World To Us',
        'items' => array(
          array(
            'members' => 6,
            'years' => '2016',
            'desc' => 'Started with Project X-Loyalty'
          ),
          array(
            'members' => 6,
            'isBorn' => 1,
            'years' => '2017',
            'desc' => 'MOBIO was born'
          ),
          array(
            'members' => 10,
            'years' => '2018',
            'desc' => 'First FSI client 
                <br><br>
                  New investor<br><br>Target audience: Enterprises'
          ),
          array(
            'members' => 35,
            'years' => '2019',
            'desc' => 'Move to Duy Tan Str. 
                        <br><br>
                        Win some big retail tenants 
                        <br><br>
                        Go deep with products'
          ),
          array(
            'members' => 40,
            'years' => '2020',
            'desc' => 'Set vision:CDP & CEM Comprehensive Platform
                <br><br>
                Step into the FSI world
              <br><br>
              Go deep with Enterprise tenants'
          ),
          array(
            'members' => 83,
            'years' => '2021',
            'desc' => 'Go deep with FSI <br><br>
                  Focus on product, service, human and operation.'
          )
        )
      ));
  ?>

  <?php
    get_template_part('template-parts/about-culture',null,
      array(
        'classExtend' => 'mr-t-250',
        'title-sm' => 'our company culture',
        'title' => 'Words That Guide Us',
        'items' => array(
          array(
            'title' => 'Responsible',
            'desc' => 'You reap what <br> you sow'
          ),
          array(
            'title' => 'Respect',
            'desc' => 'Colleagues <br>are family'
          ),
          array(
            'title' => 'Determined',
            'desc' => 'Dare to dream <br>Dare to win'
          ),
        )
      ));
  ?>

  <?php 
    get_template_part('template-parts/section-title', null,
      array(
        'classExtend' => 'mr-t-250',
        'title-sm' => 'life at mobio',
        'title' => 'Mobio 100% Happy Place',
        'next-button' => 'join our team',
        'next-url' => '#'
      ));
  ?>

  <?php
    get_template_part('template-parts/about-slide',null,
      array(
        'classExtend' => 'mr-t-50 ',
        'img-list' => array(
          get_template_directory_uri(). '/images/home/library1.jpg',
          get_template_directory_uri(). '/images/home/library2.jpg',
          get_template_directory_uri(). '/images/home/library3.jpg',
          get_template_directory_uri(). '/images/home/use-cases.jpg',
          get_template_directory_uri(). '/images/home/lead-distribution.png',
          get_template_directory_uri(). '/images/home/mkt-jb.png',
        )
      ));
  ?>
  
  
  <?php get_template_part('template-parts/footer-connect', null,
      array (
        'classExtend' => 'mr-t-250',
        'title' => 'Keep in touch with us!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>