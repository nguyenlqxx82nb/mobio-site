
<div class="about-slides <?php echo $args['classExtend'] ?>">

  <div class="auto-container">
    <div class="slides-wrapper d-flex justify-content-between align-items-center">
    
      <div class="prev-slide b-4-b cursor-pointer mr-r-20 mr-r-5-s1 mr-l-15-s1 ">
        <div class="triangle-right"></div>
      </div>

      <div class="position-relative overflow-hidden flex-grow-1">
        <div class="d-flex slides position-relative">
          <?php 
            foreach($args['img-list'] as $img) {
          ?>
            <div class="slide-item position-relative pa-l-10 pa-r-10  pa-l-5-s1 pa-r-5-s1  flex-30 flex-100-s1">
              <div class="rt-9-16 b-r-10">
                <img class="b-r-10 img-full" src="<?php echo $img  ?>" />
              </div>
            </div>
          <?php } ?>

        </div>
      </div>

      <div class="next-slide b-4-b cursor-pointer mr-l-20 mr-r-15-s1 mr-l-5-s1">
        <div class="triangle-left"></div>
      </div>

    </div>
  </div>
  
</div>