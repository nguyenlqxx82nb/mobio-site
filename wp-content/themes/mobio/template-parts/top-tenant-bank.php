<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by most innovaton banks in vietnam',
      'items' => array(
        array(get_template_directory_uri(). '/images/top-tenant/bank-bidv.png', 
              get_template_directory_uri(). '/images/top-tenant/bank-hd.png',
              //get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              //get_template_directory_uri(). '/images/top-tenant/flc.png'
              ) ,

        array(
              get_template_directory_uri(). '/images/top-tenant/bank-msb.png',
              get_template_directory_uri(). '/images/top-tenant/bank-pvcom.png', 
              //get_template_directory_uri(). '/images/top-tenant/vib.png',
              //get_template_directory_uri(). '/images/top-tenant/galle.png'
            ) ,

        array(get_template_directory_uri(). '/images/top-tenant/bank-vib.png', 
              get_template_directory_uri(). '/images/top-tenant/bank-vietcom.png',
              //get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              //get_template_directory_uri(). '/images/top-tenant/hdbank.png'
              ) ,

        
              
        
      )
    ));
?>