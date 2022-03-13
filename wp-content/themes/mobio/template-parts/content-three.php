<div class="<?php echo $args['classExtend'] ?>">
  <div class="auto-container">
    <div class="mr-l-60 mr-r-60 mr-l-40-s1 mr-r-40-s1 <?php echo $args['classInnerExtend'] ?>">
        <div class="mo-row mo-row-3 row">
          <?php foreach($args['items'] as $item) { ?>
            <div class="mo-col-4 mr-b-25 mo-col-12-s1">
              <div class="mo-column d-flex flex-column justify-content-between pa-t-40 pa-b-40 pa-l-40 
                pa-r-40 mr-l-25 mr-r-25 mr-l-15-s4 mr-r-15-s4 mr-l-0-s1 mr-r-0-s1 pa-30-s1  <?php echo $item['highlight'] ? 'b-4-b' : '' ?>">
                <div>
                  <?php if ($item['icon-src']) { ?>
                    <img class=" mr-b-30 icon-m-s1 <?php echo $args['icon-class'] ? $args['icon-class'] : 'icon-top-m' ?>" src="<?php echo $item['icon-src'] ?>" />
                  <?php } ?>
                  <p class="f-24-s1 f-20-s4 <?php echo $args['title-class'] ? $args['title-class'] : 'f-b f-25' ?> <?php echo $item['highlight'] ? 'c-fff' : '' ?>"><?php echo $item['name'] ?></p>
                  <div class="f-n f-18 f-16-s4 f-14-s1 mr-t-20 <?php echo $item['highlight'] ? 'c-fff' : '' ?>"><?php echo $item['desc'] ?></div>
                </div>

                <?php if($item['next']) { ?>
                  <a class="<?php echo $item['highlight'] ? 'c-fff' : 'c-1-b' ?>" href="<?php echo $item['next-url'] ?>">
                    <p class="mr-t-35 mr-t-20-s1 f-b f-20 f-16-s4 f-14-s1 <?php echo $item['highlight'] ? 'c-fff' : 'c-1-b' ?>"><?php echo $item['next'] ?></p>
                  </a>
                <?php } ?>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
  </div>
</div>