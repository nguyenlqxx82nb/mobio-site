<div class="mo-row <?php echo $args['classExtend'] ?> mr-t-50-s1">
  <div class="auto-container">
    <div class="mo-column section-connect mr-b-50-s1 pa-t-30-s1 pa-b-10-s1 pa-r-20-s1 pa-l-20-s1 mr-l-20 mr-r-20">

      <div class="mo-row row">
        <div class="mo-col-6 mo-col-12-s1">
          <div class="h-100 d-flex align-items-center">
            <p class="f-b f-40 f-30-s4 f-35-s1 text-center"> <?php echo $args['title'] ? $args['title'] : 'Let’s stay connect!'  ?></p>
          </div>
        </div>

        <div class="mo-col-6 d-none-s1">
          <div class="email-submit input-wrap input-border-left input-wrap-action mw-100">
            <input placeholder="Enter your email address" /> 
            <div class="btn-submit input-action f-b f-20 f-16-s4 c-fff h-100 d-flex justify-content-center align-items-center"><p>Submit</p></div>
          </div>
        </div>

        <?php get_template_part('template-parts/input-submit', null,
            array(
              'classExtend' => 'mr-t-30 w-100',
              'isMobile' => 1
            )) ?>

      </div>

    </div>
  </div>
</div>
