<div class="<?php echo $args['classExtend']; ?> mr-t-80-s1">
  <div class="auto-container">
    <div class="f-b f-25 text-center f-14-s1 upper-case w-340-s1 mr-auto lh3"><p> <?php echo $args['title']; ?></p></div>
    <div class="d-flex justify-content-center mr-t-15 mr-l-45-s1 mr-r-45-s1 flex-wrap-s1">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <img class="top-tenant-img mr-l-15 mr-r-15 mr-t-20" src="<?php echo $item['img-src'] ?>" />
      <?php } ?>
    </div>
  </div>
</div>