<?php
/**
 * Template Name: Products Marketing Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 

<?php get_template_part('template-parts/header-page',null,
  array( 
    'title' => 'Mobio marketing management',
    'name' => 'A comprehensive platform to meets the goals of every marketers',
    'name-class' => 'w-750 f-b f-60 mr-t-25',
  ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-120',
      'title-sm' => 'Mobio marketing management',
      'title' => 'Connect every interaction into a seamless Customer Journey', 
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null, 
    array(
      'classExtend' => 'mr-t-30',
      'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-header.png', 
    )
  );
?>

<?php 
  get_template_part('template-parts/top-tenant-enterprise', null, 
    array(
      'classExtend' => 'mr-t-120',
      'title' => 'trusted by top enterprises in Vietnam', 
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-200',
      'title-sm' => 'how it helps',
      'title' => 'Create a Marketing Campaign that <span style="color: #4BBFEB; text-decoration: underline;">actually works</span>', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-100',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Journey Builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Create end-to-end customer journey with <strong>Journey Builder</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-20 pa-r-40',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-journey_builder.png',
    'desc' => "<p>Drag-and-drop, one-to-one interface to help you create a personalized journey for your customer. Connect every interaction across website, mobile, email, social media channel, 
      and advertising — along with Sales and Service — into a seamless customer experience. </p>",
    'next-button' => 'Learn More',
    'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => '1',
    'classExtend' => 'mr-t-300',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Email Builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Deliver 1-to-1 sophisticate messages with <strong>Email Builder</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'classContent' => 'pa-l-20 pa-r-0',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-email.png',
    'desc' => "<p>Easy-to-use email marketing tool to engage your customers list and boost conversion rate. We also provide advanced features and step-by-step 
      guideline to help increase your email sender reputation and let your message goes straight to your customers’ main mailbox. </p>",
    'next-button' => 'Learn More',
    'next-url' => get_site_url().'/mkt-email-builder'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Omnichannel',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Reach customers anytime, anywhere with <strong>Omnichannel</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    // 'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-omnichannel.png',
    'desc' => "<p>Omnichannel is not a feature or module, it’s a strategy. Thus, creating an omnichannel experience requires a combination of different tools which, luckily, we have all. From social media channels, website, mobile app, live chat, 
    call center, message, email, to POS at stores, your business now can manage all in one place for your omnichannel strategy.  </p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => '1',
    'classExtend' => 'mr-t-300',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Ads automation',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Collect quality leads and customer data from <strong>Ads Automation</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'classContent' => 'pa-l-15 pa-r-20',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-ads_management.png',
    'desc' => "<p>Integrate with Facebook Ads and sync target ads audience with various filters to create effective 
        Lead Generation campaigns and automatically collect customer data to enrich CDP. </p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'voucher management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Boost sales and conversion rate with the magic of <strong>Voucher</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-40 pa-r-0',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-voucher_management.png',
    'desc' => "<p>A solution designed to handle the end-to-end lifecycle of recharge vouchers from production to distribution and redemption. 
      A market responsive and user-centric product to increase customer engagement and loyalty. </p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => '1',
    'classExtend' => 'mr-t-300',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'reports',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'See detailed <strong>Realtime Report</strong> to improve your campaign performance',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'classContent' => 'pa-l-40 pa-r-0',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-1-1',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-report.png',
    'desc' => "<p>Comprehensive and holistic reports that show real-time data of every customer touchpoint, number of leads from the top-to-bot funnel, 
        ROI, CTR, CTOR indicate, so you can get deeper insights of your marketing campaign and your customer behavior.</p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>


<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-250',
      'title-sm' => 'inbound marketing toolkit',
      'title' => 'Marketing Management Feature List', 
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-list', null,
    array(
      'classExtend' => 'mr-t-70',
      'items' => array(
        array(
          'tab-title' => 'Journey Builder',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Activate communication workflow followed by the customer's action",
            "Multi-channels: Email, SMS, Brandname, FB, Zalo, App",
            "4-option A/B testing",
            "Push notification via Mobile App",
            "Hyper-personalization: personalize all profile infomation",
            "Push notification via Website",
            "Personalize voucher information",
            "Create going-after workflow based on Customer Behavior",
            "Provide link shortener with the brand subdomain"
          )
        ),
        array(
          'tab-title' => 'Email builder',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Activate communication workflow followed by the customer's action",
            "Multi-channels: Email, SMS, Brandname, FB, Zalo, App",
            "4-option A/B testing",
            "Push notification via Mobile App",
            "Hyper-personalization: personalize all profile infomation",
            "Push notification via Website",
            "Personalize voucher information",
          )
        ),
        array(
          'tab-title' => 'Omnichannel',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Push notification via Mobile App",
            "Hyper-personalization: personalize all profile infomation",
            "Push notification via Website",
            "Personalize voucher information",
            "Create going-after workflow based on Customer Behavior",
            "Provide link shortener with the brand subdomain"
          )
        ),
        array(
          'tab-title' => 'Ads Automation',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Activate communication workflow followed by the customer's action",
            "Multi-channels: Email, SMS, Brandname, FB, Zalo, App",
            "4-option A/B testing",
            "Push notification via Mobile App",
            "Hyper-personalization: personalize all profile infomation",
            "Push notification via Website",
            "Personalize voucher information",
            "Create going-after workflow based on Customer Behavior",
            "Provide link shortener with the brand subdomain"
          )
        ),
        array(
          'tab-title' => 'Voucher Management',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Activate communication workflow followed by the customer's action",
            "Multi-channels: Email, SMS, Brandname, FB, Zalo, App",
            "4-option A/B testing",
            "Push notification via Mobile App",
            "Hyper-personalization: personalize all profile infomation",
            "Push notification via Website",
            "Personalize voucher information",
            "Create going-after workflow based on Customer Behavior",
            "Provide link shortener with the brand subdomain"
          )
        ),
        array(
          'tab-title' => 'Reports',
          'feature' => array(
            'Drag-and-drop interface to build customer journey',
            "Activate communication workflow followed by the customer's action",
            "Multi-channels: Email, SMS, Brandname, FB, Zalo, App",
            "4-option A/B testing",
            "Create going-after workflow based on Customer Behavior",
            "Provide link shortener with the brand subdomain"
          )
        ),
      )
    ))
?>

<?php
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php
  get_template_part('template-parts/document-library', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php 
  get_template_part('template-parts/footer-contact', null,
    array(
      'title' => 'Curious about MMM? There’re lots more to explore!'
    ))

?>



<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>