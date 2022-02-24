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
                            'desc' => 'Build more effective and personalized customer experience. Engage customers at every step of the user lifecycle.'
                          )); ?>

<div class="auto-container">

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'imageLeft' => 1,
                          'name' => 'A success marketing campaign is impossible without a trigger-based strategy.',
                          'nameClass' => 'f-b f-48',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'desc' => '<p>Trigger campaign is when a marketing message is automatically delivered after a specific event has occurred. Marketing messages are delivered after being activated by a certain date and time, a change in the state of current events, action on behalf of the user, or time elapsed since the last interaction.</p>',
                          'next' => 'See journey Builder >>',
                          'next_url' => '#'
                        )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-250',
                          'title-sm' => 'trigger-based campaign',
                          'title' => 'Types Of Trigger-Based Campaign'
                        )); ?>

  <?php get_template_part('template-parts/tab-images',null,
                        array( 
                          'items' => array(
                            array(
                              'title' => 'Campaign Activity',
                              'img-src' =>  get_template_directory_uri() .  '/images/home/mkt-jb.png',
                            ),
                            array(
                              'title' => 'Audience Management',
                              'img-src' =>  get_template_directory_uri() .  '/images/home/mkt-email.png',
                            ),
                            array(
                              'title' => 'Workflow Activity',
                              'img-src' => get_template_directory_uri() .  '/images/home/sales-pipeline.png',
                            ),
                            array(
                              'title' => 'E-Commerce',
                              'img-src' => get_template_directory_uri() .  '/images/home/service-loyalty.png',
                            ),
                            array(
                              'title' => 'Integrations',
                              'img-src' => get_template_directory_uri() .  '/images/home/service-ticket.png',
                            ),
                            array(
                              'title' => 'Data-based',
                              'img-src' =>get_template_directory_uri() .  '/images/home/use-cases.jpg',
                            ),
                          ),
                        )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-250',
                          'title-sm' => 'how it works?',
                          'title' => 'How Trigger Campaign Works?',
                          'desc-w' => 'w-1100',
                          'desc' => 'Mobio trigger feature makes it possible for you to automatically display your campaigns just when the time is right. This helps to lessen the chances of irritating your visitors, thus ensuring you capture as many leads as possible.'
                        )); ?>
  
  <?php get_template_part('template-parts/campaign-works',null,
                        array( 
                          'items' => array(
                            array(
                              'title' => 'Welcome Message'
                            ),
                            array(
                              'title' => 'Onbroading',
                              'img-src' => get_template_directory_uri() .  '/images/home/service-loyalty.png'
                            ),
                            array(
                              'title' => 'Early Activation'
                            ),
                            array(
                              'title' => 'Reactivation'
                            ),
                            array(
                              'title' => 'Transactional'
                            ),
                            array(
                              'title' => 'Account Notification'
                            ),
                            array(
                              'title' => 'Personal Events'
                            ),
                            array(
                              'title' => 'Milestones'
                            ),
                          ),
                        )); ?>

  
    <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-200',
                          'title-sm' => 'trigger in action',
                          'title' => 'See How Trigger Campaigns Can Be A Game Changer',
                        )); ?>

    <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'e-commerce',
                          'name' => 'Reduce <strong>Cart Abandonment</strong> and convert to Sales',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-150',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'desc' => '<p>Throughout the e-commerce lifecycle, there is a large number of triggers waiting which, with the right direct marketing measures, can be used to activate, retain and emotionalise customers.
                          One of the most critical trigger in e-commerce is Cart Abandonment, which can be reduced effective with our trigger-build campaigns. </p>',
                          'next-button' => 'see in action',
                          'next_url' => '#'
                        )); ?>
    
    <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'Social Media',
                          'name' => '<strong>Catch customers</strong> every time they interact with your social channels',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-200',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'desc' => '<p>Of all the metrics you pour over, social media engagement has to rank among the top in terms of importance, because engagement leads to sales. If you have your engagement strategy down, it means you’re losing huge potential of reaching leads and making new deals. Fortunately, our platform allows you to automatically engage with customers every time they make a move.</p>',
                          'next-button' => 'see in action',
                          'next_url' => '#'
                        )); ?>
     <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'date-based',
                          'name' => '<strong>Miss no special days</strong> to send meaningful messages  ',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-200',
                          'classImageRatio' => 'rt-3-4',
                          'divider' => 1,
                          'desc' => '<p>Customers’ birthday, anniversary, first purchase, date of import, etc. A lot of important days to remember and take action which it’s getting harder to manage when your customer data increases. Don’t worry, with trigger-based campaign, every special days will be store in the database and messages and gifts will be sent automatically to your customers in time.</p>',
                          'next-button' => 'see in action',
                          'next_url' => '#'
                        )); ?>

  <?php
      get_template_part('template-parts/customer-stories', null,
        array(
          'no-title' => false,
          'classExtend' => 'mr-t-250'
        ));
    ?>

    <?php
      get_template_part('template-parts/document-library', null,
        array(
          'no-title' => false,
          'classExtend' => 'mr-t-250'
        ));
    ?>

  <?php get_template_part('template-parts/footer-contact', null,
      array( 
        'title' => 'Curious about Trigger Campaign? There’re a lot more to explore!'
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