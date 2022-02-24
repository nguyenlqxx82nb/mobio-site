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
                            'desc' => 'Save up to 75% on development time — without additional headcount. Build more effective emails, faster to scale efforts and drive better results.'
                          )); ?>

  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-150',
                          'title-sm' => 'Mobio sales management',
                          'title' => 'Matching Lead To The Right Rep Seal The Deal'
                        )); ?>

  <?php get_template_part('template-parts/feature-image',null,
                        array(  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
                        array( 
                          'classExtend' => 'mr-t-200',
                          'title-sm' => 'what can you do with it?',
                          'title' => 'Capture All Leads And Deliver <span style="color: #4BBFEB; text-decoration: underline;">Automatically</span>',
                        )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'title' => 'Round Robin',
                          'name' => 'Round robin distribution based on <strong>agent shifts</strong>',
                          'nameClass' => 'f-n f-56',
                          'classExtend' => 'mr-t-250',
                          'classImageRatio' => 'rt-3-4',
                          'classImageContainer' => 'b-sd-n pa-0',
                          'divider' => 1,
                          'desc' => '<p>Distribute leads in a round-robin fashion if the lead quality is constant. Round-robin lead distribution can be combined with all your other more complex lead routing rules, like lead and agent-quality based distribution. You can also limit lead distribution to agents on their off-days, or after their shift hours.
                          </p>',
                        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'imageLeft' => 1,
                        'title' => 'geography',
                        'name' => 'Use capping logic to <strong>limit leads assigned</strong> to sales reps',
                        'nameClass' => 'f-n f-56',
                        'classExtend' => 'mr-t-250',
                        'classImageRatio' => 'rt-3-4',
                        'classImageContainer' => 'b-sd-n pa-0',
                        'divider' => 1,
                        'desc' => '<p>While it is important to maximize on follow-ups, never let it overshadow the quality of sales follow-ups. Set capping logic to ensure that your agents aren’t assigned more leads than they can handle without compromising on call quality. For example – if your agents can handle 10 prospects daily, refrain from assigning leads beyond that number.
                        </p>',
                      )); ?>

  <?php get_template_part('template-parts/row-content-two',null,
          array( 
            'title' => 'limit leads assigned',
            'name' => "Use capping logic to <strong>limit leads assigned</strong> to sales reps",
            'nameClass' => 'f-n f-56',
            'classImageRatio' => 'rt-3-4',
            'classExtend' => 'mr-t-250',
            'classImageContainer' => 'b-sd-n pa-0',
            'divider' => 1,
            'desc' => '<p>While it is important to maximize on follow-ups, never let it overshadow the quality of sales follow-ups. Set capping logic to ensure that your agents aren’t assigned more leads than they can handle without compromising on call quality. For example – if your agents can handle 10 prospects daily, refrain from assigning leads beyond that number.</p>',
          )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                        array( 
                          'imageLeft' => 1,
                          'title' => 'Refrain churned leads',
                          'name' => "Auto-distribute a churned agent's leads to <strong>reduce loss of revenue</strong>",
                          'nameClass' => 'f-n f-56',
                          'classImageRatio' => 'rt-3-4',
                          'classExtend' => 'mr-t-250',
                          'classImageContainer' => 'b-sd-n pa-0',
                          'divider' => 1,
                          'desc' => '<p>It’s very common for a sales agent, especially a field agent to churn. In such cases, hundreds, or thousands of leads under her would become orphan leads, leading to a break in communication thread and a subsequent loss in the opportunity. Mobio helps you avoid this by allowing automated or bulk distribution of such leads to other agents based on different criteria. In case, the sales rep is on leave, you can even route calls to the available team member.
                          </p>',
                        )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
                      array( 
                        'title' => 'Manual distribution',
                        'name' => 'Managers can distribute leads based on their wishes',
                        'nameClass' => 'f-n f-56',
                        'classExtend' => 'mr-t-250',
                        'classImageRatio' => 'rt-3-4',
                        'classImageContainer' => 'b-sd-n pa-0',
                        'divider' => 1,
                        'desc' => '<p>Automation sounds amazing, but machine sometimes doesn’t get us that well. That’s why Mobio Sales Management allow manager to distribute leads based on their requirements. Agents or members also can take the leads themselves for convenience. </p>',
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
      'title' => 'Curious about Lead Distribution? There’re a lot more to explore!'
    )
  ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>