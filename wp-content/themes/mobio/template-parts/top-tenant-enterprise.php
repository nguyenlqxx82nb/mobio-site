<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by top enterprises in vietnam',
      'items' => array(
          array(get_template_directory_uri(). '/images/top-tenant/vib.png', 
                get_template_directory_uri(). '/images/top-tenant/samsung.png',
                get_template_directory_uri(). '/images/top-tenant/vnlife.png',
                get_template_directory_uri(). '/images/top-tenant/flc.png') ,

          array(get_template_directory_uri(). '/images/top-tenant/vib.png', 
                get_template_directory_uri(). '/images/top-tenant/samsung.png',
                get_template_directory_uri(). '/images/top-tenant/vnlife.png',
                get_template_directory_uri(). '/images/top-tenant/flc.png') ,

          array(get_template_directory_uri(). '/images/top-tenant/vib.png', 
                get_template_directory_uri(). '/images/top-tenant/samsung.png',
                get_template_directory_uri(). '/images/top-tenant/vnlife.png',
                get_template_directory_uri(). '/images/top-tenant/flc.png') ,

          array(get_template_directory_uri(). '/images/top-tenant/vib.png', 
                get_template_directory_uri(). '/images/top-tenant/samsung.png',
                get_template_directory_uri(). '/images/top-tenant/vnlife.png',
                get_template_directory_uri(). '/images/top-tenant/flc.png') ,
        )
    ));
?>