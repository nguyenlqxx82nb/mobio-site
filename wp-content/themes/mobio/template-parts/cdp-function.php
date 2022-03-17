
<div class="<?php echo $args['classExtend'] ?> mr-t-30-s1 accord-menu">
  <div class="auto-container">
    <div class="mo-row row">
      <div class="mo-col-7 mo-col-12-s1 mr-b-0 pa-r-40 pa-l-40 pa-l-20-s1 pa-r-20-s1 cdp-image-wrap">
        <?php 
          for($i=0; $i < count($args['items']); $i++) {
        ?>
          <div class="image-item opa-trans <?php echo $i === 0 ? 'd-block opa' : 'd-none opa-0' ?>">
            <div class="rt-3-4 position-relative w-100">
              <img class="img-full object-fit-contain" src=" <?php  echo $args['items'][$i]['img-src'] ?  $args['items'][$i]['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
            </div>
          </div>
        <?php } ?>
        
      </div>
      <div class="mo-col-5 mo-col-12-s1 pa-0-s1">
        <div class="mr-l-40 mr-r-40 mr-t-20 mr-b-40 mr-l-20-s1 mr-r-20-s1">
          <?php 
            for($i=0; $i < count($args['items']); $i++) {
          ?>
            <div class="b-sd b-r-10 b-4-b pa-l-50 pa-r-50 mr-b-10 accord-item pa-r-20-s1 pa-l-20-s1 ">
              <div class="d-flex align-items-center pa-t-30 pa-b-30 pa-t-25-s4 pa-b-25-s4  cursor-pointer accord-item-header pa-t-20-s1 pa-b-20-s1">
                <i class="arrow pa-4 bd-c-fff"></i> <div class="f-b f-20 f-16-s4 f-14-s1 upper-case c-fff mr-l-20"><p><?php echo $args['items'][$i]['title'] ?></p></div>
              </div>
              <div class="accord-item-content">
                <div class="f-n f-18 f-16-s4 f-14-s1 c-fff pa-b-30"><?php echo $args['items'][$i]['desc'] ?></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>