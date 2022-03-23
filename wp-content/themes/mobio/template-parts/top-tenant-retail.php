<?php 
  get_template_part('template-parts/top-tenant', null,
    array(
      'classExtend' => $args['classExtend'],
      'title' => $args['title'] ?  $args['title'] : 'trusted by top enterprises in vietnam',
      'items' => array(
        array(get_template_directory_uri(). '/images/top-tenant/retail-guardian.png', 
              get_template_directory_uri(). '/images/top-tenant/ent-flc.png',
              //get_template_directory_uri(). '/images/top-tenant/bank-pvcom.png',
              //get_template_directory_uri(). '/images/top-tenant/fsi-vnpayqr.png'
              ) ,

        array(
              get_template_directory_uri(). '/images/top-tenant/retail-galle.png',
              get_template_directory_uri(). '/images/top-tenant/ent-sungroup.png', 
              //get_template_directory_uri(). '/images/top-tenant/bank-msb.png',
              //get_template_directory_uri(). '/images/top-tenant/retail-galle.png'
              ) ,

        array(get_template_directory_uri(). '/images/top-tenant/retail-phongvu.png', 
              get_template_directory_uri(). '/images/top-tenant/ent-vnlife.png',
              //get_template_directory_uri(). '/images/top-tenant/vnlife.png',
              //get_template_directory_uri(). '/images/top-tenant/retail-guardian.png'
              ) ,

        array(get_template_directory_uri(). '/images/top-tenant/retail-budweiser.png', 
              get_template_directory_uri(). '/images/top-tenant/retail-sapporo.png',
              //get_template_directory_uri(). '/images/top-tenant/budwiser.png',
              //get_template_directory_uri(). '/images/top-tenant/retail-phongvu.png'
              )

      )
    ));
?>