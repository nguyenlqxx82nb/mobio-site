
<?php 
  if (!$args["not-title"]) {
?>
<?php 
  get_template_part('template-parts/section-title',null,
    array(
      'classExtend' =>  $args["classExtend"] ? $args["classExtend"] : 'mr-t-250',
      'title-sm' => 'why Mobio?',
      'title' => 'Why Enterprises Choose Mobio?',
    ));
  ?>
<?php } ?>

<?php get_template_part('template-parts/content-three',null,
  array( 
    'title-class'=> 'f-b f-36',
    'classExtend' => 'mr-t-50',
    'icon-class' => 'icon-top-l',
    'items' => array(
      array(
        'icon-src' => get_template_directory_uri(). '/images/icon-digital.png',
        'name' => 'All-in-one Platform',
        'desc' => 'We involve every operation tools for your business and a CDP at core to store and manage data efficently. Intergrate all data sources and activation tools at ease. '
      ),
      array(
        'icon-src' =>get_template_directory_uri(). '/images/icon-loyalty.png',
        'name' => 'Customization',
        'desc' => 'We offer personal consulting to get your business issues and develop features based on your desires. We have a fulfill process that easy to follow and support team to guide you step-by-step. '
      ),
      array(
        'icon-src' =>get_template_directory_uri(). '/images/icon-personal.png',
        'name' => 'Flexibility',
        'desc' => 'We offer flexible deployment plan, ensure every company data security policy. You can store your data on Mobio Cloud or On-premises of your own Data Center.'
      ),
    )
  )); ?>