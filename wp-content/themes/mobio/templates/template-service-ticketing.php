<?php
/**
 * Template Name: Service Ticketing Template
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
      'title' => 'Mobio service management',
      'name' => 'Meet Ticketing System',
      'desc' => 'Delivering consistently great customer service is hard. <br>The right ticketing system makes it easy.',
      'contact' => '1',
      'img-src' => get_template_directory_uri(). '/images/product/service/ticket-header.png'
    )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-100',
    'title-sm' => 'ticketing system',
    'title' => 'Organize, Prioritize, And Consolidate Support Requests',
    'desc' => 'Ticketing systems enable organizations to quickly assign inquiries to the most relevant agent, provide context to customer interactions, and track inquiries from customers. The system also provides a shared inbox which helps support staff coordinate their efforts.',
    'desc-w' => 'w-1250 w-1000'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
    'img-src' => get_template_directory_uri(). '/images/product/service/overview-ticketing.png'
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-250 mr-t-150-s4',
    'title-sm' => 'how it helps?',
    'title' => '<p>Features Of <span class="hl-text">An Online Ticketing System</span></p>',
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'omni channel support',
      'name' => 'Resolve customers issues accross <strong>every channel</strong>',
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => '',
      'divider' => 1,
      'desc' => '<p>Customers contact your organization from many channels: email, social media, live chat, and phone—sometimes simultaneously. In many companies, insights gained during these interactions are scattered between tools and teams. This forces the customers to repeat themselves every time they reach out. But by consolidating customer profiles and conversations into a shared inbox, omnichannel support enables agents to serve customers in their preferred channels.</p>',
      // 'next' => 'learn how to manage omnichannel strategy >>',
      // 'next-url' => '#'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'Ticket Routing, Categorization and Tagging',
          'name' => 'Ticket Routing, Categorization and Tagging',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250 mr-t-150-s4',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>In a larger enterprise, just centralizing customer support communications isn’t enough. To provide the best service, agents need to know—at a glance—a ticket’s status and what steps they must take, whether that’s routing the ticket to a different agent or handling it themselves.
          That’s why help desk ticketing systems also enable users to categorize and tag tickets as they come in. These categories and tags provide large, siloed teams with the ability to quickly route support tickets to the agents that have the skills and knowledge to handle them.
          </p>',
          // 'next' => 'learn how to manage your workspace >>',
          // 'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'Tracking and Measurement',
          'name' => 'Tracking and Measurement',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250 mr-t-150-s4',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>Good customer service departments resolve issues quickly and minimize back-and-forth. But that doesn’t happen without analytics. With ticketing system analytics, you can generate reports based on what you’re trying to understand. For example, you can quantify the amount of time your team spends on certain issues to help inform decisions about where to invest additional resources.</p>',
          // 'img-src' => '/wp-content/uploads/2022/01/4.3.-sales-task-mngt.png',
          // 'next' => 'see how quick response can boost your cx >>',
          // 'next-url' => '#'
        )); ?>

  
<?php
  get_template_part('template-parts/customer-stories', null,
      array(
        'no-title' => false,
        'classExtend' => 'mr-t-250 mr-t-150-s4'
      ));
  ?>

<?php
  get_template_part('template-parts/document-library', null,
    array(
      'no-title' => false,
      'classExtend' => 'mr-t-250 mr-t-150-s4'
    ));
?>

<?php get_template_part('template-parts/footer-contact', null,
    array (
      'title' => 'Curious about Ticketing? There’re a lot more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>