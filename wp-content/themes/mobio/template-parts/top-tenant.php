<div class="<?php echo $args['classExtend']; ?> top-tenant mr-t-80-s0">
  <div class="auto-container top-tenant-wrap">
    <h5 class="text-center upper-case w-340-s0 mr-auto"><?php echo $args['title']; ?></h5>
    <div class="d-flex justify-content-center mr-t-25 mr-l-45-s0 mr-r-45-s0 flex-wrap-s0">
      <?php 
        foreach($args['items'] as $items) {
      ?>
        <div class="tenant-top-item mr-l-15 mr-r-15 mr-t-20 position-relative">
          <?php 
            for($i=0 ; $i < count($items); $i++) {
          ?>
            <img class="top-tenant-img w-100 h-100 object-fit-cover position-absolute <?php echo $i === 0 ? 'd-block' : 'd-none' ?>" 
              src="<?php echo $items[$i] ?>" 
              style="transform: translateY(0px);"  />
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
</div>