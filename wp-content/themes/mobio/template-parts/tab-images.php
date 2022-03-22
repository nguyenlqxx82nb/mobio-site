  
<div class="mo-row mr-t-40 ">
  <div class="mr-l-40 mr-r-40 tab-images d-flex d-none-s0">
    <div class="d-flex flex-column tab-image-btn-container pa-r-40 d-none-s0">
      <?php for ($i = 0; $i < count($args['items']); $i++) { ?>
        <button class=" <?php echo $i === 0 ? 'selected' : '' ?> <?php echo $i === count($args['items']) - 1 ? '' : ' mr-b-30' ?>  btn-tab">
          <?php echo $args['items'][$i]['title'] ?>
        </button>
      <?php }?>
    </div>


    <div class="tab-images-container b-r-10 d-n position-relative">
      <?php for ($i = 0; $i < count($args['items']); $i++) { ?>
        <div class="tab-image-item w-100 h-100 b-r-10 b-sd  opa-0 position-absolute b-fff pa-20 ">
          <img class="w-100 h-100 b-r-15 object-fit-contain" src="<?php  echo $args['items'][$i]['img-src'] ? $args['items'][$i]['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
        </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="tab-wrapper d-n d-block-s0">
    <div class="b-sd auto b-r-10 mr-l-20-s0 mr-r-20-s0 pa-l-15-s0 pa-r-15-s0 mr-t-0-s0">
        
        <div class="scroll-tab mr-b-10 f-b f-22 f-16-s0 c-2 justify-content-between mr-t-25-s0 mr-b-25-s0"> 
          <?php 
              for($i=0; $i<count($args['items']); $i++) {
            ?>
            <div class="scroll-tab-item <?php echo $i === 0 ? 'selected c-0-b' : '' ?> ">
              <p class="pa-l-5 pa-r-5 lh4"><?php echo $args['items'][$i]['title'] ?></p>
            </div>
          <?php } ?>
          <div class="divider-selected"></div>
        </div>

        <div class="mr-t-0-s0 mr-b-20-s0">
          <?php 
              for($i=0; $i<count($args['items']); $i++) {
            ?>
            <div class="tab-content-item auto <?php echo $i === 0 ? 'selected opa ' : 'opa-0 d-n' ?>">
              <div class="mo-row row">
                <div class="mo-col-12-s0">
                  <div class="b-fff b-r-10 pa-10">
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