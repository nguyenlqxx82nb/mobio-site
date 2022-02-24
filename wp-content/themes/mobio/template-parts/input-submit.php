

<?php if ($args['isMobile']) { ?>
  <div class="d-n d-block-s1 <?php echo $args['classExtend'] ?>">
    <div class="input-wrap">
      <input placeholder="Enter your email address" /> 
    </div>
    <button class="w-100 mr-t-15 mr-b-20"> <?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></button>
  </div>
<?php } ?>

<?php if (!$args['isMobile']) { ?>
  <div class="input-wrap input-wrap-action d-none-s1 <?php echo $args['classExtend'] ?>">
    <input placeholder="Enter your email address" /> 
    <div class="input-action f-b f-20 c-fff"><p><?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></p></div>
  </div>
<?php } ?>