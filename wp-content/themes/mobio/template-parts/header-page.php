
<body class="">
<!-- mobile header -->
<div class="d-n d-block-s2">
  <?php get_template_part(
    'template-parts/menu-mobile',
    null,
    array( 
      'fixed' => '1'
    )
  ); ?>
</div>

<?php get_template_part(
    'template-parts/menu-top',null,
    array(
      'classExtend' => ''
    )
  ); ?>


<div class="header header-page d-flex align-items-center">
  <div class="header-bg header-bg-page <?php echo $args['bg-class'] ? $args['bg-class'] : '' ?>"></div>  
  <div class="auto-container w-100 d-none-s2">
    
    <div class="mo-row row pa-l-40 pa-r-40 pa-l-0-s3 pa-r-0-s3">
      
      <div class="<?php echo $args['class-col-left'] ? $args['class-col-left'] : 'mo-col-6' ?>  mo-col-12-s2 pa-0-s0 d-flex flex-column justify-content-center">
        <?php if ($args['title']) { ?>
        <div class="f-b f-16 f-12-s0 c-fff opa-5 upper-case">
          <p><?php echo $args['title'] ?></p>
        </div>
        <?php } ?>
        <h2 class="<?php echo $args['class-name'] ? $args['class-name'] : 'f-b f-40 mr-t-20' ?> f-30-s3  mr-t-10-s0 f-32-s0 c-fff"><?php echo $args['name'] ?></h2>
        <div class="c-fff mr-t-10 f-n f-16 f-14-s0 opa-8  <?php echo $args['desc-class'] ? $args['desc-class'] : '' ?> 
          <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-600 w-450-s4' ?>">
          <?php
            if ($args['desc']) {
          ?>  
          <p><?php echo $args['desc'] ?></p>
          <?php } ?>    
          <?php
            if ($args['desc-html']) {
          ?>  
          <p><?php echo $args['desc-html'] ?></p>
          <?php } ?>   
        </div>
        <?php 
          if (!$args['ignoreContact']) {
        ?>
          <div class="email-submit">
            <div class="input-wrap mr-t-20 w-500 w-400-s4 mr-t-30-s0">
              <input class="" placeholder="Enter your email address" />
            </div>
            <button class="btn-submit btn-small mr-t-10 upper-case">get started</button>
          </div>
        <?php } ?>
      </div>
      
      <div class="<?php echo $args['class-col-right'] ? $args['class-col-right']: 'mo-col-6' ?> mo-col-12-s2 mr-t-20-s2">
        <?php 
          if ($args['video-id']) {
        ?>
          <div class="h-100 w-100 d-flex flex-column justify-content-center">
            <div class="rt-9-16 position-relative w-100"> 
              <iframe class="full" src="https://www.youtube.com/embed/<?php echo $args['video-id'] ?>" height="315" width="560" allowfullscreen="" frameborder="0"> </iframe>
            </div>
          </div>
        <?php } ?>
        <?php 
          if ($args['img-src']) {
        ?>
          <div class="h-100 w-100 pa-l-40 pa-r-0">
            <div class="rt-3-4 position-relative w-100"> 
              <div class="full-container">
                <img class="w-100 h-100 object-fit-contain" src="<?php echo $args['img-src'] ? $args['img-src']: get_template_directory_uri().'/images/empty-image.png'; ; ?>" />
              </div>
            </div>
          </div>
          <?php } ?>
          
      </div>
    </div>

  </div>

  <div class="auto-container w-100 h-100 d-block-s2 d-n">
    <div class="pa-t-100-s2 pa-t-50-s2">
      <div class="d-flex flex-column align-items-center">
        <?php if ($args['title']) { ?>
          <div class="f-b f-16 f-12-s0 c-fff opa-5 upper-case text-center">
            <p><?php echo $args['title'] ?></p>
          </div>

        <?php } ?>

        <h2 class="<?php echo $args['class-name'] ? $args['class-name'] : 'f-b f-40 mr-t-20' ?> f-30-s3  mr-t-10-s0 f-32-s0 c-fff text-center"><?php echo $args['name'] ?></h2>
        <div class="c-fff mr-t-10 f-n f-16 f-14-s0 opa-8 text-center w-600-s2 w-100-s2">
          <?php
            if ($args['desc']) {
          ?>  
          <p class="text-center"><?php echo $args['desc'] ?></p>
          <?php } ?>    
          <?php
            if ($args['desc-html']) {
          ?>  
          <p><?php echo $args['desc-html'] ?></p>
          <?php } ?>   
        </div>
        <?php 
          if (!$args['ignoreContact']) {
        ?>
          <div class="email-submit">
            <div class="input-wrap mr-t-20 w-450-s2 w-100-s2">
              <input class=" w-500 " placeholder="Enter your email address" />
            </div>
            <button class="btn-submit btn-small mr-t-10 upper-case w-450-s2  w-100-s2">get started</button>
          </div>
        <?php } ?>
        <?php
          if ($args['img-src']) {
        ?>  
          <div class="w-500 mr-t-30">
            <img class="w-100 h-100 object-fit-contain" src="<?php echo $args['img-src'] ? $args['img-src']: get_template_directory_uri().'/images/empty-image.png'; ?>" />
          </div>
        <?php } ?>
        
      </div>
      
    </div>
  </div>

</div>