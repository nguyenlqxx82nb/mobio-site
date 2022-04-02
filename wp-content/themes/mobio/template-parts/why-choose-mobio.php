
<?php 
  if (!$args["not-title"]) {
?>
<?php 
  get_template_part('template-parts/section-title',null,
    array(
      'classExtend' =>  $args["classExtend"] ? $args["classExtend"] : 'mr-t-150',
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
        'icon-src' => get_template_directory_uri(). '/images/why-us-all-in-one.svg',
        'name' => 'All-in-one Platform',
        'desc' => 'We involve every operation tool for your business and a CDP at the core to store and manage data efficiently. Integrate all data sources and activation tools at ease.'
      ),
      array(
        'icon-src' =>get_template_directory_uri(). '/images/why-us-customize.svg',
        'name' => 'Customization',
        'desc' => 'We offer personal consulting to get your business issues and develop features based on your desires. We have a complete process that is easy to follow and implement.'
      ),
      array(
        'icon-src' =>get_template_directory_uri(). '/images/why-us-flex.svg',
        'name' => 'Flexibility',
        'desc' => 'We offer a flexible deployment plan to ensure every company’s data security policy. You can store your data on Mobio Cloud or On-premises of your own Data Center.'
      ),
    )
  )); ?>