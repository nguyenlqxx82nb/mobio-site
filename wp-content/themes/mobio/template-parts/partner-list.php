<div class="<?php echo $args["classExtend"] ?>">
  <div class="auto-container">
    <div class="f-b f-25 f-18-s1 mr-auto-s1 upper-case pa-l-50 pa-l-20-s1"><p><?php echo $args["title"] ?></p></div>
    <div class="mo-row mo-row-3 row mr-l-40 mr-r-40 mr-t-35 mr-l-20-s1 mr-r-20-s1 mr-t-20-s1">

      <?php foreach($args["partners"] as $partner) {?>
        <div class="mo-col-4 pa-l-10 pa-r-10 pa-0-s1 mr-b-20  mo-col-12-s1 ">
          <div class="w-100 h-100 br-g pa-l-45 pa-r-45 pa-t-35 pa-b-30 pa-20-s1 d-flex flex-column justify-content-between f-16 f-14-s1">
            <div>
              <img class="partner-logo" src="<?php echo get_template_directory_uri() . $partner['logo'] ?>" />
              <div class="f-b f-25 f-20-s1 mr-t-15 upper-case"><p><?php echo $partner['name'] ?></p></div>
              <div class="f-n mr-t-15 c-4"><?php echo $partner['type'] ?></div>
              <div class="f-n f-18 f-14-s1 mr-t-20"><p><?php echo $partner['desc'] ?></p></div>
            </div>

            <div>
              <?php if ($partner['industry']) { ?>
                <div class="f-b  mr-t-30-s1 mr-t-45"><p>INDUSTRY</p></div>
                <div class="f-n mr-t-10"><p><?php echo $partner['industry-desc'] ?></p></div>
              <?php } ?>

              <div class="f-b mr-t-20-s1 mr-t-35"><p>CONTACT</p></div>
              <a class="c-1-b t-d-u mr-t-15" target="_blank" href="<?php echo $partner['url'] ?>"><p><?php echo $partner['address'] ?></p></a>
            </div>
            
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>