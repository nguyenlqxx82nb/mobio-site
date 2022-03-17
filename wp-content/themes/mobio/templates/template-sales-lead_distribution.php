<?php
/**
 * Template Name: Sale Lead Distribution Template
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
        'name' => 'Meet Lead Distribution',
        'desc' => 'Save up to 75% on development time — without additional headcount. Build more effective emails, faster to scale efforts and drive better results.',
        'img-src' => get_template_directory_uri() . '/images/product/sales/lead-distribution-header.png'
      )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'How lead distribution works?',
                          'title' => 'Matching Leads to the Right Reps'
                        )); ?>

  <?php get_template_part('template-parts/feature-image',null,
                        array( 
                          'img-src' => get_template_directory_uri() . '/images/product/sales/lead-distribution-top_1.png' 
                         )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-200',
                          'title-sm' => 'what can you do with it?',
                          'title' => 'Capture all leads and deliver <span class="hl-text">automatically</span>',
                        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'imageLeft' => 1,
                          'title' => 'Smart rule-based',
                          'name' => '<strong>Smart and real-time </strong> delivery',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-200 mr-t-150-s4',
                          'classImageRatio' => 'rt-3-4',
                          'classImageContainer' => '',
                          'divider' => 1,
                          'img-src' => get_template_directory_uri(). '/images/product/sales/lead-distribution-lead.png',
                          'desc' => "<p>Intelligently route leads to your sales team based on geography, your team’s skills, KPI performance, and so on. 
                            Mobio’s smart rule-based system will make sure every lead is allocated in real-time to the right salesperson that meets both customers' and sales’ needs. 
                            In that way, the selling process will be faster and more efficient.</p>",
                        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        
                        'title' => 'customize for teams and individuals',
                        'name' => 'Distribute leads based on <strong>your team’s skills and needs</strong>',
                        'nameClass' => 'f-n f-56',
                        'classExtend' => 'mr-t-250 mr-t-200-s4',
                        'classImageRatio' => 'rt-3-4',
                        'classImageContainer' => 'b-sd-n pa-0',
                        'classContent' => 'pa-r-120',
                        'divider' => 1,
                        'img-src' => get_template_directory_uri(). '/images/product/sales/lead-distribution-team.png',
                        'desc' => '<p>While it is important to maximize on follow-ups, never let it overshadow the quality of sales follow-ups. 
                          Set capping logic to ensure that your agents aren’t assigned more leads than they can handle without compromising on call quality. 
                          For example – if your agents can handle 10 prospects daily, refrain from assigning leads beyond that number. </p>',
                      )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
          array( 
            'imageLeft' => 1,
            'title' => 'tracking and reporting',
            'name' => "Get sales insights from <strong>detailed reports</strong>",
            'nameClass' => 'f-n f-56',
            'classImageRatio' => 'rt-3-4',
            'classExtend' => 'mr-t-250 mr-t-200-s4',
            'classImageContainer' => 'b-sd-n pa-0',
            'divider' => 1,
            'img-src' => get_template_directory_uri(). '/images/product/sales/lead-distribution-report-2.png',
            'desc' => "<p>With real-time reporting, you can see your sales team's productivity, KPI achievement, revenue performance,  and track every deal and its process. 
              From that, you can improve your distribution process and optimize team performance for a faster and smarter sales process efficiency.</p>",
          )); ?>
  
  <?php
    get_template_part('template-parts/customer-stories', null,
      array(
        'no-title' => false,
        'classExtend' => 'mr-t-250 mr-t-200-s4'
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
      'title' => 'Curious about Lead Distribution? There’re lots more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>