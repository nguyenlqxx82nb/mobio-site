
<div class="<?php echo $args["classExtend"] ?>">

  <div class="auto-container">
    <?php if ( $args['cols'] === 1 ) { ?>
      <div class="customer-case b-sd b-r-10 pa-l-80 pa-r-80 pa-t-50 pa-b-50 mr-r-40 mr-l-40 mr-l-20-s0 mr-r-20-s0 pa-30-s0">
        <div class="mo-row row">
          <div class="mo-col-6 pa-r-20 pa-r-0-s2 mo-col-12-s2">
            <div class="d-flex flex-column justify-content-center h-100">
              <?php if ($args["items"][0]['title-sub']) { ?> 
                <div class="f-b c-4 f-16 opa-5 upper-case mr-b-10"><p><?php echo $args["items"][0]['title-sub'] ?></p></div> 
              <?php } ?>
              <?php if ($args["items"][0]['img-top']) { ?> 
                <div>
                  <img class="<?php echo $args["items"][0]['img-top-class'] ? $args["items"][0]['img-top-class'] : 'h-50' ?>" src="<?php echo $args["items"][0]['img-top']; ?>" />
                </div>
              <?php } ?>
              <?php if ($args["items"][0]['title']) { ?>
                <div class="f-b f-16 f-12-s0 upper-case"><p><?php echo $args["items"][0]['title'] ?></p></div>
              <?php } ?>
              <?php if ($args["items"][0]['name']) { ?> 
                <div class="f-b f-30 f-30-s0 mr-t-20 mr-t-15-s0"><p><?php echo $args["items"][0]['name'] ?></p></div>
              <?php } ?>
              <div class="f-n f-16 f-14-s0 mr-t-20 w-450"><p><?php echo $args["items"][0]['desc'] ?></p></div>
              <?php if($args['items'][0]['next']) { ?>
                <a href="<?php echo $args["items"][0]["next-url"] ?>" class="c-4-b">
                  <p class="mr-t-20 f-b f-16 f-14-s0 upper-case c-4-b"><?php echo $args['items'][0]['next'] ?></p>
                </a>
              <?php } else { ?>
                <a href="<?php echo $args["items"][$i]["next-url"] ?>" class="c-4-b">
                  <button class="btn-small mr-t-30 f-b f-16 c-fff f-16-s0 mr-t-20-s2">Read more</button>
                </a>
              <?php } ?>
            </div>
          </div>
          <div class="mo-col-6 mo-col-12-s2 mr-t-30-s2">
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
            <div class="mo-col-4 mo-col-6-s2 mo-col-12-s1  mr-b-20-s2">
              <div class="customer-case b-sd b-r-10 pa-40 mr-r-20 mr-l-20 h-100 mr-l-0-s1 mr-r-0-s1 pa-30-s1">
                <?php if ($args["items"][$i]['title-sub']) { ?> 
                  <div class="f-b c-4 f-16 opa-5 upper-case mr-b-20"><p><?php echo $args["items"][$i]['title-sub'] ?></p></div> 
                <?php } ?>
                <?php if ($args["items"][$i]['img-top']) { ?> 
                  <img class="<?php echo $args["items"][$i]['img-top-class'] ? $args["items"][$i]['img-top-class'] : 'h-50' ?>" src="<?php echo $args["items"][$i]['img-top']; ?>" />
                <?php } ?>
                <div class="f-n f-16 mr-t-30 f-14-s0 mr-t-20-s0 w-450"><p><?php echo $args["items"][$i]['desc'] ?></p></div>

                <a href="<?php echo $args["items"][$i]["next-url"]?>" class="c-4-b">
                  <button class="btn-small mr-t-30 f-b f-16 f-14-s0 mr-t-20-s0 c-fff">Read more</button>
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
            <div class="<?php echo $args['items'][$i]['colClass'] ? $args['items'][$i]['colClass'] : 'mo-col-6' ?> mo-col-6-s2 mo-col-12-s1 mr-b-20-s2">
              <div class="customer-case b-sd b-r-10 pa-50 mr-r-20 mr-l-20 h-100 mr-l-0-s1 mr-r-0-s1 pa-30-s1">
                <?php if ($args["items"][$i]['title-sub']) { ?> 
                  <div class="f-b c-4 f-16 opa-5 upper-case mr-b-20"><p><?php echo $args["items"][$i]['title-sub'] ?></p></div> 
                <?php } ?>
                <?php if ($args["items"][$i]['img-top']) { ?> 
                  <img class=" <?php echo $args["items"][$i]['img-top-class'] ? $args["items"][$i]['img-top-class'] : 'h-50' ?>" src="<?php echo $args["items"][$i]['img-top']; ?>" />
                <?php } ?>
                <div class="f-n f-16 f-14-s0 mr-t-30 mr-t-20-s1 w-450"><p><?php echo $args["items"][$i]['desc'] ?></p></div>

                <a href="<?php echo $args["items"][$i]["next-url"] ?>" class="c-4-b">
                  <button class="btn-small mr-t-30 f-b f-16 f-14-s0 mr-t-20-s1 c-fff">Read more</button>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php } ?>

  </div>

</div>