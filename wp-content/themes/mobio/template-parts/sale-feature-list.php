<div class="tab-wrapper <?php echo $args['classExtend']; ?>  mr-t-30-s0">
  <div class="auto-container">
    <div class="b-sd b-fff auto mr-b-40 pa-l-100 pa-r-100 b-r-10 tab-feature mr-l-20-s0 mr-r-20-s0 pa-l-15-s0 pa-r-15-s0 mr-t-0-s0">
      <div class="scroll-tab f-b f-22 f-18-s4 c-2 f-16-s0 mr-t-45 mr-b-45 justify-content-between mr-t-25-s0 mr-b-25-s0">
        <?php 
          for ($i = 0; $i < count($args['items']); $i++) {
        ?>
          <div class="scroll-tab-item ">
            <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['title'] ?></p>
          </div>
        <?php } ?>
        <div class="divider-selected"></div>
      </div>
      <div class="mr-b-80 auto mr-t-40 mr-t-0-s0 mr-b-20-s0">
        <div class="position-relative overflow-hidden slides-wrapper">
          <div class="d-flex slides position-relative">
            <?php 
              for ($i = 0; $i < count($args['items']); $i++) {
            ?> 
              <div class="slide-item rt-9-16 position-relative">
                <div class="full-container">
                  <img class="w-100 h-100 object-fit-cover" src="<?php echo $args['items'][$i]['content']['img-src'] ? $args['items'][$i]['content']['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
