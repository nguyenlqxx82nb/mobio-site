<?php
/**
 * Template Name: Service Loyalty Management Template
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
      'title' => 'Mobio service management',
      'name' => 'Meet Loyalty Management',
      'desc' => 'A comprehensive, cloud-based system that allows your business to create and execute successful loyalty programs with ease.',
      'contact' => '1',
      'img-src' => get_template_directory_uri(). '/images/product/service/loyalty-header.png'
    )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-150 mr-t-250-s2',
    'title-sm' => 'mobio loyalty management',
    'title' => 'Organize, Prioritize, and Consolidate support requests',
    'desc' => 'The system has frequently proven that there are many ways how you can raise brand awareness. Thanks to its innovative and practical functionalities, building trust with customers has never been easier.',
    'desc-w' => 'w-1100 w-850'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
    'img-src' => get_template_directory_uri(). '/images/product/service/loyalty-visual.png'
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => ' mr-t-150',
    'title-sm' => 'loyalty programs',
    'title' => '<p>3 Engaging Customer Loyalty Programs</p>',
  )); ?>


<?php get_template_part('template-parts/loyalty-tab',null,
  array( 
    'classExtend' => 'mr-t-50',
    'items' => array(
      array(
        'tab-title' => 'Points Program',
        'tab-icon' => get_template_directory_uri().'/images/product/service/loyalty-1.svg',
        'desc' => '<strong>Points Program</strong> is the most well-known loyalty program which was perfect for customer acquisition and collecting data, plus, 
              it’s lower the risk and complexity for business more than other programs. 
              <br><br>Mobio provides a powerful <strong>Point Earning Policy</strong> which involved points earned for different types of customer behavior or transaction,
              to encourage customers become more committed to your services and products. ',
        'img-src' => get_template_directory_uri() .'/images/product/service/loyalty-points-2.png'
      ),
      array(
        'tab-title' => 'Tiered Program',
        'tab-icon' => get_template_directory_uri().'/images/product/service/loyalty-2.svg',
        'desc' => 'Great for increasing customer engagement, personalizing CX, and encouraging additional purchases from high-value customers.',
        'img-src' => get_template_directory_uri() .'/images/product/service/loyalty-tier.png'
      ),
      array(
        'tab-title' => 'Voucher Program',
        'tab-icon' => get_template_directory_uri().'/images/product/service/loyalty-3.svg',
        'desc' => 'A simple yet effective loyalty program for business as its flexibility and ability to accelerate the loyalty life cycle.',
        'img-src' => get_template_directory_uri() .'/images/product/service/loyalty-voucher.png'
      ),
    )
  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title-sm' => 'how it helps',
        'title' => '<p>Achieving a sustainable customer loyalty strategy</p>',
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'full customer insights',
      'name' => 'Know your customers well',
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'img-src' => get_template_directory_uri() .'/images/product/service/loyalty-chat.png',
      'desc' => '<p>The system provides full customer data and analyzed sales statistics to make sure you are always up-to-date with the performance of your loyalty programs.</p>
      <p class="mr-t-10">Not only does it give you quick access to your customer’s history of transactions, but it also allows you to easily create, manage, or merge membership accounts.</p>
      <p class="mr-t-10">Mobio supports multiple ID classes and enables you to organize your customer data efficiently using a simple & intuitive interface.</p>',
      // 'next' => 'learn how to manage omnichannel strategy >>',
      // 'next-url' => '#'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'Loyalty program customization',
          'name' => 'Create a loyalty program in <strong>your business style</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-9-16',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'classColContent' => 'mo-col-5',
          'classColImage' => 'mo-col-7',
          'divider' => 1,
          'img-src' => get_template_directory_uri() .'/images/product/service/loyalty.png',
          'desc' => '<p>By using our loyalty management system, you will decide what the rules for marketing activities and loyalty programs are. Our product will help you set your business priorities and create personalized offers based on geolocation.
          The system is flexible and fully adaptive to your requirements.
          </p>',
          // 'next' => 'learn how to manage your workspace >>',
          // 'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'Omnichannel interaction',
          'name' => 'Loyalty management across <strong>all channels</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-9-16',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'classColContent' => 'mo-col-5',
          'classColImage' => 'mo-col-7',
          'divider' => 1,
          'img-src' => get_template_directory_uri() .'/images/product/service/social-omni.png',
          'desc' => '<p>Mobio allows you to stay in contact with your customers at every level of their loyalty program participation. Use it to create a mass or individual messages (Email/SMS/POS/mobile app/website) informing the members about your current product offers and services.</p>
          <p class="mr-t-10">Also, send surveys to collect feedback so you could constantly improve the quality of your loyalty programs. </p>',
          // 'next' => 'see how quick response can boost your cx >>',
          // 'next-url' => '#'
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
      array (
        'title' => 'Curious about Loyalty Management? There’re lots more to explore!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>