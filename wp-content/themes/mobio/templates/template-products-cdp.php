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

<?php get_template_part('template-parts/header-product',null,
  array(
    'title-sub' => 'Mobio operation cdp',
    'title' => 'Streamline your Data Platform and Centralize Customer Data Infrastructure',
    'contact' => '1',
    'header-img' => get_template_directory_uri(). '/images/product/cdp/cdp-header.png',
    'title-width' => 'w-850'
  ));
?>

<?php 
  get_template_part('template-parts/top-tenant-enterprise', null,
    array(
      'classExtend' => 'mr-t-150',
      'title' => 'trusted by top enterprises in asian market'
    )
  )
?>


<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => '360-degree customer view',
      'title' => 'See a Complete View of Customer: From Lead to Advocacy', 
      'desc' => 'MOBIO CDP allows businesses to use accurate customer data in real-time to access, active, and orchestrate the customer journey, create a 360-degree customer view from O2O data sources.',
      'desc-w' => 'w-900'
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null,
    array(
      'classExtend' => 'mr-t-100',
      'img-src' => get_template_directory_uri(). '/images/product/cdp/customer-360.png'
    ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'operation cdp functions',
      'title' => 'Easier and Faster to Access and Manage your Data'
    )
  );
?>

<?php 
  get_template_part('template-parts/cdp-function', null, 
    array(
      'classExtend' => 'mr-t-80',
      'items' => array(
        array(
          'title' => 'Data collection',
          'desc' => '<p>Mobio CDP collects 1st-party data, including basic profile data, engagement data, and transaction data. 
          These datas comes from various sources: web, mobile, email, marketing campaigns, CRM, surveys, ecommerce systems, and more. 
          The data comes in many formats, structured and unstructured. </p>
          <p class="mr-t-10">The data is ingested in real-time, continually feeding the CDP with current customer data.</p>',
          'img-src' => get_template_directory_uri().'/images/product/cdp/cdp-collection.png',
        ),
        array(
          'title' => 'profile unification',
          'desc' => '<p>This is the process of turning raw data from multiple sources, which might be incomplete, conflicting, unclean, and discordant into a set of unified profiles (or golden records), 
          that you trust and rely on consistently in every service you use.<p/>
          <p class="mr-t-10">Unifying data involves merging a company’s many fragmented data sources into one, 
          single central view that uses the best available information for every single User or Account you reference in your systems</p>
          <p class="mr-t-10">The benefit of Data Unification is that it provides a more holistic and accurate view of your many data sources.</p>',
          'img-src' => get_template_directory_uri().'/images/product/cdp/cdp-unification.png',
        ),
        array(
          'title' => 'customer segmentation',
          'desc' => '<p>MOBIO CDP provides tools to define audience segments based on attributes and behaviors. 
          Segmentation can improve targeting and personalization. 
          Segments are rules-based, or they are built using machine learning and AI. </p>
          <p class="mr-t-10">Using the customer segmentation capabilities of a customer data platform, you can do things like:
            <br>-Identify Advocates
            <br>-	Predict Customer Churn
            <br>-	Identify potential Upsell and Cross-sell opportunities
            <br>-	Identify Top-Performing Customers</p>',
          'img-src' => get_template_directory_uri().'/images/product/cdp/cdp-segmentation.png',
        ),
        array(
          'title' => 'business activation',
          'desc' => '<p>Once the profile is complete, our CDP can enrich the profile by integrating second and third-party data sources. 
          Enriching profiles using Mobio AI to fill in missing information such as gender, age, interests and place that profile live in. 
          It also helps with building a richer set of seed segments for advertising platforms—enhancing prospecting activities with higher match rates and market reach.</p>',
          'img-src' => get_template_directory_uri().'/images/product/cdp/cdp-activate.png',
        ),
      )
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'mobio CDP’s additional functions',
      'title' => 'Collect, Store, Unify and other Capabilities', 
    )
  );
?>

<?php 
  get_template_part('template-parts/content-three', null, 
    array(
      'classExtend' => 'mr-t-50',
      'items' => array(
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-realtime-audience.svg',
          'name' => 'Realtime Audience',
          'desc' => 'Collect and update profile information in real-time, immediately activate the operating system.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-360-profile.svg',
          'name' => '360-degree view',
          'desc' => 'All collected information is saved and shown in CDP to create a full and detailed picture of each customer, including their activities, sentiment, transactions, ticket.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-auto-collection.svg',
          'name' => 'Auto Collection',
          'desc' => 'Automatically recognize and store phone numbers and emails in Customer’s comments on social channels or private messages.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-dynamic-field.svg',
          'name' => 'Dynamic Fields',
          'desc' => 'Allow users to create and define new data fields as per business characteristics and automatically create the corresponding filter criteria.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-ai-sentiment.svg',
          'name' => 'AI Sentiment Predict',
          'desc' => 'Read customers’ sentiments through social comments and divide them into 3 types: Positive, Neutral, and Negative.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/product/cdp/cdp-data-enrichment.svg',
          'name' => 'Data Enrichment',
          'desc' => 'Analyze existing data, Facebook data & web interaction behavior to enrich profile information about their gender, age, location, and interests.'
        )
      )
    )
  );
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'mobio cdp architercture',
      'title' => 'The Perfect Chore for your Data Harmony', 
      'desc' => 'Data are the cornerstone upon which companies are launching their digital transformations—investing in analytics capabilities, machine learning, robotics, and other technologies to boost their odds of success.',
      'desc-w' => 'w-1000'
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null,
    array(
      'classExtend' => 'mr-t-30',
      'img-src' => get_template_directory_uri(). '/images/product/cdp/cdp-architect.png'
    ));
?>

<?php 
  get_template_part('template-parts/cdp-guideline', null, 
    array(
      'classExtend' => 'mr-t-150',
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
      'classExtend' => 'mr-t-150'
    ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
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
          'desc' => 'Only CDP can deliver a complete view of the customer beyond the sales cycle.',
          'next' => 'Download Ebook >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => '2022 Ultimate Guide to CDP: Annualy Update',
          'desc' => 'Latest digital trends Marketers need to know about the Customer Data Platform.',
          'next' => 'See Guideline >>',
          'next-url' => '#'
        ),
        array(
          'name' => 'CEO Guide: How to choose the right CDP vendor for your business?',
          'desc' => 'You know your business needs a CDP. But what vendor works best for your business case?',
          'next' => 'Read Blog Post >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => 'Customer Cases: How businesses benefit from CDP?',
          'desc' => 'A CDP gives businesses the ability to grab and integrate data from all the places their customers.',
          'next' => 'Download Ebook >>',
          'next-url' => '#',
        ),
        array(
          'name' => 'CDP 101: Integration and Activation',
          'desc' => 'Learn how to use personalized customer data to boost acquisition, improve CX, engage in real-time, and increase upsells and cross-sells.',
          'next' => 'See Guideline >>',
          'next-url' => '#',
          'highlight' => 1
        ),
        array(
          'name' => 'GDPR & CCPA: Everything you need to know',
          'desc' => 'The GDPR is one of the most comprehensive data protection laws in the world to date.',
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
      'classExtend' => 'mr-t-150',
      'title' => 'Getting interested?',
      'desc' => 'Talk to our consultants to get more insights about your own business case'
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