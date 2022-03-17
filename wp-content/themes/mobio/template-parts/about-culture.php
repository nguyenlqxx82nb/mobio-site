
<?php get_template_part('template-parts/section-title',null,
    array( 
      'classExtend' => $args['classExtend'] . ' mtr-t-50-s1 ',
      'title-sm' =>  $args['title-sm'],
      'title' => $args['title'],
    )); ?>

<div class="mo-row mr-t-50">
  <div class="auto-container">
    <div class="mo-row-3 mo-row row mr-l-30 mr-r-30 mr-l-50-s1 mr-r-50-s1 ">
      <?php 
        foreach($args['items'] as $item) {
      ?>
        <div class="mo-col-4 mo-col-12-s1 mr-b-25-s1">
          <div class="mo-column b-g-b align-items-center mr-l-20 mr-r-20 pa-50 pa-30-s1 mr-l-0-s1 mr-r-0-s1 ">
            <div class="b-fff culture-circ"></div>
            <div class="f-b f-48 f-36-s4 mr-t-30 f-25-s1 c-fff"><p><?php echo $item['title'] ?></p></div>
            <div class="f-n f-30 f-20-s4 mr-t-30 f-20-s1 c-fff text-center"><p><?php echo $item['desc'] ?></p></div>
          </div>
        </div>
      <?php } ?>
      <!-- <div class="mo-col-4 mo-col">
        <div class="mo-column b-g-b align-items-center mr-l-20 mr-r-20 pa-50">
          <div class="b-fff culture-circ"></div>
          <div class="f-b f-48 mr-t-30 c-fff"><p>Responsible</p></div>
          <div class="f-n f-30 mr-t-30 c-fff text-center"><p>You reap what <br> you sow</p></div>
        </div>
      </div>
      <div class="mo-col-4 mo-col">
        <div class="mo-column b-g-b align-items-center mr-l-20 mr-r-20 pa-50">
          <div class="b-fff culture-circ"></div>
          <div class="f-b f-48 mr-t-30 c-fff"><p>Respect</p></div>
          <div class="f-n f-30 mr-t-30 c-fff text-center"><p>Colleagues <br>are family</p></div>
        </div>
      </div>
      <div class="mo-col-4 mo-col">
        <div class="mo-column b-g-b align-items-center mr-l-20 mr-r-20 pa-50">
          <div class="b-fff culture-circ"></div>
          <div class="f-b f-48 mr-t-30 c-fff"><p>Determined</p></div>
          <div class="f-n f-30 mr-t-30 c-fff text-center"><p>Dare to dream <br>Dare to win</p></div>
        </div>
      </div> -->
    </div>  
  </div>
</div>
