
<div class="<?php echo $args['classExtend'] ?> d-none-s0">
  <div class="auto-container">
    <div class="d-flex justify-content-center flex-wrap-s0">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <a href="<?php echo  $item['url'] ?>"><button class="upper-case mr-l-20 pa-t-20 pa-b-20 mr-l-30-s0 mr-r-30-s0"><?php echo $item['name'] ?></button></a>
      <?php } ?>
    </div>
    
  </div>
</div>