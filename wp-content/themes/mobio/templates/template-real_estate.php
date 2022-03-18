<?php
/**
 * Template Name: Real Estate Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?> 
<!-- header -->
<?php get_template_part('template-parts/header-product',null,
  array( 
    'title-sub' => 'industry | real estate',
    'title' => 'Collect High Quality Leads and Close Deals Faster',
    'desc' => "Marketing and Sales in Real Estate Industry are easier said than done since it requires a huga amount of time to find the right buyers for every new project launched. With the help from MOBIO CDP, agents can find it truly easy to collect high quality leads and seal the deals faster.",
    'header-img' => get_template_directory_uri(). '/images/industry-real-estate/real-estate-header-2.png'
  ));
?>

<?php 
  get_template_part('template-parts/top-tenant-retail', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-120-s4',
      'title' => 'trusted by most innovative corporates in vietnam'
    )
  )
?>

<?php 
  get_template_part('template-parts/industry-insights', null,
    array(
      'classExtend' => 'mr-t-175 mr-t-200-s4',
      'title' => 'industry insights',
      'name' => 'Perspectives On Real Estate',
      'desc' => 'Retail is accelerating at a shocking pace. These trends and insights are up-to-date with statistics provided by Deloitte, McKinsey, 
      PwC, and opinions of C-suite leaders and experts in the fields. ',
      'items' => array(
        array(
          'icon' => get_template_directory_uri().'/images/icon-digital.png',
          'title' => 'Digital & Omnichannel',
          'desc' => 'Go to digital or go bust.  Now it’s time to invest more in e-commerce and online channels.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/icon-loyalty.png',
          'title' => 'Loyalty is key',
          'desc' => 'Since the pandemic, brands are now focus stronger on building their loyalty army.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/item-icon.png',
          'title' => 'O2O Customer experience',
          'desc' => 'From mortal store to online channel, customers today are expecting an end-to-end experience and service.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/icon-personal.png',
          'title' => 'Personalize at scale',
          'desc' => 'In this era, customers want to be treated as a unique individual with meaningful personalized messages.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/icon-personal.png',
          'title' => 'Everything real-time',
          'desc' => 'For retailer, customer behavior, digital footprint, lastest trends, everything must be updated constantly.'
        )
        ),
        'next-url' => '#'
    ))
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-200 mr-t-200-s4',
      'title-sm' => 'how can we help?',
      'title' => 'Collect High Quality Leads and Close Deals Faster', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'journey builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Segment and manage</strong> your qualified leads',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-real-estate/real-estate-jb-1.png',
    'desc' => "<p>By using a CDP, real estate agents can classify warm-leads and cold-leads, then have a separated 
    approaching strategy for different types of customers. You can also have a single source of truth from your customers,
     know them from head to toe, and increase your chance to land deals.</p>",
    'next' => 'Explore our possibilities >>',
    'next_url' => get_site_url(). '/mkt-journey-builder'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'ads management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Grab your customer attention</strong> from digital Ads',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-real-estate/real-estate-ads.png',
    'desc' => "<p>With Mobio Ads Management tool, real estate businesses can attract customers via appealing Facebook or 
    Google Ads, segment those warm-leads, and make telesales immediately to the right customers. 
    Those cold-leads will be stored in CDP and continually nurtured through marketing campaigns. </p>",
    //'next' => 'Learn the strategy to convert leads through ads >>',
    //'next-url' => get_site_url(). '/'
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    // 'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'email marketing',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Deliver <strong>personalized messages</strong> based on customer interests',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-real-estate/real-estate-email.png',
    'desc' => "<p>Send follow-up emails and newsletters to your customers with personalized messages based on their 
    interests, which can perfectly boost your CTA, CLV, and ROI. You can also reach customers through various 
    channels: SMS, Social Media, Web push, LINE, maintain a committed customer connection.</p>",
    'next' => 'Explore our possibilities >>',
    'next_url' => get_site_url(). '/mkt-email-builder'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-200-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'sales management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Sell faster and smarter</strong> with customized sales tools',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-real-estate/sales-pipeline.png',
    'desc' => "<p>Sales team can use Lead Distribution to get the right leads that fit their needs, Sales Pipeline 
    to keep track of their sales process, Task Management to manage all their daily tasks, and many other tools to boost 
    your sales progress.</p>",
    'next' => 'Explore our possibilities >>',
    'next_url' => get_site_url(). '/products-sale'
  )); ?>

<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-175 mr-t-200-s4',
      'title-sm' => 'library',
      'title' => 'Most Helpful Paper Selected By Our Customers',
    )); ?>
  
  
<?php get_template_part('template-parts/row-content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'content' => array(
      array(
        'title' => 'Why 2022 is the year for Retailer to use CDP?',
        'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
        'next' => 'Download Ebook >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library1.jpg'
      ),
      array(
        'title' => 'How Customer Behavior Changes In Post-covid?',
        'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain ourself.',
        'next' => 'See Guideline >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library2.jpg'
      ),
      array(
        'title' => 'How Banking Industry Adapts to the Digital Era?',
        'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
        'next' => 'Read Blog Post >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library3.jpg'
      )
    )
  )); ?>


<?php 
  get_template_part('template-parts/footer-connect', null,
  array(
    'classExtend' => 'mr-t-250 mr-t-200-s4'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>