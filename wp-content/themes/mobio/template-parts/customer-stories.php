<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => $args['classExtend'],
      'title-sm' => 'customer use cases',
      'title' => 'Get Inspired By Our Customers’ Success Stories',
    )); ?>
  
<?php get_template_part('template-parts/row-content-three',null,
    array( 
      'classExtend' => 'mr-t-50',
      'title-class' => 'f-30',
      'content' => array(
        array(
          'title' => 'Guardian',
          'desc' => 'Increase the voucher redeem rate to 26%, compare to 8% before',
          'img-src' => get_template_directory_uri(). '/images/industry/guardian.png',
          'next' => 'Read this case >>',
          'next-url' => '#'
        ),
        array(
          'title' => 'Phong Vu Electronics',
          'desc' => 'Collect and unify 5 millions identify profiles within 3 months',
          'img-src' => get_template_directory_uri(). '/images/industry/phongvu.png',
          'next' => 'Read this case >>',
          'next-url' => '#'
        ),
        array(
          'title' => 'Galle Watch',
          'desc' => "Reduce customer response time to under a minute, 150% faster!",
          'img-src' => get_template_directory_uri(). '/images/industry/galle.png',
          'next' => 'Read this case >>',
          'next-url' => '#'
        )
      )
    )); ?>  