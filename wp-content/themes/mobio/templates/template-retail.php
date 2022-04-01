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
    'title' => 'Grow Customer Loyalty and build Brand Love for your Business',
    'desc' => "Do you know that Retailers are those benefit most from customer data. Mastering the data flow, Retailers can create a seamless customer experience that increases revenue and embraces customer loyalty.",
    'header-img' => get_template_directory_uri(). '/images/industry-retail/header.png'
  ));
?>

<?php 
  get_template_part('template-parts/top-tenant-retail', null,
    array(
      'classExtend' => 'mr-t-120'
    )
  )
?>

<?php 
  get_template_part('template-parts/industry-insights', null,
    array(
      'classExtend' => 'mr-t-150',
      'title' => 'industry insights',
      'name' => 'Perspectives On Retail ',
      'desc' => 'Retail is accelerating at a shocking pace. These trends and insights are up-to-date with statistics provided by Deloitte, McKinsey, 
      PwC, and opinions of C-suite leaders and experts in the fields. ',
      'items' => array(
        array(
          'icon' => get_template_directory_uri().'/images/industry-retail/retail-digital.svg',
          'title' => 'Digital & <br> Omnichannel',
          'desc' => 'Go to digital or go bust.  Now it’s time to invest more in e-commerce and online channels.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-retail/retail-loyalty.svg',
          'title' => 'Loyalty <br> is key',
          'desc' => 'Since the pandemic, brands are now focus stronger on building their loyal army.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-retail/retail-o2o.svg',
          'title' => 'O2O Customer<br> experience',
          'desc' => 'From mortar stores to online channels, customers today are expecting an end-to-end experience and service.'
        ),
        array(
          'icon' => get_template_directory_uri().'/images/industry-retail/retail-realtime.svg',
          'title' => 'Everything<br> real-time',
          'desc' => 'For retailers, customer behavior, digital footprint, latest trends, everything must be updated constantly.'
        )
      ),
      'next-url' => '#'
    ))
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'how can we help?',
      'title' => 'How Mobio upgrades your Buyer Experience', 
    )
  );
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'classExtend' => 'mr-t-100',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'o2o data collection',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Understand your customers with <strong>O2O Data Collection</strong>',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n',
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
    'classExtend' => 'mr-t-150',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Journey builder',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Reshape customers <strong>buying decision</strong>',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n',
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
    'classExtend' => ' mr-t-150',
    // 'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'customer conversation',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Be there anywhere, anytime</strong> for your customers',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-40',
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
    'classExtend' => 'mr-t-150',
    'imageLeft' => '1',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'loyalty management',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Game changing</strong> with loyalty management',
    // 'classColContent' => 'mo-col-5',
    // 'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n',
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
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/tenants/guardian-white.png',
							'title' => 'Guardian',
              'text-tab' => 'Guardian',
							'title-sub' => 'Boost customer engagement <br>through loyalty programs',
							'desc' => 'Guardian is one of the biggest cosmetic retail chains in Vietnam with more than 90 brick-and-mortar stores
               across the country. How did they succeed in managing operations and optimizing customer experience with Mobio Platform?',
							'url' => get_site_url(). '/customer-cases',
							'img-src' => get_template_directory_uri().'/images/home/guardian.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/tenants/galle-tim.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/tenants/galle-white-in.png',
							'title' => 'Galle Watch',
              'text-tab' => 'Galle Watch',
							'title-sub' => 'Optimize customer satisfaction at scale',
							'desc' => 'Galle has successfully coordinated Marketing, Sales, and CS Teams all in one platform and built an 
              effective evaluation system for employee performance.',
							'url' => get_site_url(). '/customer-cases',
							'img-src' => get_template_directory_uri().'/images/home/galle-case-2.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/tenants/vnshop.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/tenants/vnshop-white.png',
							'title' => 'VNShop',
              'text-tab' => 'VNShop',
							'title-sub' => 'Optimize conversion rate <br>through personalized campaign',
							'desc' => 'Increase the conversion rate of using vouchers through Landing Page campaigns by personalizing messages 
              and reminding customers to use vouchers at the right time.',
							'url' => get_site_url(). '/customer-cases',
							'img-src' => get_template_directory_uri().'/images/home/vnshop-case-2.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/tenants/phongvu.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/tenants/phongvu-white.png',
							'title' => 'Phong Vu',
              'text-tab' => 'Phong Vu',
							'title-sub' => 'Leverage digital strategy in the age of COVID-19',
							'desc' => 'Phong Vu is known for its chain of retail stores spread across the North, Central, and South regions in 
              Vietnam. How did this traditional brick-and-mortar business adapt so quickly to digital transformation and nail the 
              online service during the pandemic?',
							'url' => get_site_url(). '/customer-cases',
							'img-src' => get_template_directory_uri().'/images/home/phong-vu-case.png'
						),
						array(
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/tenants/sapporo.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/tenants/sapporo-white.png',
							'title' => 'Sapporo',
              'text-tab' => 'Sapporo',
							'title-sub' => 'Optimize marketing execution',
							'desc' => 'Sapporo is the oldest beer brand in Japan and has become well known in Vietnam since 2010.
              How did Mobio help them adapt to digital transformation in the era of online purchasing?',
							'url' => get_site_url(). '/customer-cases',
							'img-src' => get_template_directory_uri().'/images/home/sapporo-case-1.jpg'
						),
				)
		));
	?>

<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => 'mr-t-150',
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
    'classExtend' => 'mr-t-150'
  ));
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>