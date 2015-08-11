<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<!-- BEGIN WEB APP META -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<!-- END WEB APP META -->

<!-- BEGIN WEB APP ICONS (fire icon by Arjun Adamson; thenounproject.com/arjunadamson) -->
<!-- iPhone --><link href="<?php echo get_template_directory_uri();?>/webapp/ios-icon-57x57.png" sizes="57x57" rel="apple-touch-icon-precomposed">
<!-- iPhone (Retina) --><link href="<?php echo get_template_directory_uri();?>/webapp/ios-icon-114x114.png" sizes="114x114" rel="apple-touch-icon-precomposed">
<!-- iPad --><link href="<?php echo get_template_directory_uri();?>/webapp/ios-icon-72x72.png" sizes="72x72" rel="apple-touch-icon-precomposed">
<!-- iPad (Retina) --><link href="<?php echo get_template_directory_uri();?>/webapp/ios-icon-144x144.png" sizes="144x144" rel="apple-touch-icon-precomposed">
<!-- BEGIN WEB APP ICONS -->

<!-- BEGIN WEB APP SPLASH SCREENS (fire icon by Arjun Adamson; thenounproject.com/arjunadamson) -->
<!-- iPhone --><link href="<?php echo get_template_directory_uri();?>/webapp/iphone-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<!-- iPhone (Retina) --><link href="<?php echo get_template_directory_uri();?>/webapp/iphone-retina-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPhone 5 --><link href="<?php echo get_template_directory_uri();?>/webapp/iphone-5-640x1096.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad (portrait) --><link href="<?php echo get_template_directory_uri();?>/webapp/ipad-portrait-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
<!-- iPad (landscape) --><link href="<?php echo get_template_directory_uri();?>/webapp/ipad-landscape-748x1024.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
<!-- iPad retina portrait --><link href="<?php echo get_template_directory_uri();?>/webapp/ipad-retina-portrait-1536x2008.png" media="(device-width: 768px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad retina landscape --><link href="<?php echo get_template_directory_uri();?>/webapp/ipad-retina-landscape-1496x2048.png" media="(device-width: 768px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- END WEB APP SPLASH SCREENS -->

<title><?php if (is_home() || is_front_page()) { echo bloginfo('name'); } else { echo wp_title(''); } ?></title>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php echo bloginfo('rss2_url'); ?>">

<!-- wp_header -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- BEGIN GET POST ID (FOR CUSTOM HEADER BACKGROUND COLOR) -->
<?php $bonfire_grunt_tones = get_post_meta($post->ID, 'bonfire_grunt_tones', true); ?>
<!-- END GET POST ID (FOR CUSTOM HEADER BACKGROUND COLOR) -->

<!-- BEGIN SITE LOGO -->
<div id="header-bar">
	<div class="site-logo-wrapper <?php if ( is_single() || is_page() ) { ?><?php echo $bonfire_grunt_tones; ?><?php } ?>">
		<?php if ( get_theme_mod( 'bonfire_logo' ) ) : ?>
	
			<!-- BEGIN LOGO IMAGE -->
			<div class="site-logo-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_theme_mod( 'bonfire_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
			</div>
			<!-- END LOGO IMAGE -->
	
		<?php else : ?>
	
			<!-- BEGIN LOGO -->
				<div class="site-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php bloginfo('name'); ?>
				</a>
			</div>
			<!-- END LOGO -->
	
		<?php endif; ?>
	</div>
</div>
<!-- END SITE LOGO -->

<!-- BEGIN MENU BAR -->
<div class="menu-wrapper">
	
	<!-- BEGIN SEARCH BUTTON -->
	<div id="header-search">
		<div class="menu-search"></div>
	</div>
	<!-- END SEARCH BUTTON -->
	
	<!-- BEGIN SPACER -->
	<div class="menu-spacer-wrapper">
		<div class="menu-spacer"></div>
	</div>
	<!-- END SPACER -->
	
	<!-- BEGIN MENU BUTTON -->
	<div class="menu-button"></div>
	<!-- END MENU BUTTON -->
	
</div>
<!-- END MENU BAR -->

<!-- BEGIN ACCORDION MENU -->
<div class="menu-close"></div>
<div id="menu">
	<?php wp_nav_menu( array( 'container_class' => 'menu01', 'theme_location' => 'bonfire-main-menu' ) ); ?>
</div>
<!-- END ACCORDION MENU -->

<!-- BEGIN SEARCH FORM -->
<div id="header-search-wrapper">
	<?php get_search_form(); ?>
</div>
<!-- END SEARCH FORM -->

<div id="sitewrap">

	<div id="body" class="pagewidth clearfix">