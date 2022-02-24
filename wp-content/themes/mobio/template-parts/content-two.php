<div class="<?php echo $args['classExtend'] ?>">
  <div class="auto-container">
    <div class="mr-auto w-m-50 w-m-100-s1 <?php echo $args['classInnerExtend'] ?>">
        <div class="mo-row mo-row-2 row">
          <?php foreach($args['items'] as $item) { ?>
            <div class="mo-col-6 mr-t-25 mr-b-25 mo-col-12-s1  mr-t-10-s1 mr-b-10-s1">
              <div class="mo-column pa-40 mr-l-25 mr-r-25 pa-20-s1 mr-l-40-s1 mr-r-40-s1 <?php echo $item['highlight'] ? 'b-4-b' : '' ?>">
                <?php if ($item['icon-src']) { ?>
                  <img class="icon-top-m mr-b-30" src="<?php  echo get_template_directory_uri() . $item['icon-src'] ?>" />
                <?php } ?>
                <p class="f-20-s1 <?php echo $args['title-class'] ? $args['title-class'] : 'f-b f-25' ?> <?php echo $item['highlight'] ? 'c-fff' : '' ?>"><?php echo $item['name'] ?></p>
                <div class="f-n f-18 f-14-s1 mr-t-20 w-300 <?php echo $item['highlight'] ? 'c-fff' : '' ?>"><?php echo $item['desc'] ?></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
  </div>
</div>