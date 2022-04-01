
<div class="<?php echo $args['classExtend'] ?> mr-t-80-s0">
  <div class="auto-container">
    <div class="mo-column section-connect mr-b-50-s0 pa-t-30-s0 pa-b-10-s0 pa-r-20-s0 pa-l-20-s0 mr-l-20 mr-r-20">
      <div class="f-b f-36 f-35-s1"><p><?php echo $args['title'] ?></p></div>
        <div class="mo-row row mr-t-20">
          <div class="mo-col-6 mo-col-12-s2">
            <div class="h-100 d-flex align-items-center">
              <div class="f-n f-18 f-14-s0"><p><?php echo $args['desc'] ?></p></div>
            </div>
          </div>

          <div class="mo-col-6 mo-col-12-s2 d-none-s1 mr-t-20-s2 pa-l-30 pa-l-0-s2">
            <div class="h-100 d-flex align-items-center"> 
              <?php get_template_part('template-parts/input-submit', null,
                array(
                  'classExtend' => '',
                  'submit' =>'subscribe',
                  'btnClass' => 'btn-subscript',
                )) ?>
            </div>
          </div>

          <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-30 w-100',
              'isMobile' => 1,
              'submit' => 'subscribe',
              'btnClass' => 'btn-subscript',
            )) ?>

        </div>
      </div>
  </div>
  
</div>

