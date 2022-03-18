<body class="">
<!-- header fixed -->
<?php get_template_part(
    'template-parts/menu-top',null,
    array(
      'classExtend' => ''
    )
  ); ?>
<!-- mobile header -->
<div class="d-n d-block-s1">
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
    <div class="f-b f-18 f-16-s4 f-14-s1 c-fff opa-5 upper-case mr-t-175 mr-t-90-s1 text-center c-fff"><p>our partners</p></div>
    <div class="f-b f-75 f-56-s4 f-40-s1 text-center mr-t-30 mr-t-20-s1 c-fff"><p>Mobio Partners</p></div>
		<div class="w-900 mr-auto f-n f-18 f-16-s4 f-14-s1 w-300-s1 mr-t-20-s1 c-fff mr-t-35 text-center"><p>Our partners have worked with us to deliver ever more innovative, effective and successful projects.<br>Their support gave us wings to reach our Mission and Vision.  </p></div>
  </div>
</div>