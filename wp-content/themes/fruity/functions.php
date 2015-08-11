<?php
/*----------------------------------------------------------------------*/
/* Include Files */
/*----------------------------------------------------------------------*/
require_once get_template_directory() . '/admin/core.php';
require_once(get_template_directory() . '/admin/menu-options.php');
require_once(get_template_directory() . '/admin/shortcodes.php');
$rvd_fruity_theme = new Admincore();
$rvd_fruity_theme->theme_name = 'Fruity';
$rvd_fruity_theme->load();
add_theme_support( 'automatic-feed-links' );
add_filter( 'show_admin_bar', '__return_false' );
/*----------------------------------------------------------------------*/
/* Load jquery */
/*----------------------------------------------------------------------*/
if ( !is_admin() ) { // instruction to only load if it is not the admin area

function google_font() {
		// comment out the next two lines to load the local copy of jQuery
		  global $rvd_fruity_theme;
		  $protocol = is_ssl() ? 'https' : 'http';
		  wp_enqueue_style( 'fruity-roboto', "$protocol://fonts.googleapis.com/css?family=Roboto:200,300,400,600" );
}
function load_dependent_files() {
	       global $rvd_fruity_theme;
	       $theme_options = $rvd_fruity_theme->options['theme_options'];
	       
		wp_register_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '20121010' );
		wp_enqueue_style('reset');
		
		wp_register_style( 'ui', get_template_directory_uri() . '/css/ui-lightness/jquery-ui-1.8.24.custom.css', array(), '20121010' );
		wp_enqueue_style('ui');
		
		wp_register_style( 'ui_theme', get_template_directory_uri() . '/css/themes/default/RSVmain.min.css', array(), '20121010' );
		wp_enqueue_style('ui_theme');
		
		wp_register_style( 'jquery_mobile', get_template_directory_uri() . '/css/themes/default/jquery.mobile.structure-1.1.1.min.css', array(), '20121010' );
		wp_enqueue_style('jquery_mobile');
		
		wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '20121010' );
		wp_enqueue_style('flexslider');
		
		wp_register_style( 'photoswipe', get_template_directory_uri() . '/css/photoswipe.css', array(), '20121010' );
		wp_enqueue_style('photoswipe');
		
		wp_register_style( 'add2home', get_template_directory_uri() . '/css/add2home.css', array(), '20121010' );
		wp_enqueue_style('add2home');
		
		wp_register_style( 'font_awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '20121010' );
		wp_enqueue_style('font_awesome');
		
		wp_register_style('lesscss', get_template_directory_uri() . '/css/style.php?bg='.urlencode($theme_options['wallpaper']).'&theme=light&color='. $theme_options['theme_color'] . '&color2='.$theme_options['theme_color2'], array(), '', false);
		wp_enqueue_style('lesscss');
		
		//wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '', false);
		//wp_enqueue_script('jquery');
		
		wp_register_script('lessjs', get_template_directory_uri() . '/js/less-1.3.3.min.js', array(), '', true);
		wp_enqueue_script('lessjs');
		
		wp_register_script('klass', get_template_directory_uri() . '/js/klass.min.js', array(), '', true);
		wp_enqueue_script('klass');
		
		wp_register_script('flexslider', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'), false, true);
		wp_enqueue_script('flexslider');
		
		
	        wp_register_script('jquery_ui', get_template_directory_uri() . '/js/jquery-ui-1.8.24.custom.min.js', array(), '', true);
		wp_enqueue_script('jquery_ui');
		
		wp_register_script('jquery_mobile', get_template_directory_uri() . '/js/jquery.mobile-1.1.1.min.js', array(), '', true);
		wp_enqueue_script('jquery_mobile');
		
		wp_register_script('helper', get_template_directory_uri() . '/js/helper.js', array(), '', true);
		wp_enqueue_script('helper');
		
		wp_register_script('iphone_checkboxes', get_template_directory_uri() . '/js/iphone-style-checkboxes.js', array(), '', true);
		wp_enqueue_script('iphone_checkboxes');
		
		
		wp_register_script('photoswipe', get_template_directory_uri() . '/js/code.photoswipe.jquery-3.0.5.min.js', array(), '', true);
		wp_enqueue_script('photoswipe');
		
		wp_register_script('add2home', get_template_directory_uri() . '/js/add2home.js', array(), '', true);
		wp_enqueue_script('add2home');
		
		wp_register_script('maps', 'http://maps.google.com/maps/api/js?sensor=false', array(), '', true);
		wp_enqueue_script('maps');
		
		wp_register_script('app', get_template_directory_uri() . '/js/app.js', array(), '', true);
		wp_enqueue_script('app');
		
}
add_action( 'wp_enqueue_scripts', 'load_dependent_files' );



   
   add_filter('style_loader_tag', 'my_style_loader_tag_function');

   function my_style_loader_tag_function($tag){
     //do stuff here to find and replace the rel attribute
      if (strstr($tag, ".php"))
	 return str_replace("stylesheet", "stylesheet/less", $tag);
      else
	 return $tag;
   }

}

