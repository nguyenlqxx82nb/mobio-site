<?php
/**
 * The template for displaying the 404 template in the Mobio theme.
 *
 * @package WordPress
 * @subpackage Mobio
 * @since Mobio 1.0
 */

get_header();
?>

<body class="b-g-b vh-100 h-100-s0 overflow-hidden">


	<?php get_template_part(
    'template-parts/menu-top',null,
    array(
      'classExtend' => ''
    )
  ); ?>
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
    <div class="auto-container">
      <div class="mo-row row mr-t-300 mr-t-150-s4 mr-t-80-s0">
				<div class="mo-col-7  pa-l-80 pa-r-100 mo-col-12-s0 pa-20-s0 ">
					<div class="f-n f-30 f-20-s4 f-20-s0 c-fff"><p>Uh-oh...</p></div>
					<div class="f-b f-90 f-70-s4 mr-t-30 f-44-s0 c-fff"><p>YOU FOUND IT</p></div>
					<div class="f-n f-30 f-20-s4 mr-t-25 c-fff f-16-s0 w-340-s0"><p>Well done! You’ve found a very rare 404 page.<br>Share your discover!</p></div>
					<!-- socials -->
					<div class="d-flex mr-t-40">
						<a href="#" class="social-link mr-r-15">
							<img src="<?php  echo get_template_directory_uri() ?>/images/facebook.png" />
						</a>
						<a href="#" class="social-link mr-r-15">
							<img src="<?php  echo get_template_directory_uri() ?>/images/instagram.png" />
						</a>
						<a href="#" class="social-link">
							<img src="<?php  echo get_template_directory_uri() ?>/images/youtube.png" />
						</a>
					</div>
				</div>
				<div class="mo-col-5 pa-l-50 pa-r-80 pa-20-s0 mr-t-10-s0 mo-col-12-s0">
					<div class="h-100 rt-3-4 position-relative w-100">
						<div class="full-container">
							<img class=" w-100 h-100  object-fit-contain" src="<?php  echo get_template_directory_uri() ?>/images/404/404.png" />
						</div>
					</div>
					
				</div>
			</div>
      
      
    </div>
  </div>
</html>
