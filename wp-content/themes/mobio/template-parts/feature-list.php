
<div class="tab-wrapper <?php echo $args['classExtend'] ?> mr-t-30-s0">
  <div class="auto-container">
    <div class="b-sd b-fff auto mr-l-40 mr-r-40 mr-b-40 mr-t-70 pa-l-100 pa-r-80 b-r-10 mr-l-20-s0 mr-r-20-s0 pa-l-15-s0 pa-r-15-s0 mr-t-0-s0">
        
        <div class="scroll-tab mr-b-10 f-b f-22 f-16-s4 f-16-s0 c-2 mr-t-45 mr-b-45 mr-t-25-s0 mr-b-25-s0 justify-content-between "> 
          <?php 
            for($i=0; $i<count($args['items']); $i++) {
          ?>
            <div class="scroll-tab-item <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
              <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['tab-title'] ?></p>
            </div>
          <?php } ?>

          <div class="divider-selected"></div>
        </div>


        <div class="mr-t-70 mr-b-30 w-100 mr-t-0-s0 mr-b-20-s0">
          <div class="position-relative overflow-hidden slides-wrapper">
            <div class="d-flex slides position-relative">
              <?php 
                for($i=0; $i<count($args['items']); $i++) {
              ?>

                <div class="slide-item auto">
                  <div class="mo-row">
                    <?php foreach($args['items'][$i]['feature'] as $feature) { ?>
                      <div class="mo-col-6 mo-col-12-s0">
                        <div class="d-flex align-items-center mr-b-60 mr-b-15-s0">
                          <div class="icon-bg mr-l-10"></div>
                          <div class="f-n f-18 f-14-s4 f-14-s0  mr-l-10-s0 mr-l-20"><p><?php echo $feature ?></p></div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>

              <?php } ?>
            </div>
          </div>
         
        </div>
      </div>
  </div>
</div>