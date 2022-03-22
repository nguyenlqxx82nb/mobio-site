
<div class="tab-wrapper <?php echo $args['classExtend'] ?>"> 
  <div class="auto-container">
    <div class="mr-l-40 mr-r-40 mr-l-20-s0 mr-r-20-s0">
      <div class="mo-row row"> 
        <div class="d-none-s0 w-100">
          <?php 
            for($i=0; $i < count($args["items"]); $i++) { 
          ?>
            <div class="mo-col-4 mo-col-12-s2 mr-b-10-s2">
              <div class="tab-button-item d-flex mr-l-10 mr-r-10 align-items-center pa-l-30 pa-r-30 pa-15-s2 pa-t-20 pa-b-20 cursor-pointer <?php echo $i === 0 ? ' b-fff  b-sd ' : ' b-g-3 ' ?> b-r-10 ">
                <img class="icon-m mr-r-15" src="<?php echo $args["items"][$i]['tab-icon'] ?>" />
                <p class="f-n f-20 f-16-s3"><?php echo $args["items"][$i]['tab-title'] ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>  
      <div class="d-n d-block-s0 w-100">
        <div class="scroll-tab f-b c-2 f-16-s4 f-16-s0 justify-content-between mr-t-25-s0 mr-b-25-s0">
          <?php 
            for ($i = 0; $i < count($args['items']); $i++) {
          ?>
            <div class="scroll-tab-item ">
              <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['tab-title'] ?></p>
            </div>
          <?php } ?>
          <div class="divider-selected"></div>

        </div>
      </div>

      <div class="mr-l-15 mr-r-15 mr-t-30 b-sd pa-60 b-r-10 pa-0-s0 mr-l-0-s0 mr-r-0-s0">
        <div class="position-relative overflow-hidden slides-wrapper">
          <div class="d-flex slides position-relative">
            <?php 
              for($i=0; $i < count($args['items']); $i++) {
            ?>
              <div class="mo-row row slide-item "> 
                <div class="mo-col-6 pa-l-40 pa-r-60 mo-col-12-s2 pa-20-s2">
                  <div class="h-100 d-flex flex-column justify-content-center">
                    <p class="f-n f-20 f-16-s4 f-14-s0"><?php echo $args["items"][$i]['desc'] ?></p>
                  </div>
                </div>
                <div class="mo-col-6 pa-l-40  mo-col-12-s2 pa-20-s2">
                  <div class="rt-9-16 position-relative h-100">
                    <div class="full-container">
                      <img class="w-100 h-100 object-fit-contain" src="<?php echo $args["items"][$i]['img-src'] ?>" />
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