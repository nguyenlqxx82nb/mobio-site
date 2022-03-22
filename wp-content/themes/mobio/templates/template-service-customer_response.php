<?php
/**
 * Template Name: Service Customer Response Template
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
        'name' => 'Meet Social & Chat',
        'desc' => 'Add messaging to your website, mobile apps, and social channels so customers can reach you instantly. 
          Your team won’t miss a single thing when all interactions are place in one. ',
        'img-src' => get_template_directory_uri(). '/images/product/service/social-header.png'
      )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-150 mr-t-300-s2',
    'title-sm' => 'social & chat',
    'title' => 'Deliver Rich Conversational Experiences',
    'desc' => 'Customers expect great service across all channels. Messaging makes it easy to stay in touch with personalized and engaging interactions. With Mobio, get messaging right out of the box or fully customize it to meet your needs.',
    'desc-w' => 'w-1100 w-900'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
    'img-src' => get_template_directory_uri(). '/images/product/service/overview-chat.png'
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-250 mr-t-150-s4',
    'title-sm' => 'what we offer?',
    'title' => '<p>Complete messaging solution to meet your customers’ need</p>',
  )); ?>


<?php get_template_part('template-parts/content-three',null,
  array( 
    'classExtend' => 'mr-t-30',
    'title-class' => 'c-4-b f-20',
    'items' => array(
      array(
        'name' => '<strong>Conveniece</strong>',
        'desc' => 'Have a continuous conversation across channels, so customers never have to repeat themselves.'
      ),
      array(
        'name' => '<strong>Immediate</strong>',
        'desc' => 'Realtime conversation so your teams can reply to customers in a second, increase your services and customer experience. '
      ),
      array(
        'name' => '<strong>Personalization</strong>',
        'desc' => 'Use customer data to create rich, interactive conversations that are tailored to their needs.'
      ),
    )
  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title-sm' => 'how it helps',
        'title' => '<p>Messaging Solution and Omnichannel CX</p>',
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'social channels and website',
      'name' => 'Stay connected  on <br> <strong>any channel</strong>',
      'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => '',
      'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/social-omni.png',
      'desc' => '<p>Add messaging and live chat to your website or mobile app, and leverage customer presence on social channels like Facebook or Zalo to deliver instant support without repetition. Provide live chat support for your customers, or continue the conversation when it’s convenient for them.</p>',
      //'next' => 'learn how to manage omnichannel strategy >>',
      //'next-url' => '#'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'staff workspace',
          'name' => 'All interactions in <br> <strong>one place</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-3-4',
          'classColContent' => 'mo-col-5',
          'classColImage' => 'mo-col-7',
          'classImage' => 'b-r-10',
          'classContent' => 'pa-l-80 pa-r-20', 
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/service/overview-chat.png',
          'desc' => '<p>Customers conversations and inforamtion live in a centralized workspace so services team can get all the context they need to support customers. 
            They can switch between many channels and add notes, tickets, tags or create deals as needed.</p>',
          //'next' => 'learn how to manage your workspace >>',
          //'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'quick response library',
          'name' => 'Make messaging <br><strong>your own</strong>',
          'nameClass' => 'f-n f-40',
          'classExtend' => 'mr-t-150',
          'classImageRatio' => 'rt-1-1',
          'classImageContainer' => '',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'img-src' => get_template_directory_uri(). '/images/product/service/social-response.png',
          'desc' => '<p>You can create quick <strong>answer library</strong> for basic customer questions and requirements so 
            customers don’t have to wait everytime they text. Divide your auto-response into groups and apply based on preset conditions or time frame. 
            Thus, you can lessen your workload and focus on only critical customer issues or closing deals.  </p>',
          //'next' => 'see how quick response can boost your cx >>',
          //'next-url' => '#'
        )); ?>

  

<?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-150',
        'title-sm' => 'auto work assignment',
        'title' => 'Smart rules to <strong>boost your response time</strong>',
        'title-class' => 'f-n f-40'
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
     // 'title' => 'survey management',
      // 'name' => "Collect customers feedbacks to <strong>upgrade your service</strong>",
      // 'nameClass' => 'f-n f-40',
      'classExtend' => 'mr-t-50',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => '',
      'classImage' => 'b-r-10',
      // 'divider' => 1,
      'img-src' => get_template_directory_uri(). '/images/product/service/social-smart-rules.png',
      'desc' => '<p>Rule-based assignment system helps your team respond to customers faster and more efficient. This is our top performer feature voted by our customers since it helps each team increase response time to 300% and optimize productivity of all staff.  </p>',
      //'next-button' => 'see how it works',
      //'next-url' => '#'
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
      array (
        'title' => 'Curious about Customer Response? There’re lots more to explore!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>