/*----------------------------------------------------------------------*/
/* Add shortcode buttons */
/*----------------------------------------------------------------------*/
add_action('init', 'add_button');
function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
	 add_filter('mce_external_plugins', 'add_plugin');  
	 add_filter('mce_buttons', 'register_button');  
   }  
}    
function register_button($buttons) {  
   array_push($buttons, "subtitle", "toogle", "tabsmenu", "section", "imagefull", "imagehalf", "imagethird", "videofull", "videohalf", "slideshow", "social", "callbutton");  
   return $buttons;  
} 
function add_plugin($plugin_array) {  
   $plugin_array['subtitle'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['toogle'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['tabsmenu'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['section'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['imagefull'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['imagehalf'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['imagethird'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['videofull'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['videohalf'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['slideshow'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['social'] = get_template_directory_uri().'/scripts/customcodes.js';
   $plugin_array['callbutton'] = get_template_directory_uri().'/scripts/customcodes.js';
   return $plugin_array;  
}  
/*----------------------------------------------------------------------*/
/* Add featured image function */
/*----------------------------------------------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('menu-icon-size', 108, 108);
/*----------------------------------------------------------------------*/
/* Remove images atributes to make them 100% width */
/*----------------------------------------------------------------------*/
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );
// Removes attached image sizes as well
add_filter( 'the_content', 'remove_thumbnail_dimensions', 10 );
function remove_thumbnail_dimensions( $html ) {
    //$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


/*----------------------------------------------------------------------*/
/* Custom fields for News/Events */
/*----------------------------------------------------------------------*/
add_action('wp_insert_post', 'default_custom_fields_news_events');
 
function default_custom_fields_news_events($post_id)
{
    if ( $_GET['post_type'] != 'page' ) {
      if (get_post_type($post_id) == "news_events") {
	 add_post_meta($post_id, 'Date', '', true);
      }
    }
 
    return true;
}

/*----------------------------------------------------------------------*/
/* Create custom post types */
/*----------------------------------------------------------------------*/
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'products_services',
    array(
      'labels' => array(
        'name' => __( 'Products', 'fruity' ),
		'add_new_item' => __('Add New Product or Service', 'fruity'),
        'singular_name' => __( 'Product or Service' , 'fruity')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'products-services'),
	  'supports' => array( 'title', 'page-attributes', 'thumbnail', 'editor')
    )
  );
  register_taxonomy('product_category', 'products_services', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true));
  
  register_post_type( 'portfolio',
    array(
      'labels' => array(
        'name' => __( 'Portfolio Items' , 'fruity'),
         'add_new_item' => __('Add New Portfolio Item', 'fruity'),
        'singular_name' => __( 'Portfolio Item' , 'fruity')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'portfolio-items'),
       'supports' => array( 'title', 'page-attributes', 'thumbnail', 'editor')
    )
  );
  register_taxonomy('portfolio_category', 'portfolio', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true));
  
  register_post_type( 'news_events',
    array(
      'labels' => array(
        'name' => __( 'News & Events' , 'fruity'),
		'add_new_item' => __('Add New', 'fruity'),
        'singular_name' => __( 'News/Event' , 'fruity')
      ),
      'public' => true,
      'rewrite' => array('slug' => 'news-events-items'),
       'supports' => array( 'title', 'page-attributes', 'thumbnail', 'editor', 'custom-fields')
    )
  );
  register_taxonomy('news_category', 'news_events', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true));


   
   register_post_type( 'layer_sliders',
    array(
      'labels' => array(
        'name' => __( 'Layer Sliders' , 'fruity'),
		'add_new_item' => __('Add New Layer Slider', 'fruity'),
		'edit_item' => __('Edit Layer Slider', 'fruity'),
        'singular_name' => __( 'Layer Slider' , 'fruity')
      ),
      'exclude_from_search' => true,
      'public' => true,
	  'supports' => array( 'title', 'editor', 'slug')
    )
  );
   
   register_post_type( 'flex_sliders',
    array(
      'labels' => array(
        'name' => __( 'Flex Sliders' , 'fruity'),
		'add_new_item' => __('Add New Flex Slider', 'fruity'),
		'edit_item' => __('Edit Flex Slider', 'fruity'),
        'singular_name' => __( 'Flex Slider', 'fruity' )
      ),
      'exclude_from_search' => true,
      'public' => true,
	  'supports' => array( 'title', 'editor', 'slug')
    )
  );
   
}
$postype = isset($postype)?$postype:null;
$feature = isset($feature)?$feature:null;
post_type_supports( $postype, $feature );

/*----------------------------------------------------------------------*/
/* Home exerpt used for posts on home page */
/*----------------------------------------------------------------------*/
add_filter('the_excerpt', 'home_excerpts');
function home_excerpts($content = false) {
            global $post;
            $mycontent = $post->post_excerpt;
 
            $mycontent = $post->post_content;
            $mycontent = strip_shortcodes($mycontent);
            $mycontent = str_replace(']]>', ']]&gt;', $mycontent);
            $mycontent = strip_tags($mycontent);
            $excerpt_length = 70;
            $words = explode(' ', $mycontent, $excerpt_length + 1);
            if(count($words) > $excerpt_length) :
                array_pop($words);
                array_push($words, '...');
                $mycontent = implode(' ', $words);
            endif;
            $mycontent = '<p>' . $mycontent . '</p>';
// Make sure to return the content
    return $mycontent;
}
function blog_excerpts($content = false) {
            global $post;
            $mycontent = $post->post_excerpt;
 
            $mycontent = $post->post_content;
            $mycontent = strip_shortcodes($mycontent);
            $mycontent = str_replace(']]>', ']]&gt;', $mycontent);
            $mycontent = strip_tags($mycontent);
            $excerpt_length = 23;
            $words = explode(' ', $mycontent, $excerpt_length + 1);
            if(count($words) > $excerpt_length) :
                array_pop($words);
                array_push($words, '...');
                $mycontent = implode(' ', $words);
            endif;
            $mycontent = '<p>' . $mycontent . '</p>';
// Make sure to return the content
    return $mycontent;
}


function pocodle_content_width() {
	global $content_width;
	 $content_width = 960;
}
add_action( 'template_redirect', 'pocodle_content_width' );



function theme_sidebars() {
   register_sidebar( array(
		   'name' => __( 'Primary Widget Area', 'fruity' ),
		   'id' => 'primary-widget-area',
		   'description' => __( 'The primary widget area', 'fruity' ),
		   'before_widget' => '<div class="" id="%1$s" class="widget-container %2$s">',
		   'after_widget' => '</div>',
		   'before_title' => '<h2 class="widget-title">',
		   'after_title' => '</h2>',
	   ) );
}
add_action( 'init', 'theme_sidebars' );

/*----------------------------------------------------------------------*/
/* Register Menu */
/*----------------------------------------------------------------------*/

function register_my_menus() {
  register_nav_menus(
    array( 'fruity-menu' => __( 'Fruity Mobile Main Menu' , 'fruity') )
  );
}
add_action( 'init', 'register_my_menus' );