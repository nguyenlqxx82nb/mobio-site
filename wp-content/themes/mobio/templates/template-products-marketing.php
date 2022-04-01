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

<?php get_template_part('template-parts/header-product',null,
  array(
    'title-sub' => 'Mobio marketing management',
    'title' => 'A Comprehensive Platform to meets the Goals of every Marketer',
    'contact' => '1',
    'header-img' => get_template_directory_uri(). '/images/Mobio-platform-cdp-cem.png',
    'title-width' => 'w-750'
  ));
?>


<?php 
  get_template_part('template-parts/top-tenant-enterprise', null, 
    array(
      'classExtend' => 'mr-t-120',
      'title' => 'trusted by large enterprises in Vietnam', 
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'how it helps',
      'title' => 'Create a marketing campaign that <span class="hl-text">actually works</span>', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-100',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Journey Builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Create end-to-end customer journeys with <strong>Journey Builder</strong>',
    'nameClass' => 'f-n',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-journey_builder.png',
    'desc' => "<p>A drag-and-drop, one-to-one interface to help you create a personalized journey for your customer. Connect every interaction across websites, mobile, email, social media channels, 
      and advertising — along with Sales and Service — into a seamless customer experience. </p>",
    'next-button' => 'Learn More',
    'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => '1',
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Email Builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Deliver 1-to-1 sophisticate messages with <strong>Email Builder</strong>',
    'nameClass' => 'f-n',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-email.png',
    'desc' => "<p>Easy-to-use email marketing tool to engage your customers' list and boost conversion rate. We also provide advanced features and step-by-step guideline to help increase your email sender reputation and let your message goes straight to your customers’ main mailbox.</p>",
    'next-button' => 'Learn More',
    'next-url' => get_site_url().'/mkt-email-builder'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Omnichannel',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Reach customers anytime, anywhere with <strong>Omnichannel</strong>',
    'nameClass' => 'f-n',
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
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Ads automation',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Collect quality leads and customer data from <strong>Ads Automation</strong>',
    'nameClass' => 'f-n f-40',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-1-1',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-ads-management.png',
    'desc' => "<p>Integrate with Facebook Ads and sync target ads audience with various filters to create effective 
        Lead Generation campaigns and automatically collect customer data to enrich CDP. </p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'voucher management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Boost sales and conversion rate with the magic of <strong>Voucher</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-40',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-1-1',
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
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'reports',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'See detailed <strong>Realtime Report</strong> to improve your campaign performance',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'classContent' => 'pa-l-40 pa-r-0',
    'nameClass' => 'f-n f-40',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-1-1',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/overview-report.png',
    'desc' => "<p>Comprehensive and holistic reports that show real-time data of every customer touchpoint, numbers of leads from the top-to-bot funnel, ROI, CTR, CTOR indicate, so you can get deeper insights into your marketing campaign and your customer behavior.</p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>



<?php
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-150'
    ));
?>

<?php
  get_template_part('template-parts/document-library', null,
    array(
      'classExtend' => 'mr-t-150'
    ));
?>

<?php 
  get_template_part('template-parts/footer-contact', null,
    array(
      'title' => 'Curious about Mobio Marketing Management? There’re lots more to explore!'
    ))

?>



<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>