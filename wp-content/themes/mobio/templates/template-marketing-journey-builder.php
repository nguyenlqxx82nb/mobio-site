<?php
/**
 * Template Name: Marketing Journey Builder Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

get_header();
?> 

<?php get_template_part('template-parts/header-page',null,
  array( 
    'title' => 'Mobio marketing management',
    'name' => 'Meet Journey Builder',
    'desc' => 'Your marketing companion to optimize customer experience and increase interaction, engagement, and retention rate.',
    'name-class' => 'w-750 f-b f-60 mr-t-25',
  ));
?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-120',
      'title-sm' => 'visual interface',
      'title' => 'Drag-and-drop Tool to build your own Customer Journey', 
      'desc' => 'Drag-and-drop, one-to-one interface to help you create a personalized journey for your customer. 
          Connect every interaction across website, mobile, email, social media channel, and advertising — along with Sales and Service — into a seamless customer experience.
           Workflow management is our strongest point. ',
      'desc-w' => 'w-1000'
    )
  );
?>

<?php 
  get_template_part('template-parts/feature-image', null, 
    array(
      'img-src' => get_template_directory_uri(). '/images/product/marketing/journey-builder-visual-interface.png'
    )
  )
?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => 1,
    'classExtend' => 'mr-t-100',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'prebuild templates',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Prebuild Journeys that show <strong>Conversion</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-0 pa-r-80',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-pre_built_journey.png',
    'desc' => "<p>Our Prebuild Journeys designed by experienced marketers will give you inspiration and a head start 
          on marketing automation with fully customizable workflows to guide your customers toward a conversion.</p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>


<?php get_template_part('template-parts/row-content-two',null,
  array(
    // 'imageLeft' => 1,
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'personalization',
    // 'title-class' => 'f-18 c-1-b',
    'name' => 'Make everything <strong>personal and intimidiate</strong>',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-100 pa-r-0',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-personalization.png',
    'desc' => "<p>Personalize and fully automate an experience that adapts to
        customer interactions and increases purchase opportunities.</p>",
    'desc-w' => 'w-450'
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php get_template_part('template-parts/row-content-two',null,
  array(
    'imageLeft' => 1,
    'classExtend' => 'mr-t-150',
    // 'icon' => get_template_directory_uri(). '/images/item-icon.png',
    'title' => 'Master campaign',
    // 'title-class' => 'f-18 c-1-b',
    'name' => '<strong>Holistic reports</strong> from every campaigns',
    'classColContent' => 'mo-col-5',
    'classColImage' => 'mo-col-7',
    'nameClass' => 'f-n f-56',
    // 'classImage' => 'b-r-10',
    'classImageContainer' => 'pa-0',
    'classImageRatio' => 'rt-3-4',
    'classContent' => 'pa-l-0 pa-r-80',
    'divider' => 1,
    'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-marketing_reports.png',
    'desc' => "<p>Reports show not only indicators from the marketing campaign but the customer touchpoint as a whole. With our general to detail reports, 
      marketers will have a clear picture of the overall market trend and business marketing plan.</p>",
    // 'next-button' => 'Learn More',
    // 'next-url' => '#'
  )); ?>

<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-150',
      'title-sm' => 'building  blocks',
      'title' => '4 Critical Elements In A Customer Journey', 
    )
  );
?>

<?php 
  get_template_part('template-parts/jb-feature-list', null, 
    array(
      'classExtend' => 'mr-t-50',
      'items' => array(
        array(
          'tab-title' => 'Targeting',
          'title' => 'Accurate Audiences',
          'desc' => 'Targeting is the very first step for a successful customer journey. We help you segment your customer list and 
              choose the right audience group for your targets that deliver conversion. You can target audiences whenever they make an interaction.
                <br><br>To avoid sending too many unwanted messages to your customer, you can use our Spam Filter to maintain the number of messages sent daily. ',
          'class-image-wrapper' => 'b-fff',
          'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-targeting.png'
        ),
        array(
          'tab-title' => 'Channels & Messages',
          'title' => 'Omnichannel',
          'desc' => 'Each channel has its own uniqueness and goes with different kinds of messages. 
                You can choose your own way to raise brand awareness since there are so many options to go. 
                Don’t worry if you have no clue to start, we will get you through it. 
                <br><br>Let start and create a seamless customer experience across all your channels! ',
          // 'class-image-wrapper' => 'b-fff',
          'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-channels.png'
        ),
        array(
          'tab-title' => 'Workflow',
          'title' => 'Send It Right',
          'desc' => 'Workflow is a great tool for segmenting the user experience and defining concrete actions that can be implemented in the design. 
                  It shows how customers interact with the messages or the screen and what action to take after that.
                  <br><br>Every workflow has a name and a description of what each of the steps is and what it is accomplishing so that marketers can easily use and get the most from it.',
          // 'class-image-wrapper' => 'b-fff',
          'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-workflow.png'
        ),
        array(
          'tab-title' => 'Activities',
          'title' => 'Know Your Action',
          'desc' => 'These are actions that you can take automatically when building a journey. 
            This allows you to organize and connect all the steps in customer experience, create end-to-end journey and segment or save customer profile for further uses.
            <br><br>Activities is a crucial and powerful tool for marketers to take action after the journey ends and make use of new customer data collected.',
          // 'class-image-wrapper' => 'b-fff',
          'img-src' => get_template_directory_uri(). '/images/product/marketing/jb-workflow.png'
        )
      )
    )
  );
?>


<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-250',
      'title' => 'Why Businesses Love Journey Builder?', 
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
          'name' => 'You own the Journey',
          'desc' => '<strong>Customer journey</strong> is no longer the unpredicted prospect that you have to follow. Now businesses create and decide the way customers interact, what messages they get, and all the steps they take.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-loyalty.png',
          'name' => 'Personalized at Scale',
          'desc' => 'Messages to customers are <strong>customized for each individual</strong>, making them feel that those messages are unique and sent personally, boosting CTR, ROI, and conversion in your marketing campaign.'
        ),
        array(
          'icon-src' => get_template_directory_uri().'/images/icon-personal.png',
          'name' => 'Everything Tracked',
          'desc' => 'Every customer touchpoints and digital footprint across the journey are tracked, collected, and stored in CDP, achieving the goal of every business: a single source of truth.'
        ),
      )
    )
  );
?>
<?php 
  get_template_part('template-parts/section-title', null, 
    array(
      'classExtend' => 'mr-t-10',
      'classMedia' => 'mt-t-30-s1',
      'next-button' => 'Learn more',
      'next-url' => '#' 
    )
  );
?>

<?php 
  get_template_part('template-parts/customer-stories', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php
  get_template_part('template-parts/document-library', null,
    array(
      'classExtend' => 'mr-t-250'
    ));
?>

<?php 
  get_template_part('template-parts/footer-contact', null,
    array(
      'title' => 'Curious about Journey Builder? There’re lots more to explore!'
    ))
?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>