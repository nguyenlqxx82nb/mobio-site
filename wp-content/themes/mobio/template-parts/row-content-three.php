<div class="mo-row">
  <div class="auto-container">
    <div class="mo-row-3 mo-row row mr-l-30 mr-r-30 mr-l-40-s0 mr-r-40-s0 <?php echo $args['classExtend'] ?>">
      <?php foreach($args['content'] as $item) {?>
        <div class="mo-col-4 mo-col mo-col-6-s2 mo-col-12-s1  mr-b-25-s0 mr-b-30">
          <div class="mo-column justify-content-between mr-l-20 mr-r-20 mr-l-0-s0  mr-r-0-s0">
            <div>
              <div class="w-100 <?php echo $args['class-image-wrapper'] ? $args['class-image-wrapper'] : '' ?>">
                <div class="col-container-img <?php echo $args['class-image-ratio'] ? $args['class-image-ratio'] : '' ?>">
                  <img class="<?php echo $args['class-image'] ? $args['class-image'] : '' ?>" 
                    src="<?php echo $item['img-src'] ? $item['img-src'] : get_template_directory_uri() . '/images/empty-image.png'?>"/>
                </div>
              </div>
              
              <div class="col-container-info pa-30  pa-b-0 pa-30-s0 ">
                <div class="f-b f-18-s0 f-18 <?php echo $args['title-class'] ? $args['title-class'] : 'f-25' ?>"><p><?php echo $item['title'] ?></p></div>
                <div class="f-n f-16-s0 f-16 f mr-t-25 mr-t-20-s0 <?php echo $args['desc-w'] ?>">
                  <p><?php echo $item['desc'] ?></p>
                </div>
              </div>
            </div>
            <a href="<?php echo $item['next-url'] ?>" class="c-1"><p class="f-b f-16 f-16-s0 pa-l-40 pa-b-30 pa-l-30-s0 pa-b-30-s0  mr-t-0 mr-t-0-s0 mr-t-0-s0 c-1 <?php echo $args['next-class'] ? $args['next-class'] : '' ?>"><?php echo $item['next'] ?></p></a>
          </div>
        </div>
      <?php } ?>
    </div>  
  </div>
</div>
