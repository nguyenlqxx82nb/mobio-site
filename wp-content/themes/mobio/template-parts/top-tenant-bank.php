<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by most innovaton banks in vietnam',
      'items' => array(
        array(get_template_directory_uri(). '/images/top-tenant/vib.png', 
              get_template_directory_uri(). '/images/top-tenant/samsung.png',
              get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              get_template_directory_uri(). '/images/top-tenant/flc.png') ,

        array(
              get_template_directory_uri(). '/images/top-tenant/vnshop.png',
              // get_template_directory_uri(). '/images/top-tenant/vnlife.png', 
              // get_template_directory_uri(). '/images/top-tenant/vib.png',
              // get_template_directory_uri(). '/images/top-tenant/galle.png'
            ) ,

        array(get_template_directory_uri(). '/images/top-tenant/bidv.png', 
              get_template_directory_uri(). '/images/top-tenant/flc.png',
              get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              get_template_directory_uri(). '/images/top-tenant/hdbank.png') ,

        array(get_template_directory_uri(). '/images/top-tenant/vietcombank.png', 
              // get_template_directory_uri(). '/images/top-tenant/vpbank.png',
              // get_template_directory_uri(). '/images/top-tenant/budwiser.png',
              // get_template_directory_uri(). '/images/top-tenant/guadian.png'
            ) ,
              
        array(get_template_directory_uri(). '/images/top-tenant/bidv.png', 
              get_template_directory_uri(). '/images/top-tenant/flc.png',
              get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              get_template_directory_uri(). '/images/top-tenant/hdbank.png') ,

      )
    ));
?>