<?php
/**
 * Template Name: Products CDP Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?> 
<!-- header -->

<?php get_template_part('template-parts/header-page',null,
  array( 
    'title' => 'Mobio cdp',
    'name' => 'Streamline your data platform and centralize customer data infrastructure',
    'name-class' => 'f-b f-60 mr-t-25',
  ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-100',
      'title-sm' => '360 degree customer view',
      'title' => 'See A Complete View Of Customer: From Lead To Advocacy', 
      'desc' => 'MOBIO CDP allows businesses to use accurate customer data in real-time to access, active, and orchestrate the customer journey, create a 360-degree customer view from O2O data sources.',
      'desc-w' => 'w-900'
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null,
    array(
      'classExtend' => 'mr-t-100',
      'img-src' => get_template_directory_uri(). '/images/product/cdp/customer-360-viewng.png'
    ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-300',
      'title-sm' => 'cdp functions',
      'title' => 'Easier And Faster To Access And Manage Your Data'
    )
  );
?>

<?php 
  get_template_part('template-parts/cdp-function', null, 
    array(
      'classExtend' => 'mr-t-90',
      'img-src' => '',
      'items' => array(
        array(
          'title' => 'Data collection',
          'desc' => '<p>Mobio CDP collects 1st-party data, including basic profile data, engagement data, and transaction data. 
          These datas comes from various sources: web, mobile, email, marketing campaigns, CRM, surveys, ecommerce systems, and more. 
          The data comes in many formats, structured and unstructured. <br/> <br/> The data is ingested in real-time, continually feeding the CDP with current customer data.</p>'
        ),
        array(
          'title' => 'profile unification',
          'desc' => '<p>This is the process of turning raw data from multiple sources, which might be incomplete, conflicting, unclean, and discordant into a set of unified profiles (or golden records), 
          that you trust and rely on consistently in every service you use.<br/><br/>Unifying data involves merging a company’s many fragmented data sources into one, 
          single central view that uses the best available information for every single User or Account you reference in your systems.
          <br>The benefit of Data Unification is that it provides a more holistic and accurate view of your many data sources.</p>'
        ),
        array(
          'title' => 'customer segmentation',
          'desc' => '<p>MOBIO CDP provides tools to define audience segments based on attributes and behaviors. 
          Segmentation can improve targeting and personalization. 
          Segments are rules-based, or they are built using machine learning and AI. </p>
          <br/><p>Using the customer segmentation capabilities of a customer data platform, you can do things like:<br>-	
          Identify Advocates<br>-	Predict Customer Churn<br>-	Identify potential Upsell and Cross-sell opportunities<br>-	Identify Top-Performing Customers</p>'
        ),
        array(
          'title' => 'business activation',
          'desc' => '<p>Once the profile is complete, our CDP can enrich the profile by integrating second and third-party data sources. 
          Enriching profiles using Mobio AI to fill in missing information such as gender, age, interests and place that profile live in. 
          It also helps with building a richer set of seed segments for advertising platforms—enhancing prospecting activities with higher match rates and market reach.</p>'
        ),
      )
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-300',
      'title-sm' => 'cdp architercture',
      'title' => 'The Perfect Chore For Your Data Harmony', 
      'desc' => 'Data are the cornerstone upon which companies are launching their digital transformations—investing in analytics capabilities, machine learning, robotics, and other technologies to boost their odds of success.',
      'desc-w' => 'w-1000'
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null,
    array(
      'classExtend' => 'mr-t-30',
      'img-src' => get_template_directory_uri(). '/images/product/cdp/cdp-2.png'
    ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-300',
      'title-sm' => 'the benefits of a cdp',
      'title' => 'Collect, Store, Unify And Other Capabilities', 
    )
  );
?>

<?php 
  get_template_part('template-parts/content-three', null, 
    array(
      'classExtend' => 'mr-t-50',
      'items' => array(
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-digital.png',
          'name' => 'Realtime Audience',
          'desc' => '<strong>The magic wand</strong> for success is in figuring out how to bring in the profits and ensure the capacity needed to sustain that growth for posterity.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-loyalty.png',
          'name' => 'Event Forwarding',
          'desc' => 'A potential customer, once lost, is hard to retain back. But <strong>keeping some critical</strong> factors in mind, we can, for sure, use these loyalty programs as customer retention tools.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-personal.png',
          'name' => 'Group Management',
          'desc' => 'We know how we candevelop deep, trust-based relationships with our clients, and work together more collaboratively'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-digital.png',
          'name' => 'Dynamic Fields',
          'desc' => '<strong>The magic wand</strong> for success is in figuring out how to bring in the profits and ensure the capacity needed to sustain that growth for posterity.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-loyalty.png',
          'name' => 'Data Integration',
          'desc' => 'A potential customer, once lost, is hard to retain back. But <strong>keeping some critical</strong> factors in mind, we can, for sure, use these loyalty programs as customer retention tools.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-personal.png',
          'name' => 'Touchpoint Trackingt',
          'desc' => 'We know how we candevelop deep, trust-based relationships with our clients, and work together more collaboratively'
        )
      )
    )
  );
?>


<?php 
  get_template_part('template-parts/cdp-guideline', null, 
    array(
      'classExtend' => 'mr-t-250',
      'title' => 'guideline',
      'name' => '2022 Ultimate Guide to CDP: Every Marketers need to know',
      'desc' => 'Before you invest in a CDP, read this handy guide to discover the true definition of a CDP, 
                  how a CDP differs from other data unification technologies, 
                  how they should fit into your existing tech stack, and the key things you should consider before investing.',
      'img-src' => get_template_directory_uri(). '/images/home/banking-cases.png'
    ));
?>

<?php 
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-200',
      'title-sm' => 'library',
      'title' => 'Highlight documents you might find helpful', 
    )
  );
?>

<?php 
  get_template_part('template-parts/content-three', null, 
    array(
      'classExtend' => 'mr-t-50',
      'items' => array(
        array(
          'name' => 'How CDP different from CRM, DMP and other platforms?',
          'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
          'next' => 'Download Ebook >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => '2022 Ultimate Guide to CDP: Annualy Update',
          'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain.',
          'next' => 'See Guideline >>',
          'next-url' => '#'
        ),
        array(
          'name' => 'CEO Guide: How to choose the right CDP vendor for your business?',
          'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
          'next' => 'Read Blog Post >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => 'Customer Cases: How businesses benefit from CDP?',
          'desc' => 'A CDP gives a retailer the ability to grab and integrate data from all the places their customers.',
          'next' => 'Download Ebook >>',
          'next-url' => '#',
        ),
        array(
          'name' => 'CDP 101: Integration and Activation',
          'desc' => 'The new consumer behaviors span all areas of life, from how we work to how we shop to how we entertain.',
          'next' => 'See Guideline >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => 'GDPR & CCPA: Everything you need to know',
          'desc' => "During the crisis, banks' clients changed their behaviour overnight.",
          'next' => 'Read Blog Post >>',
          'next-url' => '#',
          
        ),
      )
    )
  );
?>


<?php 
  get_template_part('template-parts/footer-connect-2', null, 
    array(
      'classExtend' => 'mr-t-200',
      'title' => 'Getting interested?',
      'desc' => 'Talk to our experts to get more insights about your own business case'
    )
  );
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>