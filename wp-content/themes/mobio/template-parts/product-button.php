
<div class="<?php echo $args['classExtend'] ?> d-none-s1">
  <div class="auto-container">
    <div class="d-flex justify-content-center flex-wrap-s1">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <a href="<?php echo  $item['url'] ?>"><button class="upper-case mr-l-20 pa-t-20 pa-b-20 mr-l-30-s1 mr-r-30-s1"><?php echo $item['name'] ?></button></a>
      <?php } ?>
    </div>
    
  </div>
</div>