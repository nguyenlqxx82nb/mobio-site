<body class="">
<!-- header fixed -->
<?php get_template_part(
    'template-parts/menu-top',null,
    array(
      'classExtend' => ''
    )
  ); ?>
<!-- mobile header -->
<div class="d-n d-block-s0">
  <?php get_template_part(
    'template-parts/menu-mobile',
    null,
    array( 
      'fixed' => '1'
    )
  ); ?>
</div>

<div class="header header-partners">
  <div class="header-bg header-bg-header-partners"></div>  
  <div class="auto-container">
    <div class="f-b f-16 f-14-s0 c-fff opa-5 upper-case mr-t-175 mr-t-90-s0 text-center c-fff"><p>our partners</p></div>
    <div class="f-b f-40 f-40-s0 text-center mr-t-30 mr-t-20-s0 c-fff"><p>Mobio Partners</p></div>
		<div class="w-900 mr-auto f-n f-16 f-14-s0 w-300-s0 mr-t-20-s0 c-fff mr-t-35 text-center"><p>Our partners have worked with us to deliver ever more innovative, effective and successful projects.<br>Their support gave us wings to reach our Mission and Vision.  </p></div>
  </div>
</div>