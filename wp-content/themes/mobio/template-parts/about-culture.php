
<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => $args['classExtend'] . ' mtr-t-50-s0 ',
      'title-sm' =>  $args['title-sm'],
      'title' => $args['title'],
    )); ?>

<div class="mo-row mr-t-50">
  <div class="auto-container">
    <div class="mo-row-3 mo-row row mr-l-30 mr-r-30 mr-l-50-s0 mr-r-50-s0 ">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <div class="mo-col-4 mo-col-6-s2 mo-col-12-s1 mr-b-25-s2">
          <div class="mo-column b-g-fff align-items-center mr-l-20 mr-r-20 pa-50 pa-30-s2 mr-l-0-s1 mr-r-0-s1 ">
            <img class=" culture-icon" src="<?php echo $item['icon-src']  ?>" />
            <div class="f-b f-36 f-30-s3 mr-t-30 f-25-s1 <?php echo $item['title-class'] ?>"><p><?php echo $item['title'] ?></p></div>
            <div class="f-n f-20 f-18-s3 mr-t-30 f-20-s1 text-center"><p><?php echo $item['desc'] ?></p></div>
          </div>
        </div>
      <?php } ?>
    </div>  
  </div>
</div>
