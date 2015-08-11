<?php

///////////////////////////////////////
// You may add your custom functions here
///////////////////////////////////////

	///////////////////////////////////////
	// WordPress theme options: Custom logo upload
	///////////////////////////////////////
	function bonfire_theme_customizer( $wp_customize ) {
	
	$wp_customize->add_section( 'bonfire_logo_section' , array(
		'title'       => __( 'Logo', 'bonfire' ),
		'priority'    => 30,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	) );
	
	$wp_customize->add_setting( 'bonfire_logo' );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bonfire_logo', array(
		'label'    => __( 'Logo', 'bonfire' ),
		'section'  => 'bonfire_logo_section',
		'settings' => 'bonfire_logo',
	) ) );
	
	}
	add_action('customize_register', 'bonfire_theme_customizer');


	///////////////////////////////////////
	// Enable featured image
	///////////////////////////////////////
	add_theme_support( 'post-thumbnails');

	///////////////////////////////////////
	// Add default posts and comments RSS feed links to head
	///////////////////////////////////////
	add_theme_support( 'automatic-feed-links' );
	
	///////////////////////////////////////
	// Styles the visual editor with editor-style.css to match the theme style
	///////////////////////////////////////
	add_editor_style();

	///////////////////////////////////////
	// Load theme languages
	///////////////////////////////////////
	load_theme_textdomain( 'bonfire', get_template_directory().'/languages' );

	///////////////////////////////////////
	// Register Custom Menu Function
	///////////////////////////////////////
	if (function_exists('register_nav_menus')) {
		register_nav_menus( array(
			'bonfire-main-menu' => ( 'Bonfire Main Menu' ),
		) );
	}

	///////////////////////////////////////
	// Default Main Nav Function
	///////////////////////////////////////
	function default_main_nav() {
		echo '<ul id="main-nav" class="main-nav clearfix">';
		wp_list_pages('title_li=');
		echo '</ul>';
	}
	
	///////////////////////////////////////
	// Register Widgets
	///////////////////////////////////////
	if ( function_exists('register_sidebar') ) {
	
		register_sidebar( array(
		'name' => __( 'Footer Widgets', 'bonfire' ),
		'id' => 'footer-widgets-full',
		'description' => __( 'Drag widgets here', 'bonfire' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
		));

	}

	///////////////////////////////////////
	// Exclude pages from search results
	///////////////////////////////////////	
	function SearchFilter($query) {
	if ($query->is_search) {
	$query->set('post_type', 'post');
	}
	return $query;
	}

	add_filter('pre_get_posts','SearchFilter');

	///////////////////////////////////////
	// Enqueue Google WebFonts
	///////////////////////////////////////
	function bonfire_fonts() {
	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'bonfire-fonts', "$protocol://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400' rel='stylesheet' type='text/css" );}
	add_action( 'wp_enqueue_scripts', 'bonfire_fonts' );
	
	///////////////////////////////////////
	// Enqueue font-awesome.min.css (menu icon set 01)
	///////////////////////////////////////
	
	function bonfire_fontawesome() {  
        wp_register_style( 'bonfire-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', array(), '1', 'all' );  

        wp_enqueue_style( 'bonfire-fontawesome' );
    }
    add_action( 'wp_enqueue_scripts', 'bonfire_fontawesome' );
	
	///////////////////////////////////////
	// Enqueue style.css (default WordPress stylesheet)
	///////////////////////////////////////
	function bonfire_style() {  
		wp_register_style( 'style', get_stylesheet_uri() , array(), '1', 'all' );

		wp_enqueue_style( 'style' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_style' );
	
	
	///////////////////////////////////////
	// Enqueue accordion.js
	///////////////////////////////////////
	function bonfire_accordion() {  
		wp_register_script( 'bonfire-accordion', get_template_directory_uri() . '/js/accordion.js', array( 'jquery' ), '1' );  

		wp_enqueue_script( 'bonfire-accordion' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_accordion' );  

	///////////////////////////////////////
	// Enqueue main-menu.js
	///////////////////////////////////////

	function bonfire_mainmenu() {
	wp_register_script( 'bonfire-main-menu', get_template_directory_uri() . '/js/main-menu.js',  array( 'jquery' ), '1', true );
	
	wp_enqueue_script( 'bonfire-main-menu', true );
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_mainmenu' );

	///////////////////////////////////////
	// Enqueue search-toggle.js
	///////////////////////////////////////

	function bonfire_searchtoggle() {
	wp_register_script( 'search-toggle', get_template_directory_uri() . '/js/search-toggle.js',  array( 'jquery' ), '1', true );
	
	wp_enqueue_script( 'search-toggle', true );
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_searchtoggle' );
	
	///////////////////////////////////////
	// Enqueue story-hovers.js
	///////////////////////////////////////
    function bonfire_storyhovers() {  
		wp_register_script( 'story-hovers', get_template_directory_uri() . '/js/story-hovers.js',  array( 'jquery' ), '1' );  
      
		wp_enqueue_script( 'story-hovers', true );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_storyhovers' );

	///////////////////////////////////////
	// Enqueue share.js
	///////////////////////////////////////
    function bonfire_share() {  
		wp_register_script( 'story-share', get_template_directory_uri() . '/js/share.js',  array( 'jquery' ), '1', true );  
      
		wp_enqueue_script( 'story-share', false );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_share' );  

	///////////////////////////////////////
	// Enqueue empty-textarea.js
	///////////////////////////////////////
    function bonfire_emptytextarea() {  
		wp_register_script( 'empty-textarea', get_template_directory_uri() . '/js/empty-textarea.js',  array( 'jquery' ), '1' );  

		wp_enqueue_script( 'empty-textarea' );
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_emptytextarea' ); 

	///////////////////////////////////////
	// Enqueue video-container.js
	///////////////////////////////////////
    function bonfire_videocontainer() {  
		wp_register_script( 'video-container', get_template_directory_uri() . '/js/video-container.js',  array( 'jquery' ), '1' );  

		wp_enqueue_script( 'video-container' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_videocontainer' ); 

	///////////////////////////////////////
	// Enqueue autogrow/jquery.autogrow-textarea.js
	///////////////////////////////////////
    function bonfire_autogrow() {
		if ( is_singular() ) {
		wp_register_script( 'autogrow', get_template_directory_uri() . '/js/autogrow/jquery.autogrow-textarea.js',  array( 'jquery' ), '1', true );  

		wp_enqueue_script( 'autogrow' );  
	}
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_autogrow' );

	///////////////////////////////////////
	// Enqueue expand-textarea.js
	///////////////////////////////////////
	function bonfire_expandtextarea() {  
		if ( is_single() ) {
		wp_register_script( 'expand-textarea', get_template_directory_uri() . '/js/expand-textarea.js',  array( 'jquery' ), '1' );  

		wp_enqueue_script( 'expand-textarea' );  
	}
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_expandtextarea' ); 

	///////////////////////////////////////
	// Enqueue comment-form.js
	///////////////////////////////////////
	function bonfire_commentform() {  
		if ( is_single() ) {
		wp_register_script( 'comment-form', get_template_directory_uri() . '/js/comment-form.js',  array( 'jquery' ), '1', true );  

		wp_enqueue_script( 'comment-form' );  
	}
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_commentform' );

	///////////////////////////////////////
	// Enqueue placeholder-fix.js (IE textarea/field placeholder fix)
	///////////////////////////////////////
    function bonfire_placeholderfix() {  
		wp_register_script( 'placeholder-fix', get_template_directory_uri() . '/js/placeholder-fix.js',  array( 'jquery' ), '1', true );  

		wp_enqueue_script( 'placeholder-fix' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_placeholderfix' ); 

	///////////////////////////////////////
	// Enqueue link-targets.js (web app link targets)
	///////////////////////////////////////
	
	    function bonfire_linktargets() {  
        wp_register_script( 'linktargets', get_template_directory_uri() . '/webapp/link-targets.js',  array( 'jquery' ), '1' );  
      
        wp_enqueue_script( 'linktargets' );  
    }  
    add_action( 'wp_enqueue_scripts', 'bonfire_linktargets' ); 

	///////////////////////////////////////
	// Enqueue /webapp/add2home.js (install as web app on iOS)
	///////////////////////////////////////

	function bonfire_webapp() {  
		if ( is_front_page() ) {
        wp_register_script( 'webapp', get_template_directory_uri() . '/webapp/add2home.js',  array( 'jquery' ), '1', true );  
      
        wp_enqueue_script( 'webapp' );  
    }
	}
    add_action( 'wp_enqueue_scripts', 'bonfire_webapp' );
	
	///////////////////////////////////////
	// Enqueue /webapp/add2home.css (styles for install as web app on iOS)
	///////////////////////////////////////
	
	function bonfire_webappstyle() {
		if ( is_front_page() ) {
        wp_register_style( 'webappstyle', get_template_directory_uri() . '/webapp/add2home.css', array(), '1', 'all' );  

        wp_enqueue_style( 'webappstyle' );  
    }
	}
    add_action( 'wp_enqueue_scripts', 'bonfire_webappstyle' );

	///////////////////////////////////////
	// Enqueue media-queries.css
	///////////////////////////////////////
	function bonfire_mediaqueries() {  
		wp_register_style( 'media-queries', get_template_directory_uri() . '/media-queries.css', array(), '1', 'all' );  

		wp_enqueue_style( 'media-queries' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_mediaqueries' );

	///////////////////////////////////////
	// Enqueue jquery.scrollTo-min.js (smooth scrolling to anchors)
	///////////////////////////////////////
    function bonfire_scrollto() {  
		wp_register_script( 'scroll-to', get_template_directory_uri() . '/js/jquery.scrollTo-min.js',  array( 'jquery' ), '1', true );  

		wp_enqueue_script( 'scroll-to' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_scrollto' ); 


	///////////////////////////////////////
	// Enqueue comment-reply.js (threaded comments)
	///////////////////////////////////////
	function bonfire_comment_reply(){
		if ( is_singular() && get_option( 'thread_comments' ) )	wp_enqueue_script( 'comment-reply' );
	}
	add_action('wp_print_scripts', 'bonfire_comment_reply');


	///////////////////////////////////////
	// Enqueue idangerous.swiper.css (tag swiper)
	///////////////////////////////////////
	function bonfire_tagswipercss() {  
		wp_register_style( 'bonfire-tagswipercss', get_template_directory_uri() . '/js/tagswiper/idangerous.swiper.css', array(), '1', 'all' );  

		wp_enqueue_style( 'bonfire-tagswipercss' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_tagswipercss' );
	
	
	///////////////////////////////////////
	// Enqueue idangerous.swiper-2.1.min.js (tag swiper)
	///////////////////////////////////////
	function bonfire_tagswiperjs() {  
		wp_register_script( 'bonfire-tagswiperjs', get_template_directory_uri() . '/js/tagswiper/idangerous.swiper-2.1.min.js', array( 'jquery' ), '1' );  

		wp_enqueue_script( 'bonfire-tagswiperjs' );  
	}
	add_action( 'wp_enqueue_scripts', 'bonfire_tagswiperjs' );  


	///////////////////////////////////////
	// Add wmode transparent and post-video container for responsive purpose
	///////////////////////////////////////	
	function add_video_wmode_transparent($html, $url, $attr) {
		
		$html = '<div class="post-video">' . $html . '</div>';
		if (strpos($html, "<embed src=" ) !== false) {
			$html = str_replace('</param><embed', '</param><param name="wmode" value="transparent"></param><embed wmode="transparent" ', $html);
			return $html;
		}
		else {
			if(strpos($html, "wmode=transparent") == false){
				if(strpos($html, "?fs=" ) !== false){
					$search = array('?fs=1', '?fs=0');
					$replace = array('?fs=1&wmode=transparent', '?fs=0&wmode=transparent');
					$html = str_replace($search, $replace, $html);
					return $html;
				}
				else{
					$youtube_embed_code = $html;
					$patterns[] = '/youtube.com\/embed\/([a-zA-Z0-9._-]+)/';
					$replacements[] = 'youtube.com/embed/$1?wmode=transparent';
					return preg_replace($patterns, $replacements, $html);
				}
			}
			else{
				return $html;
			}
		}
	}
	add_filter('embed_oembed_html', 'add_video_wmode_transparent');
	
	///////////////////////////////////////
	// Define content width
	///////////////////////////////////////
	if ( ! isset( $content_width ) ) $content_width = 1000;

	///////////////////////////////////////
	// Custom Comment Output
	///////////////////////////////////////
	function custom_theme_comment($comment, $args, $depth) {
	   $GLOBALS['comment'] = $comment; 
	   ?>

		<li id="comment-<?php comment_ID() ?>" <?php comment_class(); ?>>
		
			<div class="comment-avatar"><?php echo get_avatar($comment,$size='40'); ?></div>
		
			<div class="comment-container">
			<div class="comment-entry">
			
			<span class="comment-author"><?php comment_author(); ?>: </span>
			
			<?php if ($comment->comment_approved == '0') : ?>
			<strong><?php _e('(Your comment is awaiting moderation.)', 'bonfire') ?></strong>
			<?php endif; ?>
			<?php echo get_comment_text(); ?>
			<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'reply_text' => __( 'Reply', 'bonfire' ), 'max_depth' => $args['max_depth']))) ?>
			<?php edit_comment_link( __('Edit', 'bonfire'),' [',']') ?>
			
			</div>
			</div>
		
	<?php
	}

?>