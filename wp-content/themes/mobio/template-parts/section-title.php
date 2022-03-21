
<div class="mo-row <?php echo $args['classExtend']; ?> <?php echo $args['classMedia'] ? $args['classMedia'] : 'mr-t-80-s0'; ?> ">
  <div class="auto-container">
    <?php 
      if ($args['title-sm']) {
    ?>
      <div class=" upper-case text-center mr-t-15 f-16-s4 mr-t-15-s0  f-14-s0 <?php echo $args['title-sm-class'] ? $args['title-sm-class'] : 'title-sm'  ?> f-b f-18"><p> <?php echo $args['title-sm'] ?></p></div>
    <?php } ?>
    
    <?php if($args['desc-top']) { ?> 
      <div class="f-n f-18 mr-t-15 mr-t-15-s0 f-12-s0 w-340-s0 text-center mr-auto <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-1000' ?>"><p><?php echo $args['desc-top'] ?></p></div> 
    <?php }?> 
    
    <?php if ($args['title']) { ?>
      <h3 class=" w-950-s4 w-300-s0 mr-auto f-30-s0 <?php echo $args['title-class'] ? $args['title-class']  : '' ?> mr-t-15 text-center"><p><?php echo $args['title'] ?></p></h3>
    <?php } ?>

    <?php if ($args['desc']) { ?>
      <div class="f-n f-18 f-14-s0 w-340-s0 mr-auto-s0 mr-t-25 mr-t-15-s0 text-center mr-auto <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-1000  w-800-s4' ?>"><p><?php echo $args['desc'] ?></p></div>
    <?php } ?>

    <?php if ($args['next-button']) { ?>
      <div class="mr-auto text-center">
        <a href="<?php echo $args['next-url'] ?>">
          <button class="upper-case text-center b-sd-b <?php echo $args['class-button'] ? $args['class-button'] : 'mr-t-35 mr-t-20-s0 '; ?>"><?php echo $args['next-button'] ?></button>
        </a>
      </div>
    <?php }?>
  </div>
</div>
