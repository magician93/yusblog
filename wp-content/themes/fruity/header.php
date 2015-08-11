<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?><?php global $rvd_fruity_theme; ?><!DOCTYPE html <?php language_attributes(); ?>>
<html> 
	<head>
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta id="extViewportMeta" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />	
	
	<!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
	<!-- For iPhone 4 with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icon.png?">
	<!-- For first-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icon.png?">
	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/images/icon.png?">
	<!-- For nokia devices: -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png?">
	
         <!-- fonts -->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php
	
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	?>
	
	<?php
	wp_head();
	?>
	
</head> 

<body <?php body_class((is_home()?"home":"sub-page"))?>>
	<!-- Splash screen -->
  	 <div id="splash"> 
	   <!--<img id="splash-bg" src="<?php echo get_template_directory_uri(); ?>/images/splash/splash-alternate.png" alt="splash image"/>-->
	   <img id="splash-title" src="<?php echo get_template_directory_uri(); ?>/images/splash/main.png" alt="splash title" />
	 </div> 
  <!-- end splash screen -->
	<div id="menu">
<!-- <form action="search.php"><h3><input id="search" type="text" placeholder="Search" /> </h3></form>-->
		<?php if ($rvd_fruity_theme->get_option("show_search")=="enabled") {get_search_form(true); } ?>
		<?php //wp_page_menu( array('sort_column' => 'menu_order' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'fruity-menu', 'sort_column' => 'menu_order'  ) ); ?>
	</div>
<div data-dom-cache="false" data-role="page" data-page-id="<?php global $post; echo $post->ID; ?>" class="pages" data-theme="a"> <!-- this div is closed in the footer file -->