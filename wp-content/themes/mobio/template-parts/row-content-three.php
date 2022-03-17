<div class="mo-row">
  <div class="auto-container">
    <div class="mo-row-3 mo-row row mr-l-30 mr-r-30 mr-l-40-s1 mr-r-40-s1 <?php echo $args['classExtend'] ?>">
      <?php foreach($args['content'] as $item) {?>
        <div class="mo-col-4 mo-col mo-col-12-s1 mr-b-25-s1">
          <div class="mo-column justify-content-between mr-l-20 mr-r-20 mr-l-0-s1  mr-r-0-s1">
            <div>
              <div class="w-100 <?php echo $args['class-image-wrapper'] ? $args['class-image-wrapper'] : '' ?>">
                <div class="col-container-img <?php echo $args['class-image-ratio'] ? $args['class-image-ratio'] : '' ?>">
                  <img class="<?php echo $args['class-image'] ? $args['class-image'] : '' ?>" 
                    src="<?php echo $item['img-src'] ? $item['img-src'] : get_template_directory_uri() . '/images/empty-image.png'?>"/>
                </div>
              </div>
              
              <div class="col-container-info pa-50-n pa-30-s4  pa-b-0 pa-30-s1 ">
                <div class="f-b f-18-s1 f-18-s4 <?php echo $args['title-class'] ? $args['title-class'] : 'f-25' ?>"><p><?php echo $item['title'] ?></p></div>
                <div class="f-n f-20 f-16-s1 f-16-s4 f mr-t-25 mr-t-20-s1 <?php echo $args['desc-w'] ?>">
                  <p><?php echo $item['desc'] ?></p>
                </div>
              </div>
            </div>
            <a href="<?php echo $item['next-url'] ?>" class="c-1"><p class="f-b f-20 f-16-s4 f-16-s1 pa-l-50 pa-b-50 pa-l-40-s4 pa-b-30-s4 pa-l-30-s1 pa-b-30-s1  mr-t-0 mr-t-0-s1 mr-t-0-s1 c-1 <?php echo $args['next-class'] ? $args['next-class'] : '' ?>"><?php echo $item['next'] ?></p></a>
          </div>
        </div>
      <?php } ?>
    </div>  
  </div>
</div>
