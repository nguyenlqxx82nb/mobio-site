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


<!-- HEADER -->
<!--<div class="top-header b-fff d-flex justify-content-center align-items-center b-sd d-none-s0">
  <img class="top-header-img" src="<?php echo get_template_directory_uri() ?>/images/celebrate.png" />
  <div class="mr-l-10 f-n f-18"><p>Mobio is celebrating its 5th birthday in June 2022! <a href="#" class="c-4-b f-b">See our meaningful journey >></a> </p></div>
</div>-->
<div class="header header-home position-relative">
		<div class="header-bg"></div>
		<?php 
			get_template_part('template-parts/menu-top', null, array('classExtend'=> ''));
		?>
		<div class="auto-container auto pa-t-50 pa-t-20-s1">
			<h2 class="c-fff text-center pa-l-0 pa-r-0 f-30-s2 f-25-s1">How can we help leverage your business?</h2>
			<div class="f-n f-18 f-16-s3 f-14-s1 c-fff text-center mr-t-20 opa-7 f-14-s0 mr-t-5-s0 pa-l-0 pa-r-0 "><p>Mobio is an all-in-one platform for Marketing, Sales and Service team with CDP at the heart.<br>
				Our product was designed to address daily business challenges and create true value to our customers</p>
			</div>

			<div class="header-control mr-t-30 mr-b-35 mr-t-20-s2 mr-b-20-s2 d-flex justify-content-between w-900 w-800-s4 mr-auto mr-t-15-s0 mr-b-15-s0 w-300-s0 justify-content-center-s0 flex-wrap-s0">
				<div class="btn-header-control mr-b-10-s0 mr-r-20-s0 h6" tab="#tab-marketing" >
					<p>for marketing team</p>
				</div>
				<div class="btn-header-control mr-b-10-s0 h6" tab="#tab-sales">
					<p>for sales team</p>
				</div>
				<div class="btn-header-control h6" tab="#tab-service">
					<p>for service team</p>
				</div>
			</div>

			<div class="header-feature-image mr-b-10-s0 pa-l-0-s0 pa-r-0-s0">
				<img src="<?php echo get_template_directory_uri() ?>/images/home/mobio-cdp&cem-platform-header.png" />
			</div>

			<div class="mo-row mr-b-10 d-n d-block-s0">
				<div class="mo-row d-flex justify-content-center">
					<a href="<?php echo get_site_url() ?>/contact" class="">
						<button class="btn-small mr-t-15">REQUEST A DEMO</button> 
					</a>
				</div>
			</div>

		</div>
	</div>