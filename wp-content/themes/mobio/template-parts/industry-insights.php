<div class="<?php echo $args['classExtend'] ?> mr-t-60-s0">
  <div class="b-g-b">
    <div class="auto-container auto">
      <div class="pa-b-200"> 
        <div class="mr-t-80 mr-t-60-s4 mr-t-35-s0  text-center f-b f-18 f-16-s4 f-12-s0 upper-case c-fff opa-5"><p><?php echo $args['title'] ?></p></div>
        <div class="mr-t-30 mr-t-20-s0 f-b f-40 f-36-s4 f-36-s0 c-fff text-center w-275-s0 mr-auto"><p><?php echo $args['name'] ?></p></div>
        <div class="mr-t-30 mr-t-20-s0 f-n f-20 f-16-s4 f-14-s0 c-fff mr-auto w-950 text-center w-340-s0 mr-auto"><p><?php echo $args['desc'] ?></p></div>
      </div>
    </div>
  </div>
  
  <div class="auto-container insight-col-container" style="margin-top: -170px">
    <div class="mr-l-30-s0 mr-r-30-s0 b-fff b-sd b-r-10 pa-50 pa-40-s4 pa-t-15-s0 pa-b-15-s0 pa-l-5-s0 pa-r-5-s0 auto mr-b-40">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <div class="<?php echo $args['colClass'] ?  $args['colClass'] : 'mo-col-3 pa-l-30 pa-r-30' ?> mo-col-12-s0 mr-b-20-s0 mr-t-20-s0 ">
          <img class="icon-top-m" src="<?php echo $item['icon'] ?>" />
          <p class="f-b f-25 f-18-s4 upper-case mr-t-18 f-20-s0"><?php echo $item['title'] ?></p>
          <p class="f-n f-18 f-16-s4 f-14-s0 mr-t-10"><?php echo $item['desc'] ?></p>
        </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="text-center mr-t-50 mr-t-0-s0">
    <a href="<?php echo $args['next-url'] ?>">
      <button class="">READ MORE</button>
    </a>
  </div>

</div>