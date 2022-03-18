<div class="<?php echo $args['classExtend']; ?> top-tenant mr-t-80-s1">
  <div class="auto-container top-tenant-wrap">
    <div class="f-b f-25 f-20-s4 text-center f-14-s1 upper-case w-340-s1 mr-auto lh3"><p> <?php echo $args['title']; ?></p></div>
    <div class="d-flex justify-content-center mr-t-15 mr-l-45-s1 mr-r-45-s1 flex-wrap-s1">
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