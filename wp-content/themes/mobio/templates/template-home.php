<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

 get_header();
?>

<?php get_template_part('template-parts/header-home',null,
  array()); ?>

	<?php get_template_part('template-parts/top-tenant-enterprise',null,
  	array(
			'classExtend' => 'mr-t-175 mr-t-150-s4',
			'title' => 'We help Enterprises achieve their goals!'
		)); ?>

	<?php 
		get_template_part('template-parts/section-title',null,
			array(
				'classExtend' => 'mr-t-175 mr-t-150-s4',
				'classMedia' => 'mr-t-120-s1',
				'title-sm' => 'Core Value',
				'title' => 'Customer Data Platform',
				'desc' => 'CDP is the heart of our products. As a tech consulting company, we know that data is treasure to build customer journey and leading business decisions along the way.',
				'desc-w' => 'w-800'
			));
	?>

	<?php 
		get_template_part('template-parts/feature-image',null,
			array(
				'classExtend' => 'mr-t-30',
				'img-src' => get_template_directory_uri() . '/images/home/Mobio Platform_CDP-CEM.png'
			));
	?>

<?php 
		get_template_part('template-parts/section-title',null,
			array(
				'classExtend' => '',
				'classMedia' => 'mr-t-0-s1',
				'next-button' => 'LEARN MORE',
				'next-url' => get_site_url() . '/products-cdp'
			));
	?>

	<!-- <div class="mr-t-35 mr-t-15-s1 mr-auto text-center"><button class="btn-small">LEARN MORE</button></div> -->
	

	<?php 
		get_template_part('template-parts/section-title',null,
			array(
				'classExtend' => 'mr-t-250 mr-t-200-s4',
				'title-sm' => 'Product',
				'title' => 'Our Operating System',
				'desc' => 'We know the right solutions for your business problems.',
				'desc-w' => 'w-800'
			));
	?>

	<?php 
		get_template_part('template-parts/home-row-tab',null,
			array(
				'classExtend' => 'mr-t-100',
				'anchor' => 'tab-marketing',
				'items' => array(
					array(
						'tab-title' => 'Journey Builder',
						'title' => '<p>Marketing Management</p>',
						'name' => '<p>End-to-end Customer Journey</p>',
						'desc' => '<p>Journey Builder is our highlight marketing feature that designed to help marketers build a cross-cutting script for digital marketing campaigns and capture every customer touchpoint along the way.</p>',
						'url' => get_site_url().'/mkt-journey-builder',
						'img-src' => get_template_directory_uri() . '/images/home/marketing-journey-builder-visual.png',
						'classImgRatio' => 'rt-3-4'
					),
					array(
						'tab-title' => 'Email Marketing',
						'title' => '<p>Marketing Management</p>',
						'name' => '<p>Personalized Messages Direct to Mailbox</p>',
						'desc' => '<p>Create unique email style for your brand and deliver 1-to-1 messages to your customers. Upgrade your email sender reputation with our email strategy toolkit.</p>',
						'url' => get_site_url().'/mkt-journey-builder',
						'img-src' => get_template_directory_uri() . '/images/home/marketing-email-builder.png',
						'classImgRatio' => 'rt-3-4'
					),
					array(
						'tab-title' => 'Trigger Campaign',
						'title' => '<p>Marketing Management</p>',
						'name' => '<p>Meaningful Reaction for all User Interaction</p>',
						'desc' => '<p>Engage customer at every step of user lifecycle and deliver the right messages, at the right time in an one-to-one journey. </p>',
						'url' => get_site_url().'/mkt-trigger-campaign',
						'img-src' => get_template_directory_uri() . '/images/home/marketing-trigger-campaign.png',
						'classImgRatio' => 'rt-3-4'
					)
				)
			));
	?>

	
	<?php 
		get_template_part('template-parts/home-row-tab',null,
			array(
				'classExtend' => 'mr-t-300 mr-t-250-s4',
				'img-left' => 1,
				'anchor' => 'tab-sales',
				'items' => array(
					array(
						'tab-title' => 'Lead Distribution',
						'title' => '<p>Sales Management</p>',
						'name' => '<p>The Right Leads to the Right Reps</p>',
						'desc' => '<p>Rule-based platform that automates generate qualify leads to suitable salesman in the team. </p>',
						'url' => get_site_url().'/sales-lead-distribution',
						'img-src' => get_template_directory_uri() . '/images/home/sales-lead-distribution.png'
					),
					array(
						'tab-title' => 'Sales Pipeline',
						'title' => '<p>Sales Management</p>',
						'name' => '<p>Build your own Sales Process</p>',
						'desc' => '<p>Design the most efficient sales process and take control of your own progress, increase revenue and reduce the time to close the sale on each order.</p>',
						'url' => get_site_url().'/sales-pipeline',
						'img-src' => get_template_directory_uri() . '/images/home/sales-sales-pipeline.png'
					),
					array(
						'tab-title' => 'Task Management',
						'title' => '<p>Sales Management</p>',
						'name' => '<p>Keep track every step of your work </p>',
						'desc' => '<p>Contact customer via every channel, book meetings and appointments, remind any task you missed and any other sales task so you can focus on closing deals</p>',
						'url' => get_site_url().'/sales-task-manger',
						'img-src' => get_template_directory_uri() . '/images/home/sales-task-management.png'
					)
				)
			));
		?>


	<?php 
		get_template_part('template-parts/home-row-tab',null,
			array(
				'classExtend' => 'mr-t-300 mr-t-250-s4',
				'anchor' => 'tab-service',
				'items' => array(
					array(
						'tab-title' => 'Social & Chat',
						'title' => '<p>Service Management</p>',
						'name' => '<p>Connect on Time, on Target</p>',
						'desc' => '<p>Respond to customer via every social channel and the website on real-time and improve customer response times by our smart algorithm.</p>',
						'url' => get_site_url().'/service-customer-response',
						'img-src' => get_template_directory_uri() . '/images/home/service-social-chat.png'
					),
					array(
						'tab-title' => 'Ticketing',
						'title' => '<p>Service Management</p>',
						'name' => '<p>Track, prioritize, and solve CS tickets</p>',
						'desc' => '<p>All your customer information is stored in one place, thereby communication between you and your customers is efficient, relevant, and personal. </p>',
						'url' => get_site_url().'/service-ticketing',
						'img-src' => get_template_directory_uri() . '/images/home/service-ticketing.png'
					),
					array(
						'tab-title' => 'Loyalty Management',
						'title' => '<p>Service Management</p>',
						'name' => '<p>Raise brand awareness</p>',
						'desc' => '<p>Create and manage immersive loyalty programs, drive sustained brand loyalty and advocacy, improved customer experiences and business value.</p>',
						'url' => get_site_url().'/service-loyalty-management',
						'img-src' => get_template_directory_uri() . '/images/home/service-loyalty-management.png'
					)
				)
			));
		?>
	
			
	<?php 
			get_template_part('template-parts/why-choose-mobio',null,
				array());
		?>

	<!-- customer use cases -->
	<?php 
		get_template_part('template-parts/customer-use-cases', null, 
			array(
				'title' => 'Customer Use Cases',
        'name' => 'Inspired by Our Customer’s Success Stories',
				'items' => array(
						array(
							'text-tab' => 'Guardian',
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/guardian.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/guardian-bnw.png',
							'title' => 'Guardian',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Guardian is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did they succeed in managing operations and optimizing customer experience with Mobio Platform?',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/guardian.png'
						),
						array(
							'text-tab' => 'Samsung',
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/samsung.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/samsung-bnw.png',
							'title' => 'Samsung',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Samsung is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did they succeed in managing operations and optimizing customer experience with Mobio Platform?',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-loyalty.png'
						),
						array(
							'text-tab' => 'Sunworld',
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/sunworld.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/sunworld-bnw.png',
							'title' => 'Sunworld',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Sunworld is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-ticket.png'
						),
						array(
							'text-tab' => 'Phong Vu',
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/phongvu.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/phongvu-bnw.png',
							'title' => 'Phong Vu',
							'title-sub' => 'Maximize customer response time',
							'desc' => 'Phong Vu is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
							'url' => '#',
							'img-src' => get_template_directory_uri().'/images/home/service-ticket.png'
						),
						array(
							'text-tab' => 'Budweiser',
							'tab-img-s' => get_template_directory_uri() . '/images/tenant/budweiser.png',
							'tab-img-n' => get_template_directory_uri() . '/images/tenant/budweiser-bnw.png',
							'title' => 'Budweiser',
							'title-sub' => '26% increase in voucher redeem',
							'desc' => 'Budweiser is one of the biggest cosmetic retail chain in Vietnam with more than 90 brick-and-mortal stores across the country. How did ',
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
      'title' => 'Most Helpful Paper selected by our Customers',
    )); ?>
  
  
<?php get_template_part('template-parts/row-content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'content' => array(
      array(
        'title' => 'Why 2022 is the year for Retailers to use CDP?',
        'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
        'next' => 'Download Ebook >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library1.jpg'
      ),
      array(
        'title' => 'How Customer Behavior changes in Post-covid?',
        'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain ourself.',
        'next' => 'See Guideline >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library2.jpg'
      ),
      array(
        'title' => 'How Banking Industry adapts to the Digital Era?',
        'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
        'next' => 'Read Blog Post >>',
				'next-url' => get_site_url(). '/coming-soon',
				'img-src' => get_template_directory_uri(). '/images/home/library3.jpg'
      )
    )
  )); ?>

	<?php get_template_part('template-parts/breaking-case',null,
    array( 
      'classExtend' => 'mr-t-50 mr-b-300 mr-b-70-s1 mr-b-200-s4',
			'title' => 'Banking cases',
			'title-sub' => 'CDP use case: Banking sector',
			'desc' => '<p>In Banking industry, data security and privacy are top of mind. Banks hold the most sensitive data and have the highest security requirements. Even sharing data accross organization could be a challenge as its stricted surrounding regulations. <br> <br>To learn how banks use MOBIO CDP to deal with their data complexity challenges, please contact us for private documents and consulting.</p>',
			'img-src' => get_template_directory_uri(). '/images/home/banking-cases.png'
    )); ?>


<?php get_template_part(
    'template-parts/footer', null,
    array( 
      'home' => '1'
    )
  ); ?>
