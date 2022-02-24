
<div class="mo-row mr-t-50 mr-t-20-s1"> 
  
  <div class="mr-l-10-s1 mr-r-10-s1 row">
    <?php foreach($args['items'] as $item) { ?>
      <div class="mo-col-3 pa-15 mo-col-6-s1 pa-l-10-s1 pa-r-10-s1 pa-b-0-s1">
        <div class="w-100 col-container-img rt-1-1 b-sd  b-r-15 ">
          <img class="w-100 h-100 b-r-15 object-fit-cover" src="<?php  echo $item['img-src'] ? $item['img-src'] : get_template_directory_uri() . '/images/empty-image.png' ?>" />
        </div>
        <div class="f-n f-w-5 f-25 f-14-s1 text-center pa-t-20 pa-b-20 pa-t-15-s1 pa-b-5-s1">
          <p><?php echo $item['title'] ?></p>
        </div>
      </div>
    <?php } ?>
  </div>
  
</div>  