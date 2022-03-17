<?php
/**
 * Template Name: Retail Template
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
    'title-sub' => 'industry | retail',
    'title' => 'Grow Customer Loyalty and Build Brand Love for your Business',
    'desc' => "Do you know that Retailers are those benefit most from customer data. Mastering the data flow, Retailers can create a seamless customer experience that increases revenue and embraces customer loyalty.",
    'header-img' => get_template_directory_uri(). '/images/industry-retail/header.png'
  ));
?>

<?php 
  get_template_part('template-parts/top-tenant-retail', null,
    array(
      'classExtend' => 'mr-t-150 mr-t-120-s4'
    )
  )
?>

<?php 
  get_template_part('template-parts/industry-insights', null,
    array(
      'classExtend' => 'mr-t-175 mr-t-150-s4',
      'title' => 'industry insights',
      'name' => 'Perspectives On Retail ',
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
      'classExtend' => 'mr-t-200 mr-t-150-s4',
      'title-sm' => 'how can we help?',
      'title' => 'How Mobio upgrades your Buyer Experience', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'o2o data collection',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Understand your customers with <strong>O2O Data Collection</strong>',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-retail/retail-o2o-data-collection.png',
    'desc' => "<p>By using MOBIO CDP, Retailers not only gather customer feedback but also make it easy to create customer-centric roadmaps based on 
      the feedback and help connect data to create an excellent customer experience.  </p>",
    'next' => 'Explore our possibilities >>',
    'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-150-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Journey builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Reshape customers <strong>buying decision</strong>',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-retail/retail-journey-builder.png',
    'desc' => "<p>CX is a vital component in today's buying trend. But how can you create a complete journey for your customer knowing that it will end up boosting your revenue or increasing your ROI. 
      Mobio helps you create an end-to-end customer journey and track every touchpoint of your customer. </p>",
    'next' => 'Explore our possibilities >>',
    'next-url' => '#'
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-150-s4',
    // 'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'customer conversation',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Be there anywhere, anytime</strong> for your customers',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-9-16',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-retail/customer-conversation.png',
    'desc' => "<p>Reach your customers at every channel your business owns and listen to their direct needs. With our smart rule-based chat system and auto-reply library, 
    retailers can optimize customer response while maintaining a great service along the way. </p>",
    'next' => 'Explore our possibilities >>',
    'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-300 mr-t-150-s4',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'loyalty management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Game changing</strong> with loyalty management',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/industry-retail/retail-loyalty-management.png',
    'desc' => "<p>Guess what! Retailers today invest tremendously in loyalty programs as a core strategy for long-term growth. With our platform, retailers can engage customers at every step 
      they take along the customer journey, retain them with compelling loyalty programs, and turn them to your dedicated advocacy.</p>",
    'next' => 'Explore our possibilities >>',
    'next-url' => '#'
  )); ?>

<!-- customer use cases -->
<?php 
		get_template_part('template-parts/customer-use-cases', null, 
			array(
        'title' => 'retail Use Cases',
        'name' => 'See how Retailers benefit from Mobio',
				'items' => array(
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/guardian.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/guardian-bnw.png',
							'title' => 'Guardian',
              'text-tab' => 'Guardian',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did they succeed in managing operations and optimizing customer experience with Mobio Platform?',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/guardian.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/routine.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/routine-bnw.png',
							'title' => 'ROUTINE',
              'text-tab' => 'ROUTINE',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did they succeed in managing operations and optimizing customer experience with Mobio Platform?',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-loyalty.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/hdbank.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/hdbank-bnw.png',
							'title' => 'HD BANK',
              'text-tab' => 'HD BANK',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-ticket.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/phongvu.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/phongvu-bnw.png',
							'title' => 'Phong Vu',
              'text-tab' => 'Phong Vu',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-ticket.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/budweiser.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/budweiser-bnw.png',
							'title' => 'Budweiser',
              'text-tab' => 'Budweiser',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/sales-pipeline.png'
						),
				)
		));
	?>

<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-175 mr-t-150-s4',
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
    'classExtend' => 'mr-t-250 mr-t-150-s4'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>