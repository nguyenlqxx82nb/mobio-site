
<div class="<?php echo $args["classExtend"] ?> mr-t-70-s0">
  <div class="journey-our-container position-relative">
    
  <div class="auto-container">
    <div class="mr-l-40 mr-l-20-s0 mr-r-20-s0">
      <div class="f-b f-16 f-14-s0 c-4 opa-5 upper-case t-c-s0"><p><?php echo $args['title-sm'] ?></p></div>
      <div class="f-b f-36 f-30-s3 f-36-s0 w-650 mr-t-25 t-c-s0"><p><?php echo $args['title'] ?></p></div>
    </div>
    
    <div class="w-100 journey-our-scroll d-none-s2">
      <div class="journey-our-slider d-flex justify-content-between align-items-end d-none-s0">
        <?php 
          foreach($args['items'] as $item) { ?>
            <div class="journey-year-item">
              <div class="b-5-b b-r-10 text-center pa-t-12 pa-b-12 mr-b-10">
                <p class="f-b f-20 c-fff"><?php echo $item['members'] ?> members</p>
              </div>

              <div class="b-sd b-fff b-r-10 pa-20 pa-t-50 pa-b-30 journey-year-item-info">
                <?php if($item['isBorn']) { ?>
                  <div><span class="f-20">&#127775;</span></div>
                <?php } ?>
                <div class="f-b f-36 c-5-b"><?php echo $item['years'] ?></div>
                <div class="f-n f-16"><p><?php echo $item['desc'] ?></p></div>
              </div>
            </div>
        <?php } ?>
      </div>
    </div>
    
    
    <div class="slides-wrapper d-n d-block-s0 " slideWidth="230" slideNumber="1" index="1">

      <div class="position-relative overflow-hidden mr-t-50" style="">
        <div class="d-flex slides position-relative align-items-end mr-b-35" style="left:-160px;">
          <?php 
            foreach($args['items'] as $item) {
          ?>
            <div class="slide-item journey-year-item mr-l-25 mr-r-25">
              <div class="b-sd b-5-b b-r-10 text-center pa-t-12 pa-b-12 mr-b-10">
                <p class="f-b f-16 c-fff"><?php echo $item['members'] ?> members</p>
              </div>

              <div class="b-sd b-fff b-r-10 pa-20 pa-t-50 pa-b-30 journey-year-item-info">
                <?php if($item['isBorn']) { ?>
                  <div><span class="f-25">&#127775;</span></div>
                <?php } ?>
                <div class="f-b f-30 c-5-b"><?php echo $item['years'] ?></div>
                <div class="f-n f-14"><p><?php echo $item['desc'] ?></p></div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>

      <div class="slide-dot-wrapper mr-t-0 d-flex justify-content-center align-items-center">
        <?php 
          for($i=0; $i< count($args['items']); $i++) {
        ?>
          <div class="slide-dot mr-l-20 <?php echo $i === 1 ? 'selected' : '' ?>"></div>
        <?php } ?>
      </div>
    </div>
    

  </div>

  <div class="w-100 journey-our-scroll d-n d-block-s2">
    <div class="journey-our-slider d-flex justify-content-between align-items-end d-none-s0">
      <?php 
        foreach($args['items'] as $item) { ?>
          <div class="journey-year-item">
            <div class="b-5-b b-r-10 text-center pa-t-12 pa-b-12 mr-b-10">
              <p class="f-b f-20 c-fff"><?php echo $item['members'] ?> members</p>
            </div>

            <div class="b-sd b-fff b-r-10 pa-20 pa-t-50 pa-b-30 journey-year-item-info">
              <?php if($item['isBorn']) { ?>
                <div><span class="f-20">&#127775;</span></div>
              <?php } ?>
              <div class="f-b f-36 c-5-b"><?php echo $item['years'] ?></div>
              <div class="f-n f-16"><p><?php echo $item['desc'] ?></p></div>
            </div>
          </div>
      <?php } ?>
    </div>
  </div>

  <div class="journey-divider-bottom position-absolute"></div>
  </div>
</div>