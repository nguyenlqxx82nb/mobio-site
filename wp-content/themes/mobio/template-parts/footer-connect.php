<div class="mo-row <?php echo $args['classExtend'] ?> mr-t-50-s0">
  <div class="auto-container">
    <div class="mo-column section-connect mr-b-50-s1 pa-t-30-s1 pa-b-10-s1 pa-r-20-s1 pa-l-20-s1 mr-l-20 mr-r-20">

      <div class="mo-row row">
        <div class="mo-col-6 mo-col-12-s2">
          <div class="h-100 d-flex align-items-center pa-l-30 pa-r-30">
            <p class="f-b f-30 f-25-s3 f-35-s1 text-center"> <?php echo $args['title'] ? $args['title'] : 'Let’s stay connect!'  ?></p>
          </div>
        </div>

        <div class="mo-col-6 d-none-s1 mo-col-12-s2 mr-t-25-s2">
          <div class="email-submit w-100">
            <div class=" w-100 input-wrap input-border-left input-wrap-action mw-100">
              <input placeholder="Enter your email address" /> 
              <div class="btn-subscript input-action f-b f-16 c-fff h-100 d-flex justify-content-center align-items-center upper-case"><p>subscribe</p></div>
            </div>
            <div class="c-red mr-t-5 f-12 mr-l-20 msg-error d-none">This email cannot be blank</div>
          </div>
        </div>

        <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-30 w-100',
              'isMobile' => 1,
              'btnClass' => 'btn-subscript',
              'submit' => 'subscribe'
            )) ?>

      </div>

    </div>
  </div>
</div>
