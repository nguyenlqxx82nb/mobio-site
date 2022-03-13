
<?php if ($args['isMobile']) { ?>
  <div class="email-submit d-n d-block-s1 <?php echo $args['classExtend'] ?>">
    <div class="input-wrap">
      <input placeholder="Enter your email address" /> 
    </div>
    <button class="w-100 mr-t-15 mr-b-20"> <?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></button>
  </div>
<?php } ?>

<?php if (!$args['isMobile']) { ?>
  <div class="email-submit input-wrap input-wrap-action d-none-s1 <?php echo $args['classExtend'] ?>">
    <input placeholder="Enter your email address" /> 
    <div class="btn-submit input-action f-b f-20 c-fff f-16-s4 d-flex align-items-center justify-content-center h-100 cursor-pointer"><p>
      <?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></p></div>
  </div>
<?php } ?>  
