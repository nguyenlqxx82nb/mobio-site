
<div class="<?php echo $args["classExtend"] ?>">
  <div class="auto-container">
    <div class="d-flex justify-content-between tab-button d-block-s1 mr-l-30-s1">
      <?php foreach($args['items'] as $item) { ?>
        <a href="<?php echo $item['url']; ?>"><button class="upper-case f-b f-20 pa-t-20-s1 pa-b-20-s1 pa-l-50-s1 pa-r-50-s1 mr-b-20-s1 "><?php echo $item['name']; ?></button></a>
      <?php } ?>
    </div>
  </div>
</div>