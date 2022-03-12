<div class="mo-row <?php echo $args['classExtend'] ?> mr-t-50-s1">
  <div class="auto-container">
    <div class=" mo-row-2 mo-row row">
      <?php if ($args['imageLeft']) { ?>
        <div class=" d-none-s1 d-flex flex-column justify-content-center <?php echo $args['classColImage'] ? $args['classColImage'] : 'mo-col-6' ?>">
          <div class="b-r-10 w-100 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?>">
            <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
              <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
                src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
            </div>
          </div>
        </div>
      <?php } ?>
      

      <div class="mo-col-12-s1 <?php echo $args['classColContent'] ? $args['classColContent'] : 'mo-col-6' ?> mo-col info-container d-flex flex-column justify-content-center 
        <?php echo $args['classContent'] ?  $args['classContent'] : (!$args['imageLeft'] ? 'pa-l-40 pa-r-60' : 'pa-l-100 pa-r-20') ?> pa-l-20-s1 pa-r-20-s1">
        <?php
          if ($args["icon"]) {
        ?>
          <img src="<?php echo $args["icon"]; ?>" class="icon-top mr-b-25 icon-m-s1" />
        <?php } ?>
        <?php if ($args['title'] ) { ?>
          <div class="upper-case f-b f-16-s4 mr-b-15 f-13-s1 <?php echo $args['title-class'] ? $args['title-class'] : 'f-18 c-4 opa-5' ?>"><p><?php echo $args['title'] ?></p></div>
        <?php } ?>
        
        <?php if ($args['name']) { ?>
          <div class="mr-b-30 w-650  f-36-s4 f-30-s1 mr-b-10-s1 <?php echo $args['nameClass'] ? $args['nameClass'] : 'f-b f-56' ?> lh2">
            <p><?php echo $args['name'] ?></p>
          </div>
        <?php }?>

        <?php echo $args['divider'] ? '<div class="divider-item mr-b-30 b-pri b-r-5"></div>' : ''  ?>
        <div class="f-n f-20 f-14-s1  f-16-s4 <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-550' ?> ">
          <?php echo $args['desc'] ?>
        </div>

        <?php echo $args['next'] ? '<a class="c-4-b" href="'.$args['next_url'].'"><p class="upper-case f-b f-18  f-16-s4 f-14-s1 c-4-b mr-t-25 w-300-s1">'.$args['next'].'</p></a>' : ''?>

        <?php if ($args['next-button']) {?>
          <a href="<?php echo $args['next_url'] ?>"><button class="btn-small upper-case mr-t-30 f-14-s1 mr-t-20-s1"><?php echo $args['next-button'] ?></button></a>
        <?php } ?>
      </div> 

      <?php if (!$args['imageLeft']) { ?>
        <div class="d-none-s1 d-flex flex-column justify-content-center <?php echo $args['classColImage'] ? $args['classColImage'] : 'mo-col-6' ?>">
          <div class="b-r-10 w-100 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?>">
            <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
              <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
                src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="mo-col-12-s1 d-n d-block-s1 d-flex flex-column justify-content-center <?php echo $args['classColImage'] ? $args['classColImage'] : '' ?>">
        <div class="b-r-10 <?php echo $args['classImageContainer'] ? $args['classImageContainer'] : '' ?> mr-t-40 mr-l-20 mr-r-20 mr-b-40 b-sd b-fff pa-10-s1 ">
          <div class="position-relative b-r-10 w-100 <?php echo $args['classImageRatio'] ? $args['classImageRatio'] : 'rt-9-16' ?>">
            <img class="img-full object-fit-contain <?php echo $args['classImage'] ? $args['classImage'] : ''  ?>" 
              src="<?php  echo $args['img-src'] ? $args['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

