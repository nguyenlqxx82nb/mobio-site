
<div class="mo-row mr-t-50 mr-t-20-s0"> 
  <div class="auto-container">
    <div class="mr-l-10-s0 mr-r-10-s0 d-flex justify-content-center">
      <div class="w-1000 mo-row row">
        <?php foreach($args['items'] as $item) { ?>
          <div class="mo-col-4 pa-15 mo-col-6-s0 pa-l-10-s0 pa-r-10-s0 pa-b-0-s0">
            <div class="w-100 rt-1-1 bd-g-8  b-r-15">
              <div class="full-container pa-l-25 pa-r-25 pa-t-30 pa-b-30">
                <img class="w-100 h-100 b-r-15 object-fit-cover" src="<?php  echo $item['img-src'] ? $item['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
              </div>
            </div>
            <div class="f-n f-w-5 f-25 f-18-s4 f-14-s0 text-center pa-t-20 pa-b-20 pa-t-15-s0 pa-b-5-s0">
              <p><?php echo $item['title'] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>  