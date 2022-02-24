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

<?php 
	get_template_part('template-parts/menu-top', null);
?>	

<!-- HEADER -->
<div class="top-header b-fff d-flex justify-content-center align-items-center b-sd d-none-s1">
  <img class="top-header-img" src="<?php echo get_template_directory_uri() ?>/images/celebrate.png" />
  <div class="mr-l-10 f-n f-18"><p>Mobio is celebrating its 5th birthday in June 2022! <a href="#" class="c-4-b f-b">See our meaningful journey >></a> </p></div>
</div>
<div class="header header-home position-relative">
		<div class="header-bg"></div>
		<div class="auto-container auto">
			
			<div class="f-b f-62 c-fff text-center f-40-s1 pa-l-20 pa-r-20"><p >How can we help leverage your business?</p></div>
			<div class="f-n f-20 c-fff text-center mr-t-15 opa-9 f-14-s1 mr-t-5-s1 pa-l-20 pa-r-20 "><p>Mobio is an all-in-one platform for Marketing, Sales and Service team with CDP at the heart.<br>
				Our product was designed to address daily business challenges and create true value to our customers</p>
			</div>

			<div class="header-control mr-t-30 mr-b-55 d-flex justify-content-between w-900 mr-auto mr-t-15-s1 mr-b-15-s1 w-300-s1 justify-content-center-s1 flex-wrap-s1">
				<div class="btn-header-control mr-b-10-s1 mr-r-20-s1" tab="#tab-marketing" >
					<p>for marketing team</p>
				</div>
				<div class="btn-header-control mr-b-10-s1" tab="#tab-sales">
					<p>for sales team</p>
				</div>
				<div class="btn-header-control" tab="#tab-service">
					<p>for service team</p>
				</div>
			</div>

			<div class="header-feature-image mr-b-10-s1 pa-l-0-s1 pa-r-0-s1">
				<img src="<?php echo get_template_directory_uri() ?>/images/home/header.png" />
			</div>

			<div class="mo-row mr-b-10 d-n d-block-s1">
				<div class="mo-row d-flex justify-content-center">
					<a href="<?php echo get_site_url() ?>/contact" class="">
						<button class="btn-small mr-t-15">TALK TO OUR EXPERT</button> 
					</a>
				</div>
			</div>

		</div>
	</div>