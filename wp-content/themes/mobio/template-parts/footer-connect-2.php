
<div class="<?php echo $args['classExtend'] ?> mr-t-80-s1">
  <div class="auto-container">
    <div class="mo-column section-connect mr-b-50-s1 pa-t-30-s1 pa-b-10-s1 pa-r-20-s1 pa-l-20-s1 mr-l-20 mr-r-20">
      <div class="f-b f-45 f-36-s4 f-35-s1"><p><?php echo $args['title'] ?></p></div>
        <div class="mo-row row mr-t-20">
          <div class="mo-col-6 mo-col-12-s1">
            <div class="h-100 d-flex align-items-center">
              <div class="f-n f-25 f-18-s4 f-14-s1  w-450 w-350-s4"><p><?php echo $args['desc'] ?></p></div>
            </div>
          </div>

          <div class="mo-col-6 d-none-s1">
            <div class="h-100 d-flex align-items-center"> 
              <?php get_template_part('template-parts/input-submit', null,
                array(
                  'classExtend' => '',
                  'submit' =>'Get Started'
                )) ?>
            </div>
          </div>

          <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-30 w-100',
              'isMobile' => 1,
              'submit' => 'Get Started'
            )) ?>

        </div>
      </div>
  </div>
  
</div>

