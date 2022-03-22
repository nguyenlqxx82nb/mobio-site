<div class="mo-row <?php echo $args['classExtend'] ?> mr-t-50-s0">
  <div class="auto-container">
    <div class=" mo-row-2 mo-row row">
      <?php if ($args['imageLeft']) { ?>
        <div class=" d-none-s0 d-flex flex-column justify-content-center col-image">
          <div class="b-r-10 w-100 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?>">
            <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
              <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
                src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
            </div>
          </div>
        </div>

        <div class="col-separate"></div>
      <?php } 
      ?>
      
      

      <div class="mo-col-12-s0 col-info mo-col info-container d-flex flex-column justify-content-center ">
        <?php
          if ($args["icon"]) {
        ?>
          <img src="<?php echo $args["icon"]; ?>" class="icon-top mr-b-25 icon-m-s0" />
        <?php } ?>
        <?php if ($args['title'] ) { ?>
          <div class="upper-case f-b mr-b-10 f-13-s0 <?php echo $args['title-class'] ? $args['title-class'] : 'f-18 c-4 opa-5' ?>"><p><?php echo $args['title'] ?></p></div>
        <?php } ?>
        
        <?php if ($args['name']) { ?>
          <h3 class="mr-b-20 f-40 f-30-s3 f-30-s0 mr-b-10-s0 <?php echo $args['nameClass'] ? $args['nameClass'] : 'f-b' ?> lh2">
            <?php echo $args['name'] ?>
          </h3>
        <?php }?>

        <?php echo $args['divider'] ? '<div class="divider-item mr-b-30 b-pri b-r-5"></div>' : ''  ?>
        <div class="f-n f-18 f-16-s3 f-14-s0 ">
          <?php echo $args['desc'] ?>
        </div>

        <?php echo $args['next'] ? '<a class="c-4-b" href="'.$args['next_url'].'"><p class="upper-case f-b f-18  f-14-s0 c-4-b mr-t-25 w-300-s0">'.$args['next'].'</p></a>' : ''?>

        <?php if ($args['next-button']) {?>
          <a href="<?php echo $args['next_url'] ?>"><button class="btn-small upper-case mr-t-30 f-14-s0 mr-t-20-s0"><?php echo $args['next-button'] ?></button></a>
        <?php } ?>
      </div> 

      <?php if (!$args['imageLeft']) { ?>
        <div class="col-separate">
        </div>
        <div class="d-none-s0 d-flex flex-column justify-content-center col-image">
          <div class="b-r-10 w-100 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?>">
            <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
              <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
                src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="mo-col-12-s0 d-n d-block-s0 d-flex flex-column justify-content-center <?php echo $args['classColImage'] ? $args['classColImage'] : '' ?>">
        <div class="b-r-10 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?> mr-t-40 mr-l-20 mr-r-20 mr-b-40 b-sd b-fff pa-10-s0 ">
          <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
            <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
              src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

