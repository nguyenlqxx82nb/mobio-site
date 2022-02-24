
<div class="tab-wrapper <?php echo $args['classExtend'] ?>  mr-t-30-s1">
  <div class="auto-container">
    <div class="b-sd b-fff auto mr-l-40 mr-r-40 mr-b-40 mr-t-70 pa-l-100 pa-r-80 b-r-10  mr-l-20-s1 mr-r-20-s1 pa-l-15-s1 pa-r-15-s1 mr-t-0-s1">
      
      <div class="scroll-tab mr-b-10 f-b f-22 f-16-s1 c-2 mr-t-45 mr-b-45 justify-content-between mr-t-25-s1 mr-b-25-s1"> 
        <?php 
            for($i=0; $i<count($args['items']); $i++) {
          ?>
          <div class="scroll-tab-item <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
            <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['tab-title'] ?></p>
          </div>
        <?php } ?>
        <div class="divider-selected"></div>
      </div>

      <div class="mr-t-80 mr-b-80 w-100 mr-t-0-s1 mr-b-20-s1">
        <div class="position-relative overflow-hidden slides-wrapper">
          <div class="d-flex slides position-relative">
            <?php 
              for($i=0; $i<count($args['items']); $i++) {
            ?>
              <div class="slide-item auto">
                <div class="mo-row row">
                  <div class="mo-col-5 mo-col-12-s1 mr-b-30-s1">
                    <div class="h-100 d-flex flex-column justify-content-center pa-r-40 pa-r-40 pa-0-s1">
                      <div class="f-b f-48 f-25-s1"><p><?php echo $args['items'][$i]['title']; ?></p></div>
                      <div class="f-n f-20 f-14-s1 mr-t-50 mr-t-20-s1"><p><?php echo $args['items'][$i]['desc']; ?></p></div>
                    </div>
                  </div>
                  <div class="mo-col-7 mo-col-12-s1">
                    <div class="<?php echo $args['items'][$i]['class-image-wrapper'] ? $args['items'][$i]['class-image-wrapper'] : 'b-g-1 b-r-10 pa-30 pa-0-s1 b-fff-s1'  ?>">
                      <div class="rt-9-16 position-relative">
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

