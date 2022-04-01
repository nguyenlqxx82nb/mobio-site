<?php
/**
 * Template Name: Products Services Management Template
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
      'title-sub'=> 'Mobio service management',
      'title' => 'Win your Customers’ <br>Hearts with a 5-Star Service',
      'contact' => "1",
      'header-img' => get_template_directory_uri(). '/images/product/service/service-header.png'
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
        'title' => '<p>Give your customers the service that<span class="hl-text">meets their expectations</span></p>',
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'loyalty management',
      'name' => 'Build your <strong>loyalty programs</strong> that engage customers',
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-9-16',
      'classImageContainer' => '',
      'classImage' => '',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/overview-loyalty-2.png',
      'desc' => '<p>A drag-and-drop, one-to-one interface to help you create a personalized journey for your customers. Connect every interaction across website, mobile, email, social media channels, and advertising — along with Sales and Service — into a seamless customer experience. Workflow management is our strongest point.</p>',
      'next' => 'See loyalty management >>',
      'next_url' => get_site_url().'/service-loyalty-management'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'social media management',
          'name' => 'Connect with your customers across all <strong>social channels</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-9-16',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/service/social-omni.png',
          'desc' => '<p>Easy-to-use email marketing tool to engage your customers list and boost conversion rate. We also provide advanced features and step-by-step guideline to help increase your email sender reputation and let your message goes straight to your customers’ main mailbox.</p>',
          //'next' => 'learn how to manage omnichannel strategy >>',
          //'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'customer conversation',
          'name' => 'Response to your customers <strong>anytime, anywhere</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => '',
          'classImage' => '',
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/service/overview-chat-2.png',
          'desc' => '<p>Omnichannel is not a feature or module, it’s a strategy. Thus, creating an omnichannel experience requires a combination of different tools that, luckily, we have it all. Social media channels, website, mobile app, live chat, call center, message, email, POS at stores, every channel your business owns. </p>',
          'next' => 'See customer response system >>',
          'next_url' => get_site_url().'/service-customer-response'
        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'title' => 'ticket management',
      'name' => "Let no <strong>customer issues</strong> be missed out",
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-150',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/overview-ticketing.png',
      'desc' => '<p>Ease-of-use Email Builder tool to engage your customers list and boost conversion rate. We also provide additional features and step-by-step guideline to help increase your email sender reputation and let your mails go straight to your customer main mailbox. </p>',
      'next' => 'See ticket management >>',
      'next_url' => get_site_url().'/service-ticketing'
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'call center',
      'name' => "<strong>Call your customers</strong> without leaving the platform",
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-150',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/overview-call-center-2.png',
      //'next' => 'learn how to win customers with call center >>',
      //'next-url' => '#',
      'desc' => '<p>Call center makes telesales easier with its automated inbound and outbound engagement between businesses and customers. Every call is recorded for managers to analyze and improve agent productivity and customer satisfaction.</p>',
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'title' => 'survey management',
      'name' => "Collect customers’ reviews to <strong>upgrade your service</strong>",
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-150',
      'classImageRatio' => 'rt-1-1',
      'classImageContainer' => '',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/overview-survey.png',
      'desc' => '<p>If customers have a good service, they might not say it out loud. But if they have a bad one, 
      chances are they will emphasize it to everyone they meet. Therefore, it is important to collect your customers’ 
      opinions every time they leave about your service and know what you’re doing good and what’s not and then improve it. 
      Your customers will feel more pleased if they know their opinions are listened to and appreciated.</p>',
      //'next' => 'learn how to collect customers reviews >>',
      //'next-url' => '#'
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

<?php get_template_part('template-parts/footer-connect', null,
    array( 
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