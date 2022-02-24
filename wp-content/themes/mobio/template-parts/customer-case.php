
<div class="<?php echo $args["classExtend"] ?>">

  <div class="auto-container">
    <?php if ( $args['cols'] === 1 ) { ?>
      <div class="customer-case b-sd b-r-10 pa-l-100 pa-r-100 pa-t-75 pa-b-75 mr-r-40 mr-l-40 mr-l-20-s1 mr-r-20-s1 pa-30-s1">
        <div class="mo-row row">
          <div class="mo-col-6 pa-r-20 pa-r-0-s1 mo-col-12-s1">
            <div class="d-flex flex-column justify-content-center h-100">
              <div class="f-b f-18 f-12-s1 upper-case"><p><?php echo $args["items"][0]['title'] ?></p></div>
              <div class="f-b f-48 f-30-s1 mr-t-25 mr-t-15-s1"><p><?php echo $args["items"][0]['name'] ?></p></div>
              <div class="f-n f-20 f-14-s1 mr-t-30 mr-t-20-s1 w-450"><p><?php echo $args["items"][0]['desc'] ?></p></div>
              <?php if($args['items'][0]['next']) { ?>
                <a href="<?php echo $args["items"][0]["next-url"] ?>" class="c-4-b">
                  <p class="mr-t-30 f-b f-22 f-14-s1 upper-case c-4-b"><?php echo $args['items'][0]['next'] ?></p>
                </a>
              <?php } else { ?>
                <a href="<?php echo $args["items"][$i]["next-url"] ?>" class="c-4-b">
                  <button class="btn-small mr-t-35 f-n f-20 c-fff f-16-s1 mr-t-20-s1">Read more</button>
                </a>
              <?php } ?>
            </div>
          </div>
          <div class="mo-col-6 mo-col-12-s1 mr-t-30-s1">
            <div class="rt-3-4 w-100 position-relative"> 
              <img class="w-100 img-full object-fit-contain" src="<?php echo $args['items'][0]['img-src'] ?>" />
            </div>
          </div>
        </div>
      </div>
    <?php } ?>


    <?php if ( $args['cols'] === 3 ) { ?>
      <div class="mr-r-20 mr-l-20">
        <div class="mo-row row">
          <?php for($i=0; $i < count($args['items']); $i++) { ?>
            <div class="mo-col-4 mo-col-12-s1  mr-b-20-s1">
              <div class="customer-case b-sd b-r-10 pa-l-50 pa-r-50 pa-t-75 pa-b-75 mr-r-20 mr-l-20 h-100 mr-l-0-s1 mr-r-0-s1 pa-30-s1">
                <div class="f-b f-45 f-25-s1 upper-case"><p><?php echo $args["items"][$i]['title'] ?></p></div>
                <div class="f-n f-20 mr-t-30 f-14-s1 mr-t-20-s1 w-450"><p><?php echo $args["items"][$i]['desc'] ?></p></div>

                <a href="<?php echo $args["items"][$i]["next-url"]?>" class="c-4-b">
                  <button class="btn-small mr-t-35 f-n f-20 f-14-s1 mr-t-20-s1 c-fff">Read more</button>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>


    <?php if ( $args['cols'] === 2 ) { ?>
      <div class="mr-r-20 mr-l-20">
        <div class="mo-row row">
          <?php for($i=0; $i < count($args['items']); $i++) { ?>
            <div class="<?php echo $args['items'][$i]['colClass'] ? $args['items'][$i]['colClass'] : 'mo-col-6' ?> mo-col-12-s1 mr-b-20-s1">
              <div class="customer-case b-sd b-r-10 pa-l-50 pa-r-50 pa-t-75 pa-b-75 mr-r-20 mr-l-20 h-100 mr-l-0-s1 mr-r-0-s1 pa-30-s1">
                <div class="f-b f-45  f-25-s1  upper-case"><p><?php echo $args["items"][$i]['title'] ?></p></div>
                <div class="f-n f-20 f-14-s1 mr-t-30 mr-t-20-s1 w-450"><p><?php echo $args["items"][$i]['desc'] ?></p></div>

                <a href="<?php echo $args["items"][$i]["next-url"] ?>" class="c-4-b">
                  <button class="btn-small mr-t-35 f-n f-20 f-14-s1 mr-t-20-s1 c-fff">Read more</button>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

  </div>

</div>