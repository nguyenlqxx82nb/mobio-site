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
                            'name' => 'Meet Customer Response',
                            'desc' => 'Add messaging to your website, mobile apps, and social channels so customers can reach you instantly. Your team won’t miss a single thing when all interactions are place in one. '
                          )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-100',
    'title-sm' => 'customer response',
    'title' => 'Deliver Rich Conversational Experiences',
    'desc' => 'Customers expect great service across all channels. Messaging makes it easy to stay in touch with personalized and engaging interactions. With Mobio, get messaging right out of the box or fully customize it to meet your needs.',
    'desc-w' => 'w-1100'
  )); ?>

<?php get_template_part('template-parts/feature-image',null,
  array( 
    'classExtend' => '',
  )); ?>

<?php get_template_part('template-parts/section-title',null,
  array( 
    'classExtend' => 'mr-t-250',
    'title-sm' => 'what we offer?',
    'title' => '<p>Complete Messaging Solution To Meet Your Customers’ Need</p>',
  )); ?>


<?php get_template_part('template-parts/content-three',null,
  array( 
    'classExtend' => 'mr-t-50',
    'title-class' => 'c-4-b f-20',
    'items' => array(
      array(
        'name' => 'Conveniece',
        'desc' => 'Have a continuous conversation across channels, so customers never have to repeat themselves.'
      ),
      array(
        'name' => 'Immediate',
        'desc' => 'Realtime conversation so your teams can reply to customers in a second, increase your services and customer experience. '
      ),
      array(
        'name' => 'Personalization',
        'desc' => 'Use customer data to create rich, interactive conversations that are tailored to their needs.'
      ),
    )
  )); ?>
  
  
  <?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-200',
        'title-sm' => 'how it helps',
        'title' => '<p>Messaging Solution And Omnichannel CX</p>',
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'title' => 'social channels and website',
      'name' => 'Stay connected on <strong>any channel</strong>',
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-100',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-20 b-sd b-r-10',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>Add messaging and live chat to your website or mobile app, and leverage customer presence on social channels like Facebook or Zalo to deliver instant support without repetition. Provide live chat support for your customers, or continue the conversation when it’s convenient for them.</p>',
      'next' => 'learn how to manage omnichannel strategy >>',
      'next-url' => '#'
    )); ?>
  
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'imageLeft' => 1,
          'title' => 'staff workspace',
          'name' => 'All interactions in <strong>one place</strong>',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-20 b-sd b-r-10',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>Customers conversations and inforamtion live in a centralized workspace so services team can get all the context they need to support customers. They can switch between many channels and add notes, tickets, tags or create deals as needed.</p>',
          'next' => 'learn how to manage your workspace >>',
          'next-url' => '#'
        )); ?>
    
  <?php get_template_part('template-parts/row-content-two',null,
        array( 
          'title' => 'quick response library',
          'name' => 'Make messaging <strong>your own</strong>',
          'nameClass' => 'f-n f-56',
          'classExtend' => 'mr-t-250',
          'classImageRatio' => 'rt-3-4',
          'classImageContainer' => 'pa-20 b-sd b-r-10',
          'classImage' => 'b-r-10',
          'divider' => 1,
          'desc' => '<p>You can create quick <strong>answer library</strong> for basic customer questions and requirements so customers don’t have to wait everytime they text. Divide your auto-response into groups and apply based on preset conditions or time frame. Thus, you can lessen your workload and focus on only critical customer issues or closing deals.  </p>',
          'next' => 'see how quick response can boost your cx >>',
          'next-url' => '#'
        )); ?>

  

  <?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
      'title' => 'web live chat',
      'name' => "Real time response to <strong>empower CX</strong>",
      'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-250',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-20 b-sd b-r-10',
      'classImage' => 'b-r-10',
      'divider' => 1,
      'desc' => '<p>Design your chat frame on multiple websites based on your business style. Reply to your customers instantly online. Plus, you can manage customer information fulltilment form and automatically collect and store data in your CDP. </p>',
      'next' => 'compare live chat and chatbot >>',
      'next-url' => '#'
    )); ?>

<?php get_template_part('template-parts/section-title',null,
      array( 
        'classExtend' => 'mr-t-300',
        'title-sm' => 'auto work assignment',
        'title' => 'Smart rules to <strong>boost your response time</strong>',
        'title-class' => 'f-n f-56'
      )); ?>

<?php get_template_part('template-parts/row-content-two',null,
    array( 
      'imageLeft' => 1,
     // 'title' => 'survey management',
      // 'name' => "Collect customers reviews to <strong>upgrade your service</strong>",
      // 'nameClass' => 'f-n f-56',
      'classExtend' => 'mr-t-50',
      'classImageRatio' => 'rt-3-4',
      'classImageContainer' => 'pa-20 b-sd b-r-10',
      'classImage' => 'b-r-10',
      // 'divider' => 1,
      'desc' => '<p>Rule-based assignment system helps your team respond to customers faster and more efficient. This is our top performer feature voted by our customers since it helps each team increase response time to 300% and optimize productivity of all staff.  </p>',
      'next-button' => 'see how it works',
      'next-url' => '#'
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
      array (
        'title' => 'Curious about Customer Response? There’re a lot more to explore!'
      )
    ); ?>


<?php get_template_part(
    'template-parts/footer',
    null,
    array( 
      'home' => '0'
    )
  ); ?>