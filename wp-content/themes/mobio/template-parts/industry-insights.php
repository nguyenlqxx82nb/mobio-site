<div class="<?php echo $args['classExtend'] ?> mr-t-60-s1">
  <div class="b-g-b">
    <div class="auto-container auto">
      <div class="pa-b-200"> 
        <div class="mr-t-80 mr-t-60-s4 mr-t-35-s1  text-center f-b f-18 f-16-s4 f-12-s1 upper-case c-fff opa-5"><p><?php echo $args['title'] ?></p></div>
        <div class="mr-t-30 mr-t-20-s1 f-b f-56 f-36-s4 f-36-s1 c-fff text-center w-275-s1 mr-auto"><p><?php echo $args['name'] ?></p></div>
        <div class="mr-t-30 mr-t-20-s1 f-n f-20 f-16-s4 f-14-s1 c-fff mr-auto w-950 text-center w-340-s1 mr-auto"><p><?php echo $args['desc'] ?></p></div>
      </div>
    </div>
  </div>
  
  <div class="auto-container insight-col-container" style="margin-top: -170px">
    <div class="mr-l-30-s1 mr-r-30-s1 b-fff b-sd b-r-10 pa-50 pa-40-s4 pa-t-15-s1 pa-b-15-s1 pa-l-5-s1 pa-r-5-s1 auto mr-b-40">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <div class="<?php echo $args['colClass'] ?  $args['colClass'] : 'mo-col-2 pa-l-25 pa-r-25' ?> mo-col-12-s1 mr-b-20-s1 mr-t-20-s1 ">
          <img class="icon-top-m" src="<?php echo $item['icon'] ?>" />
          <p class="f-b f-25 f-18-s4 upper-case mr-t-18 f-20-s1"><?php echo $item['title'] ?></p>
          <p class="f-n f-18 f-16-s4 f-14-s1 mr-t-10"><?php echo $item['desc'] ?></p>
        </div>
      <?php } ?>
      
    </div>
  </div>

  <div class="text-center mr-t-50 mr-t-0-s1">
    <a href="<?php echo $args['next-url'] ?>">
      <button class="">READ MORE</button>
    </a>
  </div>

</div>