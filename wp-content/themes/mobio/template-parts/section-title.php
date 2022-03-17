
<div class="mo-row <?php echo $args['classExtend']; ?> <?php echo $args['classMedia'] ? $args['classMedia'] : 'mr-t-80-s1'; ?> ">
  <div class="auto-container">
    <?php 
      if ($args['title-sm']) {
    ?>
      <div class=" upper-case text-center mr-t-15 f-16-s4 mr-t-15-s1  f-14-s1 <?php echo $args['title-sm-class'] ? $args['title-sm-class'] : 'title-sm'  ?> f-b f-18"><p> <?php echo $args['title-sm'] ?></p></div>
    <?php } ?>
    
    <?php if($args['desc-top']) { ?> 
      <div class="f-n f-24 f-16-s4 mr-t-15 mr-t-15-s1 f-12-s1 w-340-s1 text-center mr-auto <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-1000' ?>"><p><?php echo $args['desc-top'] ?></p></div> 
    <?php }?> 
    
    <?php if ($args['title']) { ?>
      <div class=" w-950-s4 w-300-s1 f-36-s4 mr-auto f-30-s1 <?php echo $args['title-class'] ? $args['title-class']  : 'f-b f-48' ?> mr-t-15 text-center"><p><?php echo $args['title'] ?></p></div>
    <?php } ?>

    <?php if ($args['desc']) { ?>
      <div class="f-n f-20 f-16-s4 f-14-s1 w-340-s1 mr-auto-s1 mr-t-25 mr-t-15-s1 text-center mr-auto <?php echo $args['desc-w'] ? $args['desc-w'] : 'w-1000  w-800-s4' ?>"><p><?php echo $args['desc'] ?></p></div>
    <?php } ?>

    <?php if ($args['next-button']) { ?>
      <div class="mr-auto text-center">
        <a href="<?php echo $args['next-url'] ?>">
          <button class="upper-case text-center b-sd-b <?php echo $args['class-button'] ? $args['class-button'] : 'mr-t-35 mr-t-20-s1 '; ?>"><?php echo $args['next-button'] ?></button>
        </a>
      </div>
    <?php }?>
  </div>
</div>
