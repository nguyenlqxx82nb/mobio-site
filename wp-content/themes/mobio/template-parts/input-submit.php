
<div class="email-submit w-100">
  <?php if ($args['isMobile']) { ?>
    <div class="d-n d-block-s1 <?php echo $args['classExtend'] ?>">
      <div class="input-wrap">
        <input placeholder="Enter your email address" /> 
      </div>
      <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This email cannot be blank</div>
      <button class="<?php echo $args['btnClass'] ? $args['btnClass'] : 'btn-submit' ?> w-100 mr-t-15 mr-b-20"> <?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></button>
    </div>
  <?php } ?>

  <?php if (!$args['isMobile']) { ?>
    <div class="input-wrap w-100 input-wrap-action d-none-s1 <?php echo $args['classExtend'] ?>">
      <input placeholder="Enter your email address" /> 
      <div class="<?php echo $args['btnClass'] ? $args['btnClass'] : 'btn-submit' ?> input-action f-b c-fff f-16 d-flex align-items-center justify-content-center h-100 cursor-pointer"><p>
        <?php echo $args['submit'] ?  $args['submit'] : 'Submit' ?></p></div>
    </div>
    <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This email cannot be blank</div>
  <?php } ?>  
</div>

