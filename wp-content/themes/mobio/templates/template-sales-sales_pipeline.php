<?php
/**
 * Template Name: Sales Pipeline Template
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
                            'name' => 'Meet Sales Pipeline',
                            'desc' => 'Automate repetitive work so you can spend more time on closing deals and optimize your time with customers.'
                          )); ?>


  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'Sales pipeline',
                          'title' => 'Manage Your Own Sales Process'
                        )); ?>

  <?php get_template_part('template-parts/feature-image',null,
                        array(  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-200',
                          'title-sm' => 'sales pipeline feature',
                          'title' => 'Everything you need to sale faster and smarter',
                          'desc' => 'Mobio Sales Pipeline focuses on what matters most: <br> growing relationships and closing deals - anytime, anywhere'
                        )); ?>

<?php get_template_part('template-parts/content-three',null,
      array( 
        'classExtend' => 'mr-t-50',
        'items' => array(
          array(
            'name' => 'Contact Management',
            'desc' => 'Deliver tailored sales experiences with in-depth contact and account management.'
          ),
          array(
            'name' => 'Opportunity Management',
            'desc' => 'Track salels opportunities and move forward faster with a rich customer activity timeline.'
          ),
          array(
            'name' => 'Sales Forecasting',
            'desc' => 'Know exactly where your revenue growth stands and drive more impact with data-driven insights.'
          ),
          array(
            'name' => 'Process Automation',
            'desc' => 'Steamline and automate daily sales tasks like activity tracking, email alerts and workflows.'
          ),
          array(
            'name' => 'Mobile Sales Management',
            'desc' => 'Sell on the go through a single app that lets you access, manage, and update the CDP data.',
            'highlight' => 1
          ),
          array(
            'name' => 'KPI Management',
            'desc' => 'Power predictable revenue by measuring pipiline accuracy in real time and optimizing the complete revenue lifecycle.'
          )
        )
      )); ?>
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-300',
        'title-sm' => 'how it helps',
        'title' => 'Sales Toolkit That Focus On <span class="c-4-b t-d-u">What Matters Most</span>',
      )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'visual view',
      'name' => 'See your pipeline <strong>in different views</strong>',
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-250',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-0',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>View our sales pipeline template in a List or Timeline View. Use custom fields to include estimated opportunity value, lead status, and more. Then, filter every view by opportunity size, priority type, account owner, and beyond.</p>',
    )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
      array( 
        'imageLeft' => 1,
        'title' => 'Sales process',
        'name' => 'Manage your own <strong>sales process</strong> efficently',
        'nameClass' => 'f-n f-56',
        'classExtend' => 'mr-t-250',
        'classImageRatio' => 'rt-3-4',
        'classImageContainer' => 'pa-0',
        'classImage' => 'b-r-10',
        'divider' => 1,
        'desc' => '<p>Sales pipelines show you how many deals sales reps are expected to close in a given week, month or year and how close a rep is to reaching their sales quota. In that way, sales leader or manager can adjust the sales plan or push sales team to achieve sales target on time. </p>',
      )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
      array( 
        'title' => 'revenue forecast',
        'name' => "<strong>Forecast revenue targets</strong> and growth sustainability",
        'nameClass' => 'f-n f-56',
        'classExtend' => 'mr-t-250',
        'classImageRatio' => 'rt-3-4',
        'classImageContainer' => 'pa-0',
        'classImage' => 'b-r-10',
        'divider' => 1,
        'desc' => '<p>The sales pipeline allows sales reps and managers to forecast revenue by looking at what stage of the sales process prospects are in and predicting how many of them will close as deals during a given timeframe.</p>',
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
      'title' => 'Curious about Sales Pipeline? There’re a lot more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>