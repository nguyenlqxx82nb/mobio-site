
<body class="">
<!-- mobile header -->
<div class="d-n d-block-s0">
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

<div class="header header-page">
  <div class="header-bg header-bg-page <?php echo $args['bg-class'] ? $args['bg-class'] : '' ?>"></div>  
  <div class="auto-container">
    
    <div class="mo-row row pa-l-40 pa-r-40 pa-l-20-s0 pa-r-20-s0 <?php echo $args['top'] ? $args['top'] : 'mr-t-95 mr-t-70 mr-t-35-s0'?>">
      
      <div class="<?php echo $args['class-col-left'] ? $args['class-col-left'] : 'mo-col-6' ?>  mo-col-12-s0 pa-0-s0">
        <?php if ($args['title']) { ?>
        <div class="f-b f-18 f-16-s4 f-12-s0 c-fff opa-5 upper-case">
          <p><?php echo $args['title'] ?></p>
        </div>
        <?php } ?>
        <div class="<?php echo $args['name-class'] ? $args['name-class'] : 'f-b f-60 mr-t-25' ?> f-40-s4  mr-t-10-s0 f-32-s0 c-fff"><p><?php echo $args['name'] ?></p></div>
        <div class="c-fff mr-t-20 f-n f-16-s4 f-14-s0 opa-8 <?php echo $args['desc-class'] ? $args['desc-class'] : 'f-24' ?> 
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
            <div class="input-wrap mr-t-30 w-500 w-400-s4 mr-t-30-s0">
              <input class="" placeholder="Enter your email address" />
            </div>
            <button class="btn-submit btn-small mr-t-20 upper-case">get started</button>
          </div>
        <?php } ?>
      </div>
      
      <div class="<?php echo $args['class-col-right'] ? $args['class-col-right']: 'mo-col-6' ?> mo-col-12-s0 mr-t-15-s0">
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
          <div class="h-100 w-100 d-flex flex-column justify-content-center pa-l-40 pa-r-0">
            <div class="rt-3-4 position-relative w-100"> 
              <div class="full-container">
                <img class="w-100 h-100 object-fit-contain" src="<?php echo $args['img-src']; ?>" />
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>