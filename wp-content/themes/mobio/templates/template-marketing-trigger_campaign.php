<?php
/**
 * Template Name: Marketing Trigger Campaign Template
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
                            'title' => 'Mobio marketing management',
                            'name' => 'Meet Trigger Campaign',
                            'desc' => 'Build more effective and personalized customer experience. Engage customers at every step of the user lifecycle.',
                            'img-src' => get_template_directory_uri(). '/images/product/marketing/trigger-header.png'
                          )); ?>

<div class="auto-container">

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'imageLeft' => 1,
                          'name' => 'A success marketing campaign is impossible without a trigger-based strategy.',
                          'nameClass' => 'f-b f-30',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'img-src' => get_template_directory_uri(). '/images/product/marketing/trigger-jb.png',
                          'desc' => '<p>Trigger campaign is when a marketing message is automatically delivered after a specific event has occurred. 
                          Marketing messages are delivered after being activated by a certain date and time, a change in the state of current events, 
                          action on behalf of the user, or time elapsed since the last interaction.</p>',
                          'next' => 'See journey Builder >>',
                          'next_url' => get_site_url().'/mkt-journey-builder'
                        )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'default trigger',
                          'title' => '<span class="hl-text c-4-b">30+ Triggers</span> to Optimize your Marketing Campaign',
                          'desc' => 'Mobio Trigger feature makes it possible for you to automatically display your campaigns just when the time is right. 
                          This helps to lessen the chances of irritating your visitors, thus ensuring you capture as many leads as possible.'
                        )); ?>

  <?php get_template_part('template-parts/campaign-works',null,
                        array( 
                          'items' => array(
                            array(
                              'title' => 'Special Day',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-01.png'
                            ),
                            array(
                              'title' => 'Website Interaction',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-02.png'
                            ),
                            array(
                              'title' => 'E-commerce',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-03.png'
                            ),
                            array(
                              'title' => 'Social Media',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-04.png'
                            ),
                            array(
                              'title' => 'Transaction',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-05.png'
                            ),
                            array(
                              'title' => 'Profile Update',
                              'img-src' => get_template_directory_uri() .  '/images/product/marketing/triggers-default-06.png'
                            ),
                          ),
                        )); ?>

  <?php 
    get_template_part('template-parts/section-title', null, 
      array(
        'classExtend' => 'mr-t-150',
        'title-sm' => 'customized trigger',
        'title' => 'Trigger Bespoked to each Industry', 
      )
    );
  ?>
    <?php 
      get_template_part('template-parts/content-three', null, 
        array(
          'classExtend' => 'mr-t-50',
          'items' => array(
            array(
              'icon-src' => get_template_directory_uri().'/images/product/marketing/trigger-1.svg',
              'name' => 'Banking Service',
              'desc' => 'Customer journey is no longer the unpredicted prospect that you have to follow. Now businesses create and decide the way customers interact, what messages they get, and all the steps they take.'
            ),
            array(
              'icon-src' => get_template_directory_uri().'/images/product/marketing/trigger-2.svg',
              'name' => 'Digital Wallet',
              'desc' => 'Messages to customers are customized for each individual, making them feel that those messages are unique and sent personally, boosting CTR, ROI, and conversion in your marketing campaign.'
            ),
            array(
              'icon-src' => get_template_directory_uri().'/images/product/marketing/trigger-3.svg',
              'name' => 'Retail',
              'desc' => 'Every customer touchpoints and digital footprint across the journey are tracked, collected, and stored in CDP, achieving the goal of every business: a single source of truth.'
            ),
          )
        )
      );
    ?>
  
    <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'trigger in action',
                          'title' => 'See how Trigger Campaigns can <br>be a <span class="hl-text">Game Changer for Business</span>',
                        )); ?>

    <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'e-commerce',
                          'name' => 'Reduce <strong>Cart Abandonment</strong> and convert to Sales',
                          'nameClass' => 'f-n f-36',
                          'classExtend' => 'mr-t-100',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'img-src' => get_template_directory_uri(). '/images/product/marketing/trigger-e-commerce.png',
                          'desc' => '<p>Throughout the e-commerce lifecycle, there is a large number of triggers waiting 
                          which, with the right direct marketing measures, can be used to activate, retain and emotionalise customers.</p>
                          <p class="mr-t-10">One of the most critical trigger in e-commerce is Cart Abandonment, which can be reduced effective with our trigger-build campaigns. </p>',
                          //'next-button' => 'see in action',
                          //'next_url' => '#'
                        )); ?>
    
    <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'imageLeft' => '1',
                          'title' => 'date-based',
                          'name' => '<strong>Miss no special days</strong> to send meaningful messages',
                          'nameClass' => 'f-n f-36',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'img-src' => get_template_directory_uri(). '/images/product/marketing/trigger-special-day.png',
                          'desc' => '<p>Customers’ birthday, anniversary, first purchase, date of import, etc. A lot of important days to remember and take action which it’s getting harder to manage when your customer data increases. Don’t worry, with trigger campaigns, 
                            every special day will be stored in the database, and messages and gifts will be sent automatically to your customers in time.  </p>',
                          // 'next-button' => 'see in action',
                          // 'next_url' => '#'
                        )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'transaction',
                          'title' => 'Easier <strong>Upsell & Cross-sell</strong> for digital monetary product',
                          'title-class' => 'f-n f-40',
                          'desc' => 'Customer journey for banking services and other FSI businesses can be hard to manage since it required highly personalized messages and a 
                          long complicated journey, not to mention its surrounding regulatory about security.
                           Fortunately, our platform allows you to create a sophisticated journey that automatically engages with customers every time they make a move.',
                           'desc-w' => 'w-1000'
                        )); ?>
  <?php 
  get_template_part('template-parts/feature-image', null, 
    array(
      'img-src' => get_template_directory_uri(). '/images/product/marketing/trigger-digital-bank.png'
    )
  )
?>

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

  <?php get_template_part('template-parts/footer-contact', null,
      array( 
        'title' => 'Curious about Trigger Campaign? There’re lots more to explore!'
      )
    ); ?>

</div> 


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>