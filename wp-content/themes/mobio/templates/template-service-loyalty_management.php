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
                            'desc' => 'A comprehensive, cloud-based system that allows your business to create and execute successful loyalty programs with ease.'
                          )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-100',
    'title-sm' => 'mobio loyalty management',
    'title' => 'Organize, Prioritize, And Consolidate Support Requests',
    'desc' => 'The system has frequently proven that there are many ways of how you can raise brand awareness. Thanks to its innovative and practical functionalities, building trust with customers has never been easier.',
    'desc-w' => 'w-1100'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-250',
    'title-sm' => 'loyalty programs',
    'title' => '<p>3 Engaging Customer Loyalty Programs</p>',
  )); ?>


<?php get_template_part('template-parts/loyalty-tab',null,
  array( 
    'classExtend' => 'mr-t-50',
    'items' => array(
      array(
        'tab-title' => 'Points Program',
        'tab-icon' => get_template_directory_uri().'/images/icon-digital.png',
        'desc' => '<strong>Points Program</strong> is the most well-known loyalty program which was perfect for customer acquisition and collecting data, plus, 
              it’s lower the risk and complexity for business more than other programs. 
              <br><br>Mobio provides a powerful <strong>Point Earning Policy</strong> which involved point earned for different types of customer behavior or transaction,
              so that it can encourage customers to become more committed to your services and products. ',
        'img-src' => get_template_directory_uri() .'/images/empty-image.png'
      ),
      array(
        'tab-title' => 'Tiered Program',
        'tab-icon' => get_template_directory_uri().'/images/icon-loyalty.png',
        'desc' => '<strong>Points Program</strong> is the most well-known loyalty program which was perfect for customer acquisition and collecting data, plus, 
              it’s lower the risk and complexity for business more than other programs. 
              <br><br>Mobio provides a powerful <strong>Point Earning Policy</strong> which involved point earned for different types of customer behavior or transaction,
              so that it can encourage customers to become more committed to your services and products. ',
        'img-src' => get_template_directory_uri() .'/images/empty-image.png'
      ),
      array(
        'tab-title' => 'Voucher Program',
        'tab-icon' => get_template_directory_uri().'/images/icon-personal.png',
        'desc' => '<strong>Points Program</strong> is the most well-known loyalty program which was perfect for customer acquisition and collecting data, plus, 
              it’s lower the risk and complexity for business more than other programs. 
              <br><br>Mobio provides a powerful <strong>Point Earning Policy</strong> which involved point earned for different types of customer behavior or transaction,
              so that it can encourage customers to become more committed to your services and products. ',
        'img-src' => get_template_directory_uri() .'/images/empty-image.png'
      ),
    )
  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-200',
        'title-sm' => 'how it helps',
        'title' => '<p>Achieving Sustainable Customer Loyalty</p>',
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'full customer insights',
      'name' => 'Know your customers well',
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-20 b-sd b-r-10',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>The system provides full customer data and analyzed sales statistics to make sure you are always up-to-date with the performance of your loyalty programs.
      <br><br>Not only does it give you quick access to your customer’s history of transactions, but it also allows you to easily create, manage, or merge membership accounts.
      <br><br>Mobio supports multiple ID classes and enables you to organize your customer data efficiently using a simple & intuitive interface.
      </p>',
      // 'next' => 'learn how to manage omnichannel strategy >>',
      // 'next-url' => '#'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'Loyalty program customization',
          'name' => 'Create a loyalty program in <strong>your business style</strong>',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-20 b-sd b-r-10',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>By using our loyalty management system, you will decide what the rules for marketing activities and loyalty programs are. Our product will help you set your business priorities and create personalized offers based on geolocation.
          The system is flexible and fully adaptive to your requirements.
          </p>',
          // 'next' => 'learn how to manage your workspace >>',
          // 'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'Omnichannel interaction',
          'name' => 'Loyalty management accross <strong>all channels</strong>',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-20 b-sd b-r-10',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>Mobio allows you to stay in contact with your customers at every level of their loyalty program participation. Use it to create mass or individual <strong>messages</strong> (E-mail/SMS/POS/mobile app/website) informing the members about your current product offers and services.
          <br><br>Also, send surveys to collect feedback so you could constantly improve the quality of your loyalty programs. </p>',
          // 'next' => 'see how quick response can boost your cx >>',
          // 'next-url' => '#'
        )); ?>

  

  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'title' => 'Rewards management',
      'name' => "Rewards management",
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-250',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-20 b-sd b-r-10',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>Mobio’s loyalty system enables you to come up with various types of rewards that you can give to your most involved customers. Those include discounts, cash-backs, giveaways, vouchers. 
      <br><br>The system is a simple yet powerful platform that functions as an extensive e-commerce-based reward catalog, pre-integrated with our online payment solution, with many schemes and patterns to choose from. Create personalized reward offers that will encourage your audience to become even more involved.
      </p>',
      // 'next' => 'compare live chat and chatbot >>',
      // 'next-url' => '#'
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
      array (
        'title' => 'Curious about Loyalty Management? There’re a lot more to explore!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>