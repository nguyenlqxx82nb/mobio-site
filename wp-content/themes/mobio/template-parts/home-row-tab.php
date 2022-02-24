
<div class="position-relative mr-t-40-s1 tab-wrapper <?php echo $args['classExtend'] ?>" <?php echo $args['anchor'] ? 'id="'.$args['anchor'].'"'  : '' ?> >
  <div class="auto-container">
    <div class="position-relative d-none-s1">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>

          <div class="mo-row-2 mo-row row w-100 tab-content-item <?php echo $i === 0 ? '' : 'd-n opa-0'  ?>">
            <?php 
              if ($args["img-left"]) {
            ?>
              <div class="mo-col-7 mo-col d-none-s1">
                <div class="b-r-10 pa-30 b-sd w-100 col-img-container">
                  <div class="rt-9-16 w-100">
                    <img class="img-full w-100 object-fit-contain" src="<?php echo $args['items'][$i]['img-src'] ?>" />
                  </div>
                </div>
              </div>
            <?php } ?>

            <div class="mo-col-5 mo-col <?php echo $args["img-left"] ? 'pa-l-100' : 'pa-l-20 pa-r-80'  ?>  d-flex flex-column justify-content-center h-100">
              <img class="icon-top " src="<?php  echo get_template_directory_uri() ?>/images/item-icon.png" />
              <div class="f-b f-18 upper-case c-0-b mr-t-35"><?php echo $args['items'][$i]['title'] ?></div>
              <div class="f-b f-56 mr-t-15"><?php echo $args['items'][$i]['name'] ?></div>
              <div class="f-n f-20 mr-t-30 pa-r-40"><?php echo $args['items'][$i]['desc'] ?></div>
              <a class="" href="<?php echo $args['items'][$i]['url'] ?>"><button class="btn-small mr-t-35 mr-t-15-s1 f-14-s1 mr-t-20">LEARN MORE</button></a>
            </div>

            <?php 
              if (!$args["img-left"]) {
            ?>
              <div class="mo-col-7 mo-col d-none-s1">
                <div class="b-r-10 b-sd w-100 col-img-container pa-30">
                  <div class="rt-9-16 w-100">
                    <img class="img-full w-100 object-fit-contain" src="<?php echo $args['items'][$i]['img-src'] ?>" />
                  </div>
                </div>
              </div>
            <?php } ?>

          </div>

      <?php } ?>
    </div>

    <div class="position-absolute scroll-tab f-b f-25 c-2 justify-content-between d-n d-none-s1" style="<?php echo !$args["img-left"] ? 'right: 0px;' : 'left: 0px;' ?>">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="scroll-tab-item ">
          <p class="pa-l-10 pa-r-10 lh5"><?php echo $args['items'][$i]['tab-title'] ?></p>
        </div>
      <?php } ?>
      <div class="divider-selected"></div>
      <div class="divider-bottom"></div>
    </div>

    <div class="d-n d-block-s1">
      <?php 
        for ($i = 0; $i < count($args['items']); $i++) {
      ?>
        <div class="tab-item-info pa-l-20-s1 pa-r-20-s1 <?php echo $i === 0 ? 'd-n d-block-s1' : 'd-n opa-0'  ?>">
          <img class="icon-top " src="<?php  echo get_template_directory_uri() ?>/images/item-icon.png" />
          <div class="f-b upper-case c-0-b mr-t-35 mr-t-12-s1 f-12-s1 "><?php echo $args['items'][$i]['title'] ?></div>
          <div class="f-b mr-t-15 mr-t-12-s1 f-30-s1"><?php echo $args['items'][$i]['name'] ?></div>
          <div class="f-n mr-t-30 pa-r-40 pa-r-0-s1 mr-t-12-s1 f-14-s1"><?php echo $args['items'][$i]['desc'] ?></div>
          <a class="" href="<?php echo $args['items'][$i]['url'] ?>"><button class="btn-small mr-t-15-s1 f-14-s1 mr-t-20">LEARN MORE</button></a>
        </div>

      <?php } ?>

      <div class="w-100 pa-l-15 mr-t-30">
        <div class="scroll-tab mr-b-10 f-b f-15 c-2 is-scroll"  >
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
        <div class="tab-item-image pa-t-20-s1 pa-b-30-s1 pa-l-20-s1 pa-r-20-s1 <?php echo $i === 0 ? 'd-n d-block-s1' : 'd-n opa-0'  ?>">
          <div class="b-fff b-r-10 b-sd w-100 col-img-container pa-10">
            <div class="rt-9-16 w-100">
              <img class="img-full w-100 object-fit-contain" src="<?php echo $args['items'][$i]['img-src'] ?>" />
            </div>
          </div>
        </div>
        </div>
      <?php } ?>
    </div>

  </div>
</div>