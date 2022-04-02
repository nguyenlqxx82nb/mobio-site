
<body class="">
<!-- mobile header -->
<div class="d-n d-block-s2">
  <?php get_template_part(
    'template-parts/menu-mobile',
    null,
    array( 
      'fixed' => '1'
    )
  ); ?>
</div>

<?php get_template_part(
  'template-parts/menu-top',
  null,
  array( 
    'classExtend' => ''
  )
); ?>

<div class="header header-product">
  <div class="header-bg header-bg-products"></div>  
  <div class="auto-container">
    <div class="mr-t-150 mr-t-120-s3 mr-t-70-s0 f-b f-16 f-14-s0 c-fff opa-5 mr-auto text-center upper-case"><p><?php echo $args['title-sub'] ?></p></div>
		<div class="mr-t-15 f-b f-36 f-32-s0 c-fff w-350-s0 mr-auto text-center w-650"><p><?php echo $args['title'] ?></p></div>
    
    <?php if ($args['desc']) { ?>
      <div class="mr-t-35 mr-t-30 mr-t-20-s0 f-n f-16 f-14-s0 opa-9 c-fff w-850 w-340-s0 mr-auto text-center"><p><?php echo $args['desc'] ?></p></div>
    <?php } ?>
    
    <?php if ($args['contact']) { ?>
      <div class="email-submit">
        <div class="d-flex align-items-center justify-content-center mr-t-30 mr-t-30-s0 d-block-s2">
          <div class="input-wrap  w-450 w-350-s1 mr-auto-s2">
            <input placeholder="Enter your email address" />
          </div>
          <div class="mr-auto-s2 text-center"><button class="btn-subscript btn-small upper-case mr-l-12 mr-l-0-s2 pa-t-12 pa-b-12 w-450-s2 w-350-s1 mr-t-10-s2">subscribe</button></div>
        </div>
      </div>
      
    <?php } ?>

    <div class="mr-t-30 mr-l-30 mr-r-30 mr-t-30-s0 mr-l-20-s3 mr-r-20-s3 ">
      <img class="h-100 w-100" src="<?php echo $args['header-img'] ?>" />
    </div>
    
  </div>
</div>