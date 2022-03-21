
<div class="position-relative mr-t-40-s0 tab-wrapper <?php echo $args['classExtend'] ?>" <?php echo $args['anchor'] ? 'id="'.$args['anchor'].'"'  : '' ?> >
  <div class="auto-container">
    <div class="position-relative d-none-s0">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
          <div class="mo-row row w-100 tab-content-item <?php echo $i === 0 ? '' : 'd-n opa-0'  ?>">
            <?php 
              if ($args["img-left"]) {
            ?>
              <div class="col-image mo-col d-none-s0">
                <div class="b-r-10w-100 col-img-container">
                  <div class=" w-100 <?php echo $args['items'][$i]['classImgRatio'] ? $args['items'][$i]['classImgRatio'] : 'rt-9-16' ?>">
                    <div class="full-container">
                      <img class="w-100 h-100 object-fit-contain img-shadow" src="<?php echo $args['items'][$i]['img-src'] ?>" />
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-separate">

              </div>
            <?php } ?>

            <div class="col-info mo-col d-flex flex-column justify-content-center">
              <img class="icon-top " src="<?php echo $args["icon-top"] ? $args["icon-top"] : get_template_directory_uri() ?>/images/item-icon.png" />
              <div class="f-b f-16 f-14-s3 upper-case c-0-b mr-t-35"><?php echo $args['items'][$i]['title'] ?></div>
              <h3 class="mr-t-20"><?php echo $args['items'][$i]['name'] ?></h3>
              <div class="f-n f-18 f-16-s3 mr-t-30"><?php echo $args['items'][$i]['desc'] ?></div>
              <a class="" href="<?php echo $args['items'][$i]['url'] ?>"><button class="btn-small mr-t-35 mr-t-15-s0 f-14-s0 mr-t-20">LEARN MORE</button></a>
            </div>

            <?php 
              if (!$args["img-left"]) {
            ?>
              <div class="col-separate">
              </div>
              <div class="col-image mo-col d-none-s0">
                <div class=" w-100 h-100 <?php echo $args['items'][$i]['classImgRatio'] ? $args['items'][$i]['classImgRatio'] : 'rt-9-16' ?>">
                  <div class="full-container">
                    <img class="h-100 w-100 object-fit-contain img-shadow" src="<?php echo $args['items'][$i]['img-src'] ?>" />
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>

      <?php } ?>
    </div>

    <div class="d-flex  mr-t-15 <?php echo !$args["img-left"] ? 'justify-content-end' : 'justify-content-start' ?>">
      <div class="scroll-tab f-b f-18 c-2 justify-content-between d-n d-none-s0" 
        style="width: 700px;  <?php echo !$args["img-left"] ? 'right: 0px;' : 'left: 0px;' ?>">
        <?php 
          for ($i = 0; $i < count($args['items']); $i++) {
        ?>
          <div class="scroll-tab-item">
            <p class="pa-l-10 pa-r-10 lh5"><?php echo $args['items'][$i]['tab-title'] ?></p>
          </div>
        <?php } ?>
        <div class="divider-selected"></div>
        <div class="divider-bottom"></div>
      </div>
    </div>

    <div class="d-n d-block-s0">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="tab-item-info pa-l-20-s0 pa-r-20-s0 <?php echo $i === 0 ? 'd-n d-block-s0' : 'd-n opa-0'  ?>">
          <img class="icon-top " src="<?php  echo get_template_directory_uri() ?>/images/item-icon.png" />
          <div class="f-b upper-case c-0-b mr-t-35 mr-t-12-s0 f-12-s0 "><?php echo $args['items'][$i]['title'] ?></div>
          <div class="f-b mr-t-15 mr-t-12-s0 f-30-s0"><?php echo $args['items'][$i]['name'] ?></div>
          <div class="f-n mr-t-30 pa-r-40 pa-r-0-s0 mr-t-12-s0 f-14-s0"><?php echo $args['items'][$i]['desc'] ?></div>
          <a class="" href="<?php echo $args['items'][$i]['url'] ?>"><button class="btn-small mr-t-15-s0 f-14-s0 mr-t-20">LEARN MORE</button></a>
        </div>

      <?php } ?>

      <div class="w-100 pa-l-15 mr-t-30">
        <div class="scroll-tab mr-b-10 f-b f-15 c-2 is-scroll">
          <?php 
          for ($i = 0; $i < count($args['items']); $i++) {
          ?>
            <div class="scroll-tab-item <?php echo $i === 0 ? 'selected c-0-b' : ''?>">
              <p class="pa-l-10 pa-r-10"><?php echo $args['items'][$i]['tab-title'] ?></p>
            </div>
          <?php } ?>
          <div class="divider-selected"></div>
          <!-- <div class="divider"></div> -->
        </div>
      </div>
          
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="tab-item-image pa-t-20-s0 pa-b-30-s0 pa-l-20-s0 pa-r-20-s0 <?php echo $i === 0 ? 'd-n d-block-s0' : 'd-n opa-0'  ?>">
          <div class="b-fff b-r-10 b-sd w-100 col-img-container pa-10">
            <div class="rt-9-16 w-100">
              <div class="full-container">
                <img class="h-100 w-100 object-fit-contain" src="<?php echo $args['items'][$i]['img-src'] ?>" />
              </div>
            </div>
          </div>
        </div>
        </div>
      <?php } ?>
    </div>

  </div>
</div>