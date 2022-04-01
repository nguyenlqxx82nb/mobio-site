<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage MOBIO
 * @since MOBIO 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		
		<script type="text/javascript">
				window.ladi_viewport = function () { 
					var screen_width = window.ladi_screen_width || window.screen.width;
					var width = window.outerWidth > 0 ? window.outerWidth : screen_width; 
					var widthDevice = width;
					var is_desktop = width >= 768; 
					var content = ""; 

					console.log('is_desktop=',is_desktop, ' widthDevice=',widthDevice);
					// if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) 
					// { window.ladi_is_desktop = is_desktop; 
					// } 
					if (!is_desktop) { 
						widthDevice = 375; 
					} 
					else { 
						widthDevice = 960; 
					} 
					
					content = "width=" + widthDevice + ", user-scalable=no"; 
					var scale = 1; 
					if (!is_desktop && widthDevice != screen_width && screen_width > 0) 
					{
						scale = screen_width / widthDevice; 
					} 
					if (scale != 1) { 
						content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;
					} 
					var docViewport = document.getElementById("viewport"); 
					if (!docViewport) { 
						docViewport = document.createElement("meta"); 
						docViewport.setAttribute("id", "viewport"); 
					  docViewport.setAttribute("name", "viewport");
					  document.head.appendChild(docViewport); 
					} 
					
					docViewport.setAttribute("content", content);
					console.log('ladi_viewport content=',content);
			  }; 

				window.ladi_viewport(); 

		</script>
	
		<link rel="profile" href="https://gmpg.org/xfn/11">
	  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.png" type="image/x-icon" media="all">
		<script type="text/javascript">
			var siteUrl = '<?= get_site_url(); ?>';
		</script>
		<?php wp_head(); ?>
		<?php $version = '1.0.5' ?>
		<link rel="stylesheet" id="base-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-base.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="wp-block-library-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/style.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="header-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-header.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="media-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-media-s4.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="media-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-media-s3.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="media-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-media-s2.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="media-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-media-s1.css?v=<?php echo $version ?>" media="all">
		<link rel="stylesheet" id="media-styles-css" href="<?php echo get_site_url() ?>/wp-content/themes/mobio/styles-media.css?v=<?php echo $version ?>" media="all">
		<script src="<?php echo get_site_url() ?>/wp-content/themes/mobio/js/slide.js?v=<?php echo $version ?>" id="slide-js"></script>
		<script src="<?php echo get_site_url() ?>/wp-content/themes/mobio/js/main.js?v=<?php echo $version ?>" id="main-js"></script>
		<script src="<?php echo get_site_url() ?>/wp-content/themes/mobio/js/tenant.js?v=<?php echo $version ?>" id="tenant-js"></script>
		<script src="<?php echo get_site_url() ?>/wp-content/themes/mobio/js/form-submit.js?v=<?php echo $version ?>" id="form-submit-js"></script>
	</head>

	
		

