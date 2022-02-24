<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by most innovaton banks in vietnam',
      'items' => array(
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vib.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/bidv.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vietcombank.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/hdbank.png'),
        array('img-src' => get_template_directory_uri(). '/images/top-tenant/vpbank.png'),
      )
    ));
?>