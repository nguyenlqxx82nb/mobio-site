
<div class="tab-wrapper <?php echo $args['classExtend'] ?>  mr-t-30-s0">
  <div class="auto-container">
    <div class="b-sd b-fff auto mr-l-40 mr-r-40 mr-l-20-s3 mr-r-20-s3 mr-b-40 mr-t-70 pa-l-50 pa-r-50 pa-l-40-s3 pa-r-40-s3 b-r-10  mr-l-20-s0 mr-r-20-s0 pa-l-15-s0 pa-r-15-s0 mr-t-0-s0">
      
      <div class="scroll-tab mr-b-10 f-b f-18 f-16-s3 f-16-s0 c-2 mr-t-45 mr-b-45 mr-t-25-s3 mr-b-25-s3  justify-content-between mr-t-25-s0 mr-b-25-s0"> 
        <?php 
            for($i=0; $i<count($args['items']); $i++) {
          ?>
          <div class="scroll-tab-item mr-l-30 <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
            <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['tab-title'] ?></p>
          </div>
        <?php } ?>
        <div class="divider-selected"></div>
      </div>

      <div class="mr-t-80 mr-b-80 w-100 mr-t-40-s3 mr-b-40-s3 mr-t-0-s0 mr-b-20-s0 ">
        <div class="position-relative overflow-hidden slides-wrapper">
          <div class="d-flex slides position-relative">
            <?php 
              for($i=0; $i<count($args['items']); $i++) {
            ?>
              <div class="slide-item auto">
                <div class="mo-row row">
                  <div class="mo-col-5 mo-col-12-s3 mr-b-30-s3">
                    <div class="h-100 d-flex flex-column justify-content-center pa-r-40 pa-l-40 pa-0-s0">
                      <div class="f-b f-30 f-25-s0"><p><?php echo $args['items'][$i]['title']; ?></p></div>
                      <div class="f-n f-16 f-14-s0 mr-t-30  mr-t-20-s0"><p><?php echo $args['items'][$i]['desc']; ?></p></div>
                    </div>
                  </div>
                  <div class="mo-col-7 mo-col-12-s3">
                    <div class="h-100 <?php echo $args['items'][$i]['class-image-wrapper'] ? $args['items'][$i]['class-image-wrapper'] : 'b-g-1 b-r-10 pa-30 pa-0-s0 b-fff-s0'  ?>">
                      <div class="h-100 rt-9-16 position-relative">
                        <img class="img-full object-fit-contain" src="<?php echo $args['items'][$i]['img-src']; ?>" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

