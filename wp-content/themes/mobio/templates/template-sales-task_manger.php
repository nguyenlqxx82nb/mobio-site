<?php
/**
 * Template Name: Sales Task Manager Template
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
      'title' => 'Mobio sales management',
      'name' => 'Meet Task Management',
      'desc' => 'Looking for task manager software to help you organize individual and team tasks in one shared space? 
        With Mobio, it’s easy to collaborate with your team, no matter where you are.',
      'img-src' => get_template_directory_uri(). '/images/product/sales/task-mngt.png',   
    )); ?>

<?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150 mr-t-250-s2',
                          'title-sm' => 'task management',
                          'title' => 'A minimal task tool to minimize your sales work'
                        )); ?>

  <?php get_template_part('template-parts/feature-image',null,
                        array( 
                          'img-src' => get_template_directory_uri(). '/images/product/sales/overview-task-management.png'
                         )); ?>

 <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title-sm' => 'how it helps',
        'title' => 'Task Management tool that helps <span class="hl-text">sell better</span>',
      )); ?>
 
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'task reminder',
          'name' =>  '<strong>Notify every task</strong> from upcomming to overdue',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-100',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-0',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/sales/task-mngt.png', 
          'desc' => '<p>Remind sales reps every task logged in many ways from notification within the app to web push, so sales won’t miss a single task. 
            Mobio Task Management is integrated with Google Calendar as well so missing a deadline won’t be a thing. </p>',
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'customer contact',
          'name' => 'Reach customers <strong>without leaving the platform</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-0',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/sales/task-mngt-contact.png',
          'desc' => '<p>Manage hundreds of leads with multiple sales processes. 
            A comprehensive platform for sales teams to grow relationships with customers through Call Center, Email Management, Meeting Schedule. 
            Every interaction between sales and customers is tracked and stored on the Deal History, helped sales and managers look it up anytime, anywhere in need.</p>',
        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'online sales',
      'name' => "<strong>Online sales and telesales</strong> on the go",
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-150',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-0',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/sales/task-mngt-call.png',
      'desc' => '<p>Sales reps can connect to customer via task management interface and close deals on the go via social chat or log a telesales via call center while seeing a full customer journey and information, 
        increase chances to seal the deals.</p>',
    )); ?>

  
<?php
  get_template_part('template-parts/customer-stories', null,
    array(
      'no-title' => false,
      'classExtend' => 'mr-t-150'
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
      'title' => 'Curious about Task Management? There’re lots more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>