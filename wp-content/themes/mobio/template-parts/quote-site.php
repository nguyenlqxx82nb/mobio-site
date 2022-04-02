
<div class="<?php echo $args['classExtend'] ?> mr-t-80-s0">
  <div class="auto-container pa-20-s0 pa-20-s0">
    <div class="b-sd b-fff b-r-10 pa-40-n pa-t-40-s1 pa-b-40-s1 pa-l-20-s1 pa-r-20-s1 pa-l-0 mo-row row ">
      <div class=" mo-col-4 d-flex align-items-center justify-content-center mo-col-12-s1 ">
        <div class="mr-auto text-center">
          <div class="avatar-container">
            <img src="<?php echo $args['avatar'] ? $args['avatar'] : get_template_directory_uri() . '/images/product/marketing/avatar.png' ?>" />
          </div>
          <div class="f-b f-20 upper-case mr-t-15"><?php echo $args['name'] ?></div>
          <div class="f-n f-18 upper-case mr-t-5"><?php echo $args['subTitle'] ?></div>
        </div>
      </div>
      <div class="mo-col-8  mo-col-12-s1 mr-t-30-s1">
        <div class="f-n f-18 f-16-s2 f-14-s1 ">
          <?php echo $args['desc']  ?>
        </div>
      </div>
    </div>
  </div>
</div>