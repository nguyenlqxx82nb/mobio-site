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
      'desc' => 'Looking for task manager software to help you organize individual and team tasks in one shared space? With Mobio, it’s easy to collaborate with your team, no matter where you are.'
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array( 
    'imageLeft' => 1,
    'name' => 'The only task tool you need for task management and lists',
     'nameClass' => 'f-b f-45',
    'classExtend' => 'mr-t-150',
    'classImageRatio' => 'rt-3-4',
    'classImageContainer' => '',
    //'classImage' => 'b-r-10',
    // 'divider' => 1,
    'desc' => '<p>Task management is more than a to-do list. It means tracking tasks from beginning to end, delegating subtasks to teammates, and setting deadlines to make sure projects get done on time. Task management can empower teams to work more productively and efficiently.</p>',
    // 'img-src' => '/wp-content/uploads/2022/01/4.3.-sales-task-mngt.png'
  )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-200',
        'title-sm' => 'task manager feature',
        'title' => 'One solution to prioritize your tasks',
      )); ?>

<?php get_template_part('template-parts/content-two',null,
      array( 
        'classExtend' => 'mr-t-50',
        'items' => array(
          array(
            'name' => 'Keep tasks in one place',
            'desc' => 'Save time and stay on schedule  by delegating and tracking tasks. Say goodbye to losing work or scrambling to track down information.'
          ),
          array(
            'name' => 'Prioritize your work',
            'desc' => 'Task tracking allows teams to see which tasks are most important or time intensive. With Mobio, there’s no guesswork to figure out what to work on first.'
          ),
          array(
            'name' => 'Track team progress',
            'desc' => 'Check in on the status of your team’s projects at a glance. Easily see status changes and updates on individual tasks.'
          ),
          array(
            'name' => 'Set due dates and never miss deadlines',
            'desc' => 'Easily assign tasks to team members. Set due dates for larger projetcs and subtasks in an easy-to-view method.'
          ),
        )
      )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-300',
        'title-sm' => 'how it helps',
        'title' => 'Task manager that helps <span class="c-4-b t-d-u">sales better</span>',
      )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'action plan',
          'name' => 'Create priority action plan',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-0',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>Creating a action plan and assign new tasks based on time to complete, time to remind or priority, which is the key to keeping your team on track.</p>',
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'task reminder',
          'name' => 'Notify every task from upcomming to overdue',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-0',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>Remind sales reps every task logged in many ways from notification within the app to web push, so sales won’t miss a single task. Mobio Task Management is integrated with Google Calendar as well so missing a deadline won’t be a thing. </p>',
        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'customer contact',
      'name' => "Reach customers without leaving the platform",
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-250',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-0',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>Manage hundred of leads with multiple sales process. A comprehensive platform for sales team to grow relationship with customers through Call Center, Email Management, Meeting Schedule through Calendar and Task Management. Every interaction between sales and customers is tracking and stored on the Deal History, helps sales and manager can look it up every time, every where in need</p>',
    )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'title' => 'online sales',
      'name' => "Online sales and telesales on the go",
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-250',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-0',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>Sales reps can connect to customer via task management interface and close deals on the go via social chat or log a telesales via call center while seeing a full customer journey and information, increase chances to seal the deals.</p>',
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
      'title' => 'Curious about Task Manager? There’re a lot more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>