
<body class="">
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
    <div class="mr-t-65 mr-t-40-s4 mr-t-35-s0 f-b f-18 f-16-s4 f-14-s0 c-fff opa-5 mr-auto text-center upper-case"><p><?php echo $args['title-sub'] ?></p></div>
		<div class="mr-t-15 f-b f-56 f-36-s4 f-32-s0 c-fff w-300-s0 mr-auto text-center <?php echo $args['title-width'] ? $args['title-width'] : 'w-750 w-650-s4' ?>"><p><?php echo $args['title'] ?></p></div>
    
    <?php if ($args['desc']) { ?>
      <div class="mr-t-35 mr-t-30-s4 mr-t-20-s0 f-n f-20 f-16-s4 f-14-s0 opa-8 c-fff w-950 w-800-s4 w-340-s0 mr-auto text-center"><p><?php echo $args['desc'] ?></p></div>
    <?php } ?>
    
    <?php if ($args['contact']) { ?>
      <div class="email-submit d-flex align-items-center justify-content-center mr-t-30 mr-t-30-s0">
        <div class="input-wrap  w-450 w-340-s4">
          <input placeholder="Enter your email address" />
        </div>
        <button class="btn-submit btn-small upper-case mr-l-12 pa-t-12-s4 pa-b-12-s4"> Contact us </button>
      </div>
      
    <?php } ?>

    <div class="mr-t-35 mr-t-30-s4 mr-l-60 mr-r-60 mr-t-30-s0 mr-l-20-s0 mr-r-20-s0 ">
      <img class="h-100 w-100" src="<?php echo $args['header-img'] ?>" />
    </div>
    
  </div>
</div>