
<body class="">
<!-- mobile header -->
<div class="d-n d-block-s1">
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
      'classExtend' => 'menu-top-fixed'
    )
  ); ?>

<div class="header header-page">
  <div class="header-bg header-bg-page"></div>  
  <div class="auto-container">
    
    <div class=" mo-row row pa-l-40 pa-r-40 pa-l-20-s1 pa-r-20-s1 <?php echo $args['top'] ? $args['top'] : 'mr-t-50 mr-t-35-s1'?>">
      <div class="<?php echo $args['class-col-left'] ? $args['class-col-left'] : 'mo-col-7' ?>  mo-col-12-s1 pa-0-s1">
        <?php if ($args['title']) { ?>
        <div class="mr-t-55 mr-t-0-s1 f-b f-18 f-16-s4 f-12-s1 c-fff opa-5 upper-case">
          <p><?php echo $args['title'] ?></p>
        </div>
        <?php } ?>
        <div class="<?php echo $args['name-class'] ? $args['name-class'] : 'f-b f-60 mr-t-25' ?> f-36-s4  mr-t-10-s1 f-32-s1 c-fff"><p><?php echo $args['name'] ?></p></div>
        <div class="w-600 c-fff mr-t-20 f-n f-16-s4 f-14-s1 opa-8 <?php echo $args['desc-class'] ? $args['desc-class'] : 'f-24' ?> w-400-s4"><p><?php echo $args['desc'] ?></p></div>
        <?php 
          if (!$args['ignoreContact']) {
        ?>
          <div class="input-wrap mr-t-50 w-450 mr-t-30-s1">
            <input class="" placeholder="Enter your email address" />
          </div>
          <a href="<?php echo get_site_url(). '/contact' ?>">
            <button class="btn-small mr-t-20 upper-case">get started</button>
          </a>
        <?php } ?>
      </div>
      <div class="<?php echo $args['class-col-right'] ? $args['class-col-right']: 'mo-col-5' ?> mo-col-12-s1 mr-t-15-s1">
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
          <div class="h-100 w-100 d-flex flex-column justify-content-center">
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