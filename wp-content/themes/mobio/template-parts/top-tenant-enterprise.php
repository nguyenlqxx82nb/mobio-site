<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by top enterprises in vietnam',
      'items' => array(
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vib.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/samsung.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vnlife.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/flc.png'),
      )
    ));
?>