<div class="mo-row tab-wrapper <?php echo $args['classExtend']; ?> mr-t-50-s0">
  <div class="auto-container">
    <div class="mr-l-20">
      

      <div class="scroll-tab mr-b-10 f-n f-16-s0 c-2 mr-t-30-s0 mr-b-15-s0 justify-content-between d-n d-block-s0"> 
        <?php 
          for($i=0; $i<count($args['items']); $i++) {
        ?>
          <div class="scroll-tab-item border-none-s0 <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
            <p class="pa-l-10 pa-r-10 lh4 upper-case"><?php echo $args['items'][$i]['title'] ?></p>
          </div>
        <?php } ?>

        <div class="divider-selected"></div>
      </div>
    </div>
    
    <div class="position-relative overflow-hidden slides-wrapper">
      <div class="d-flex slides position-relative">
        <?php 
          for($i = 0; $i < count($args['items']); $i++) {
        ?>
          <div class="flex-100 slide-item position-relative">
            <div class="mo-row mo-row-2 row">
              <div class="mo-col-6 pa-l-40 pa-r-80 mo-col-12-s2 pa-l-20-s2 pa-r-20-s2 pa-b-5-s2 pa-t-10-s2">
                <div class="upper-case f-b f-16 f-14-s0 c-4 opa-5 mr-b-15"><p><?php echo $args['items'][$i]['content']['title'] ?></p></div>
                <div class="f-b f-40 f-30-s1 mr-b-20-s1 mr-b-25"><p><?php echo $args['items'][$i]['content']['name'] ?></p></div>
                <div class="divider-item mr-b-30  mr-b-20-s1 b-pri b-r-5"></div>
                <div class="f-n f-18 f-16-s2 w-550 w-350-s1 f-14-s1"><p><?php echo $args['items'][$i]['content']['desc'] ?></p></div>
                <a href="<?php echo $args['items'][$i]['content']['next-url'] ?>"><button class="btn-small upper-case mr-t-30 mr-t-15-s0"><?php echo $args['items'][$i]['content']['next'] ?></button></a>
              </div>
              <div class="mo-col-6 mo-col-12-s2 pa-l-20-s2 pa-r-20-s2 pa-t-5-s2 pa-b-10-s2">
                <div class="w-100 pa-0 pa-0-s0 b-r-10 h-100 ">
                  <div class="b-r-10 rt-3-4 position-relative h-100">
                    <img class="img-full object-fit-contain" src="<?php echo $args['items'][$i]['content']['img-src'] ?>" />
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    

    <div class="scroll-tab scroll-tab-top f-n f-18 f-16-s2 c-2 mr-t-60 mr-b-45 justify-content-between d-none-s0">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="scroll-tab-item mr-l-30-s2">
          <p class="pa-l-10 pa-r-10 lh5 upper-case"><?php echo $args['items'][$i]['title'] ?></p>
        </div>
      <?php } ?>
      <div class="divider-selected"></div>
      <div class="divider"></div>
    </div>


  </div>
</div>
