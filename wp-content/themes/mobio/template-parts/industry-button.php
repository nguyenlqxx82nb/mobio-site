
<div class="<?php echo $args["classExtend"] ?>">
  <div class="auto-container">
    <div class="d-flex justify-content-between tab-button d-block-s0 mr-l-30-s0">
      <?php foreach($args['items'] as $item) { ?>
        <a href="<?php echo $item['url']; ?>"><button class="upper-case f-b f-16 pa-t-20-s0 pa-b-20-s0 pa-l-50-s0 pa-r-50-s0 mr-b-20-s0 "><?php echo $item['name']; ?></button></a>
      <?php } ?>
    </div>
  </div>
</div>