<div class="mo-row tab-wrapper <?php echo $args['classExtend']; ?> mr-t-50-s1">
  <div class="auto-container">
    <div class="mr-l-20">
      

      <div class="scroll-tab mr-b-10 f-n f-16-s1 c-2 mr-t-30-s1 mr-b-15-s1 justify-content-between d-n d-block-s1"> 
        <?php 
          for($i=0; $i<count($args['items']); $i++) {
        ?>
          <div class="scroll-tab-item border-none-s1 <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
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
              <div class="mo-col-5 mo-col-12-s1 pa-l-20-s1 pa-r-20-s1 pa-b-5-s1 pa-40 pa-t-10-s1">
                <div class="upper-case f-b f-18 f-14-s1 c-4 opa-5 mr-b-15"><p><?php echo $args['items'][$i]['content']['title'] ?></p></div>
                <div class="f-b f-48 f-30-s1 mr-b-20-s1 mr-b-30"><p><?php echo $args['items'][$i]['content']['name'] ?></p></div>
                <div class="divider-item mr-b-30  mr-b-20-s1 b-pri b-r-5"></div>
                <div class="f-n f-20 w-550 f-14-s1"><p><?php echo $args['items'][$i]['content']['desc'] ?></p></div>
                <a href="<?php echo $args['items'][$i]['content']['next-url'] ?>"><button class="btn-small upper-case mr-t-30 mr-t-15-s1"><?php echo $args['items'][$i]['content']['next'] ?></button></a>
              </div>
              <div class="mo-col-7 mo-col-12-s1 pa-l-20-s1 pa-r-20-s1 pa-t-5-s1 pa-b-10-s1">
                <div class="w-100 pa-0 pa-0-s1 b-r-10 ">
                  <div class="b-r-10 rt-9-16 position-relative">
                    <img class="img-full object-fit-contain" src="<?php echo $args['items'][$i]['content']['img-src'] ?>" />
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    

    <div class="scroll-tab scroll-tab-top f-n f-25 c-2 mr-t-60 mr-b-45 justify-content-between d-none-s1">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="scroll-tab-item">
          <p class="pa-l-10 pa-r-10 lh5 upper-case"><?php echo $args['items'][$i]['title'] ?></p>
        </div>
      <?php } ?>
      <div class="divider-selected"></div>
      <div class="divider"></div>
    </div>


  </div>
</div>
