
<div class="<?php echo $args['classExtend'] ?> mr-t-80-s0">
  <div class="auto-container">
    <div class="pa-l-20-s0 pa-r-20-s0">
      <div class="auto <?php echo $args['classContainer'] ? $args['classContainer'] : 'b-sd b-4-b b-r-10' ?> pa-l-30 pa-r-30">
        <div class="mr-auto avatar-container mr-t-40 mr-t-40-s0">
          <img src="<?php echo $args['avatar'] ? $args['avatar'] : get_template_directory_uri() . '/images/product/marketing/avatar.png' ?>" />
        </div>
        <div class="mr-t-30 mr-t-20-s0 f-b f-25 f-25-s0 text-center <?php echo $args['color'] ? $args['color'] : 'c-fff ' ?> "><p><?php echo $args['desc'] ?></p></div>
        <div class="mr-t-15 f-n f-16 f-14-s0 mr-b-40-s0 mr-b-40 text-center <?php echo $args['color'] ? $args['color'] : 'c-fff ' ?>"><p><?php echo $args['name'] ?></p></div>
      </div>
    </div>
  </div>
</div>