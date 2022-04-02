<div class="<?php echo $args['classExtend'] ? $args['classExtend'] : 'mr-t-50' ?>">
  <div class="auto-container">
    <div class="b-fff mo-row-2 row mr-l-50 mr-r-50 pa-t-50 pa-b-50 b-sd br-15 mr-l-45-s0 mr-r-45-s0 pa-t-0-s0 pa-b-0-s0 mr-t-0-s0">
      <div class="mo-col-6 mo-col pa-r-40 mo-col-12-s2 pa-r-80-s2 pa-r-0-s0"> 
        <div class="d-flex flex-column h-100 justify-content-center mr-l-80 mr-l-0-s0 pa-t-30-s0">
          <p class="f-b f-18 t-c-s0 f-12-s0 upper-case"><?php echo $args['title'] ?></p>
          <p class="f-b f-36  c-1 mr-t-15 t-c-s0 f-30-s0"><?php echo $args['title-sub'] ?></p>
          <div class="f-n f-16 f-14-s0 mr-t-30 mr-t-15-s0 pa-l-30-s0 pa-r-30-s0 "><?php echo $args['desc'] ?></div>
          <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-45 mr-t-30'
            )) ?>
        </div>
      </div>
      <div class="mo-col-6 mo-col pa-l-40 pa-r-40 mo-col-12-s2 pa-l-30-s0 pa-r-30-s0 mr-t-20-s0"> 
        <div class="d-flex flex-column h-100 justify-content-center rt-3-4 w-100 position-relative"> 
          <img class="img-full object-fit-contain" src="<?php echo $args['img-src'] ?>" />
        </div>
        
        <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-20',
              'isMobile' => 1
            )) ?>
      </div>
    </div>
  </div>
  
</div>