<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by top enterprises in vietnam',
      'items' => array(
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/budwiser.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/galle.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vnshop.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/guadian.png'),
      )
    ));
?>