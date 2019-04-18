<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">
<meta charset="<?php bloginfo('charset'); ?>">

<!-- Always force latest IE rendering engine (even in intranet) -->
<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

<?php
		if (is_search())
			echo '<meta name="robots" content="noindex, nofollow" />';
	?>
<title>
<?php wp_title( '|', true, 'right' ); ?>
</title>
<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

<!--Google will often use this as its description of your page/site. Make it good.-->
<meta name="description" content="<?php bloginfo('description'); ?>" />
<?php
		if (true == of_get_option('meta_author'))
			echo '<meta name="author" content="' . of_get_option("meta_author") . '" />';

		if (true == of_get_option('meta_google'))
			echo '<meta name="google-site-verification" content="' . of_get_option("meta_google") . '" />';
	?>
<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
<?php
		/*
			j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
			 - device-width : Occupy full width of the screen in its current orientation
			 - initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
			 - maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
			 - minimal-ui = iOS devices have minimal browser ui by default
		*/
		if (true == of_get_option('meta_viewport'))
			echo '<meta name="viewport" content="' . of_get_option("meta_viewport") . ' minimal-ui" />';


		/*
			These are for traditional favicons and Android home screens.
			 - sizes: 1024x1024
			 - transparency is OK
			 - see wikipedia for info on browser support: http://mky.be/favicon/
			 - See Google Developer docs for Android options. https://developers.google.com/chrome/mobile/docs/installtohomescreen
		*/
		if (true == of_get_option('head_favicon')) {
			echo '<meta name=”mobile-web-app-capable” content=”yes”>';
			echo '<link rel="shortcut icon" sizes=”1024x1024” href="' . of_get_option("head_favicon") . '" />';
		}


		/*
			The is the icon for iOS Web Clip.
			 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
			 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
			 - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
		*/
		if (true == of_get_option('head_apple_touch_icon'))
			echo '<link rel="apple-touch-icon" href="' . of_get_option("head_apple_touch_icon") . '">';
	?>

<!-- concatenate and minify for production -->
<!-- Lea Verou's Prefix Free, lets you use only un-prefixed properties in your CSS files -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/prefixfree.min.js"></script>

<!-- This is an un-minified, complete version of Modernizr.
		 Before you move to production, you should generate a custom build that only has the detects you need. -->
<script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.8.0.dev.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<!-- Sticky Top Nav -->
<?php /*?><script>
	$(window).load(function(){
		$(".navbar").sticky({ topSpacing: 0 });
	});
</script>
<?php */?><!-- Application-specific meta tags -->
<?php
		// Windows 8
		if (true == of_get_option('meta_app_win_name')) {
			echo '<meta name="application-name" content="' . of_get_option("meta_app_win_name") . '" /> ';
			echo '<meta name="msapplication-TileColor" content="' . of_get_option("meta_app_win_color") . '" /> ';
			echo '<meta name="msapplication-TileImage" content="' . of_get_option("meta_app_win_image") . '" />';
		}

		// Twitter
		if (true == of_get_option('meta_app_twt_card')) {
			echo '<meta name="twitter:card" content="' . of_get_option("meta_app_twt_card") . '" />';
			echo '<meta name="twitter:site" content="' . of_get_option("meta_app_twt_site") . '" />';
			echo '<meta name="twitter:title" content="' . of_get_option("meta_app_twt_title") . '">';
			echo '<meta name="twitter:description" content="' . of_get_option("meta_app_twt_description") . '" />';
			echo '<meta name="twitter:url" content="' . of_get_option("meta_app_twt_url") . '" />';
		}

		// Facebook
		if (true == of_get_option('meta_app_fb_title')) {
			echo '<meta property="og:title" content="' . of_get_option("meta_app_fb_title") . '" />';
			echo '<meta property="og:description" content="' . of_get_option("meta_app_fb_description") . '" />';
			echo '<meta property="og:url" content="' . of_get_option("meta_app_fb_url") . '" />';
			echo '<meta property="og:image" content="' . of_get_option("meta_app_fb_image") . '" />';
		}
	?>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unslider/unslider.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/unslider/unslider-dots.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/alderaan.css" />
</head>

<?php
  $content_text_color = get_option('content_text_color');
  $content_link_color = get_option('content_link_color');
  $content_topnav_color = get_option('content_topnav_color');
  $content_topnavlinks_color = get_option('content_topnavlinks_color');
  $content_footer_color = get_option('content_footer_color');
  $content_footerlinks_color = get_option('content_footerlinks_color');
?>
<style>
  .content { color:  <?php echo $content_text_color; ?>; }
  .content a { color:  <?php echo $content_link_color; ?>; }
  .navbar { background-color:  <?php echo $content_topnav_color; ?>; }
  .navbar-default .navbar-nav > li > a { color:  <?php echo $content_topnavlinks_color; ?>; }
  footer { background-color:  <?php echo $content_footer_color; ?>; }
  footer, footer a { color:  <?php echo $content_footerlinks_color; ?>; }
</style>


<body <?php body_class(); ?>>

<!-- Start WordPress Nav Array -->
<nav class="navbar navbar-default navbar-fixed-top">
<div class="SearchBox" style="height:0px;">
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div>
            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search..." />
        	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/searchwhite.png" />
        </div>
    </form>
    <div class="CloseSearch" style=""></div>
  </div>
<!--<nav class="navbar navbar-default">-->
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <?php
            wp_nav_menu( array(
                'menu'              => 'Left Menu',
                'theme_location'    => 'primary',
                'depth'             => 2,
                // 'container'         => 'none',
                // 'container_class'   => 'none',
				// 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
      <?php
            wp_nav_menu( array(
                'menu'              => 'Right Menu',
                'theme_location'    => 'primary',
                'depth'             => 2,
                // 'container'         => 'none',
                // 'container_class'   => 'none',
				// 'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
  </div>
</nav>
<script>
$(document).ready (function () {
	$(window).scroll (function () {
		var sT = $(this).scrollTop();
			if (sT >= 278) {
				$('.navbar-default .navbar-nav > li > a').addClass('navbarsmall');
				$('a.navbar-brand').addClass('navbarbrandsmall');
				$('.navbar-default .menu-right-menu-container .navbar-nav > li > a').addClass('rightnavbarsmall');
			}else {
				$('.navbar-default .navbar-nav > li > a').removeClass('navbarsmall');
				$('a.navbar-brand').removeClass('navbarbrandsmall');
				$('.navbar-default .menu-right-menu-container .navbar-nav > li > a').removeClass('rightnavbarsmall');
			}
	})
})
</script>
<!-- End WordPress Nav Array -->
        
