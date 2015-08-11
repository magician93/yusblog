<?php

/*========================
 Typography
 =========================
*/
function button( $atts = null, $content = null) {
   extract(shortcode_atts(array(), $atts));
   
   $atts['target'] = isset($atts['target']) ? $atts['target'] : "";
   $atts['target'] = $atts['target'] ? "target='".$atts['target']."' " : "";
   
   $atts['href'] = isset($atts['href']) ? $atts['href'] : "";
   $atts['href'] = $atts['href'] ? "href='".$atts['href']."' " : "";
   
   if (!isset($atts['type']))
     $atts['type'] = "";
   
   if (!isset($atts['style']))
     return '<a '.$atts['target'].' '.$atts['href'].' class=" '.$atts['type'].' button">'. do_shortcode($content) . '</a>';
   else
     return '<a '.$atts['target'].' '.$atts['href'].' class=" '.$atts['type'].' button'.$atts['style'].' button">'. do_shortcode($content) . '</a>';
   
    
}
add_shortcode('button', 'button');



function icon( $atts = null, $content = null) {
   extract(shortcode_atts(array(), $atts));
   
   if (!isset($atts['type']))
     $atts['type'] = "";
   
   if (isset($atts['size']))
      return '<i class="fontawesome-icon '.$atts['type'].'" style="font-size: '.$atts['size'].'px;"></i>';
   else
      return '<i class="fontawesome-icon '.$atts['type'].'"></i>';
}
add_shortcode('icon', 'icon');




/* HEADINGS */
function heading_1( $atts = null, $content = null) {
   return '<h1>'. do_shortcode($content) . '</h1>';
}
add_shortcode('h1', 'heading_1');

function heading_2( $atts = null, $content = null) {
   return '<h2>'. do_shortcode($content) . '</h2>';
}
add_shortcode('h2', 'heading_2');

function heading_3( $atts = null, $content = null) {
   return '<h3>'. do_shortcode($content) . '</h3>';
}
add_shortcode('h3', 'heading_3');

function heading_4( $atts = null, $content = null) {
   return '<h4>'. do_shortcode($content) . '</h4>';
}
add_shortcode('h4', 'heading_4');

function heading_5( $atts = null, $content = null) {
   return '<h5>'. do_shortcode($content) . '</h5>';
}
add_shortcode('h5', 'heading_5');

function heading_6( $atts = null, $content = null) {
   return '<h6>'. do_shortcode($content) . '</h6>';
}
add_shortcode('h6', 'heading_6');
/* END HEADINGS */


function mgmt_team( $atts = null, $content = null) {
   return '<div class="info-items">'. do_shortcode($content) . '</div>';
}
add_shortcode("managementTeam", "mgmt_team");


function team_person( $atts = null, $content = null) {
 
   extract(shortcode_atts(array(), $atts));
   //$str = '<div class="info-items">'. do_shortcode($content) . '</div>';
   $str = "";
   
   $str .= '<div class="info-item">';
       $str .= '<div class="left first">';
   $photo = $atts['photo'];
	   $str .= "<img class='photo wp-image-341 alignnone' src='{$photo}'>";
       $str .= '</div>';
   
       $str .= '<div class="left last">';
	   $str .= '<strong>' . $atts['name'] . '</strong>';
   $str .= do_shortcode($content);
   
   $facebook = $atts['facebook'];
   $twitter = $atts['twitter'];
   $linkedin = $atts['linkedin'];
   
   if ($facebook) {
     $str .= "<a href='$facebook' target='_blank'><img src='". get_template_directory_uri()  ."/images/facebook.png' width='20'></a>&nbsp;";
   }
   if ($twitter) {
     $str .= "<a href='$twitter' target='_blank'><img src='". get_template_directory_uri()  ."/images/twitter.png' width='20'></a>&nbsp;&nbsp;";
   }
   if ($linkedin) {
     $str .= "<a href='$linkedin' target='_blank'><img src='". get_template_directory_uri()  ."/images/linkedin.png' width='20'></a>";
   }
   
   $str .= '</div>';
   
   $str .= '<div class="clear"></div></div>';
   
   return $str;
   
}
add_shortcode("person", "team_person");

function info_items( $atts = null, $content = null) {
   return '<div class="info-items">'. do_shortcode($content) . '</div>';
}
add_shortcode('infoItems', 'info_items');

function info_item( $atts = null, $content = null) {
   return '<div class="info-item">'. do_shortcode($content) . '<div class="clear"></div></div>';
}
add_shortcode('infoItem', 'info_item');


function float_left( $atts = null, $content = null) {
   return '<div class="left">'. do_shortcode($content) . '</div>';
}
add_shortcode('floatLeft', 'float_left');

function float_right( $atts = null, $content = null) {
   return '<div class="right">'. do_shortcode($content) . '</div>';
}
add_shortcode('floatRight', 'float_right');



/* CONTAINERS */
function gradient_box( $atts = null, $content = null) {
   return '<div class="gradient-box">'. do_shortcode($content) . '</div>';
}
add_shortcode('gradientBox', 'gradient_box');


/* END CONTAINERS */

function collapse_group( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<div data-role="collapsible-set" data-theme="a" data-content-theme="a" data-mini="true">'. do_shortcode($content) . '</div>';
}
add_shortcode('collapseGroup', 'collapse_group');


function collapse_item( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<div data-role="collapsible"><h3>'.(isset($atts['title'])?$atts['title']:"").'</h3><div>'. do_shortcode($content) . '</div></div>';
}
add_shortcode('collapseItem', 'collapse_item');



function nav_list( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   if (isset($atts['showcount']) && $atts['showcount'] == "true")
     return '<ul data-role="listview">'. do_shortcode($content) . '</ul>';
   else
     return '<ul class="nav-list">'. do_shortcode($content) . '</ul>';
}
add_shortcode('navList', 'nav_list');


function nav_list_item( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   if (isset($atts['count']))
     return '<li>'. do_shortcode(str_replace("</a>", "<span class='ui-li-count'>".$atts['count']."</span></a>", $content)) . '</li>';
   else
     return '<li>'. do_shortcode(str_replace("</a>", "<span>&gt;</span></a>", $content)) . '</li>';
}
add_shortcode('navListItem', 'nav_list_item');



function content_box( $atts = null, $content = null)
{
 extract(shortcode_atts(array(), $atts));
   if (isset($atts['type']))
      return '<div class="white-content-box theme-bg-color '. (isset($atts['type'])?$atts['type']:"") .'">'. do_shortcode($content) . '</div>';
   else
      return '<div class="white-content-box '. (isset($atts['type'])?$atts['type']:"") .'">'. do_shortcode($content) . '</div>';
}
add_shortcode('contentBox', 'content_box');



function quote_style( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   if ($atts['caption']) {
    return '<h2 class="font-14">'.do_shortcode($content).'</h2><p>'.$atts['caption'].'</p>';
   } else
    return '<h2 class="font-14">'.do_shortcode($content).'</h2>';
}
add_shortcode('quote', 'quote_style');



function notice_style( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   if (isset($atts['type']) && $atts['type']) {
    return '<div class="'.$atts['type'].'"><div class="typo-icon">'.do_shortcode($content).'</div></div>';
   } else
    return '<div class="approved"><div class="typo-icon">'.do_shortcode($content).'</div></div>';
}
add_shortcode('notice', 'notice_style');


function get_flex_slider($title) {
  global $wpdb;
        $post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type='flex_sliders'", $title ));
        if ( $post ) {
            $post = get_post($post);
	    return do_shortcode($post->post_content);
        } else {
	    return "<p>Flex Slider not found</p>";
	}
}
add_shortcode('getFlexSlider', 'get_flex_slider');

function flex_slider( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<div class="slider-component"><div class="flexslider"><ul class="slides">' . do_shortcode($content) . '</ul></div></div>';
}
add_shortcode('flexSlider', 'flex_slider');


function slide( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   $img = $content;
   $caption = $atts['caption'];
   if ($atts['caption'])
    return '<li><div class="white-bg gray-border absolute little-padding" style="bottom: 20px; margin-left: 20px;">'.$caption.'</div>'.$img.'</li>';
   else
    return '<li>'.$img.'</li>';
}
add_shortcode('slide', 'slide');


function get_layer_slider($title) {
  global $wpdb;
        $post = $wpdb->get_var( $wpdb->prepare( "SELECT ID FROM $wpdb->posts WHERE post_title = %s AND post_type='layer_sliders'", $title ));
        if ( $post ) {
            $post = get_post($post);
	    return do_shortcode($post->post_content);
        } else {
	    return "<p>Layer Slider not found</p>";
	}
}
add_shortcode('getLayerSlider', 'get_layer_slider');





function white_item( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<p class="white-item little-padding white-bg gray-border">'.do_shortcode($content).'</p>';
}
add_shortcode('whiteItem', 'white_item');

function map( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   $height = (isset($atts['height']) ? $atts['height'] : "200") . "px";
   $width = isset($atts['width']) ? $atts['width'] : "100%";
   $height = isset($atts['height']) ? $atts['height'] : "100%";
   
   return '<div id="map'.round(rand()*1000).'" style="width: '.$width.'; height: '.$height.';" class=" '."". " " . $atts['type'].' map" data-location="'.$atts['location'].'" ></div>';
}
add_shortcode('map', 'map');


function layer_slider( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   $height = (isset($atts['height']) ? $atts['height'] : "200") . "px";
   $ipad = isset($atts['fullwidth']) ? "" : "ipad-width-optimize";
   if (isset($atts['background']))
      return "<div class='cherry-slider $ipad' style='height: $height; background: url(".$atts['background'].") -2px -2px no-repeat; background-size: 100%;'>". do_shortcode($content) . "</div>";
   else
      return "<div class='cherry-slider $ipad' style='height: $height;'>". do_shortcode($content) . "</div>";
}
add_shortcode('layerSlider', 'layer_slider');



function layer( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));  
  $type = isset($atts['type']) ? $atts['type'] : "wait";
  $type = isset($atts['type']) ? $atts['type'] : "drop";
  $speed = isset($atts['speed']) ? $atts['speed'] : "300";
  if (isset($as)) {
   foreach($as as $a) {
    $a = new Converted();
    $a->hello = "";
    
   }
  }
  
  $direction = isset($atts['direction']) ? $atts['direction'] : "down";
  $left = isset($atts['left']) ? $atts['left'] : "";
  $right = isset($atts['right']) ? $atts['right'] : "";
  $top = isset($atts['top']) ? $atts['top'] : "";
  
  switch ($type) {
    case "wait":
     return "<div anim='fade' anim-speed='$speed' class='anim-item wait-item'></div>";
     break;
    case "break":
     return "<div anim-action='break' anim='fade' anim-speed='$speed' class='anim-item wait-item'></div>";
     break;
    case "restart":
     return "<div anim-action='restart' anim='fade' anim-speed='$speed' class='anim-item wait-item'></div>";
     break;
    default:
    $position_left = $left != "" ? "anim-position-left='$left'" : "";
    $position_right = $right != "" ? "anim-position-right='$right'" : "";
    $position_top = $top != "" ? "anim-position-top='$top'" : "";
    
     return "<div anim='$type' anim-speed='$speed' anim-direction='$direction' $position_left $position_right $position_top class='anim-item wait-item'>".do_shortcode($content)."</div>";
  }
   return "<div class='anim-item' style='height: $height;'>". do_shortcode($content) . "</div>";
   return "<br/><br/><br/>"; //'<div class="white-content-box">'. do_shortcode($content) . '</div>';
}
add_shortcode('layer', 'layer');


function dropcap( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<span class="drop-cap">'.do_shortcode($content).'</span>';
}
add_shortcode('dropcap', 'dropcap');


function shadow( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   return '<img src="'.get_template_directory_uri().'/images/shadow.png"/>';
}
add_shortcode('shadow', 'shadow');


function address( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   $str = '<div class="address">';
   $str .= 	'<img class="absolute" src="'.get_template_directory_uri().'/images/content/post-it.png"/><div class="address-info absolute content-padding">';
   $str .= 	do_shortcode($content);
   $str .= '</div></div>';
   return $str;
}
add_shortcode('address', 'address');


function twitter($atts=null, $content=null) {
 
  extract(shortcode_atts(array(), $atts));
  if (!$atts['username'])
     return "";
   if (!isset($atts['number']) || !$atts['number'])
     $atts['number'] = 10;
        return '<ul id="twitter_update_list">
          <div style="text-align: center; width: 100%">
            Loading tweets. Please wait...
          </div>
        </ul>
        <script type="text/javascript" src="https://api.twitter.com/1/statuses/user_timeline.json?screen_name='.$atts['username'].'&callback=twitterCallback&count='.$atts['number'].'"></script>';
}
add_shortcode('twitter', 'twitter');





function photo_gallery( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   
   if (isset($atts['type']))
    return '<div class="gallery-collection white-bg" data-ajax="false"><ul class="gallery photoswipe column-split '.$atts['type'].'">' . do_shortcode($content) . "</ul></div>";
   else
    return '<div class="gallery-collection white-bg" data-ajax="false"><ul class="gallery photoswipe column-split four-column">' . do_shortcode($content) . "</ul></div>";
}
add_shortcode('photoGallery', 'photo_gallery');


function photo( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   if (isset($atts['caption']))
    return '<li><a data-ajax="false" href="'.$atts['image'].'"><img src="'.$atts['image'].'" alt="'.$atts['caption'].'" /></a></li>';
   else
    return '<li><a data-ajax="false" href="'.$atts['image'].'"><img src="'.$atts['image'].'" /></a></li>';
}
add_shortcode('photo', 'photo');






function column_split( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   
   if (isset($atts['nomargin']) && $atts['nomargin']) {
     return "<ul class='column-split ".$atts['type']."'>" . do_shortcode($content) . "</ul><div class='clear'></div>";
   } else
     return "<div class='content-margin'><ul class='column-split ".$atts['type']."'>" . do_shortcode($content) . "</ul><div class='clear'></div></div>";
}
add_shortcode('columnSplit', 'column_split');





function column( $atts = null, $content = null)
{
   extract(shortcode_atts(array(), $atts));
   $align = isset($atts['align']) ? $atts['align'] : "";
  return "<li align='$align'>" . do_shortcode($content) . "</li>";
}
add_shortcode('column', 'column');













function subtitle_descr( $atts, $content = null)
{
 extract(shortcode_atts(array(
   
        ), $atts));
   return '<span class="subtitle_descr">'. do_shortcode($content) . '</span>';
}
add_shortcode('subtitle', 'subtitle_descr');

/*------------------------------TOOGLE SHORTCODES--------------------*/
function toogle_wrap( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title'      => '',
        ), $atts));
   return '<div class="toogle_wrap"><div class="trigger"><a href="#">'.$title.'</a></div><div class="toggle_container"><p>'. do_shortcode($content) .'</p></div></div>';
}
add_shortcode('toogle', 'toogle_wrap');

/*------------------------------TABS SHORTCODES--------------------*/

function tabs_menu( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'title1'      => 'Tab one',
		'title2'      => 'Tab two',
		'title3'      => 'Tab three',
        ), $atts));
   return '<ul id="tabsmenu" class="tabsmenu"><li class="active"><a href="#tab1">'.$title1.'</a></li><li><a href="#tab2">'.$title2.'</a></li><li><a href="#tab3">'.$title3.'</a></li></ul>';
}
add_shortcode('tabsmenu', 'tabs_menu');

function tabs_content( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'content1'      => 'Tab content one',
		'content2'      => 'Tab content two',
		'content3'      => 'Tab content three',
        ), $atts));
   return '<div id="tab1" class="tabcontent"><p>'.$content1.'</p></div><div id="tab2" class="tabcontent"><p>'.$content2.'</p></div><div id="tab3" class="tabcontent"><p>'.$content3.'</p></div>';
}
add_shortcode('tabscontent', 'tabs_content');

/*------------------------------IMAGES SHORTCODES--------------------*/

function image_full( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'imagehover'      => '',
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<a href="'.$imagehover.'" rel="prettyPhoto[gallery]"><img src="'.do_shortcode($content) .'" alt="" title="" border="0" class="rounded" /></a><img src="'.$templateurl.'/images/shadow.png" alt="" title="" border="0" class="shadow" />';
}
add_shortcode('imagefull', 'image_full');

function image_half( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<ul class="portfolio">'.do_shortcode($content) .'</ul>';
}
add_shortcode('imagehalf', 'image_half');


function image_third( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<ul class="portfolio-third">'.do_shortcode($content).'</ul>';
}
add_shortcode('imagethird', 'image_third');

function image_url( $atts, $content = null)
{
 extract(shortcode_atts(array(
        'imagehover'      => '',
		'title'      => '',
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<li><span>'.$title.'</span><a href="'.$imagehover.'" rel="prettyPhoto[gallery]"><img src="'.do_shortcode($content) .'" alt="" title="" border="0" class="rounded-half" /></a><img src="'.$templateurl.'/images/shadow.png" alt="" title="" border="0" class="shadow" /></li>';
}
add_shortcode('imageurl', 'image_url');

/*------------------------------VIDEO SHORTCODES--------------------*/

function video_full( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<div class="videocontainer"><iframe src="'.do_shortcode($content) .'" frameborder="0" allowfullscreen></iframe></div><img src="'.$templateurl.'/images/shadow.png" alt="" title="" border="0" class="shadow" />';
}
add_shortcode('videofull', 'video_full');



function video_half( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<ul class="portfolio">'.do_shortcode($content) .'</ul>';
}
add_shortcode('videohalf', 'video_half');

function video_half_url( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'title'      => '',
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<li><span>'.$title.'</span><div class="videocontainer"><iframe src="'.do_shortcode($content) .'" frameborder="0" allowfullscreen></iframe></div><img src="'.$templateurl.'/images/shadow.png" alt="" title="" border="0" class="shadow" /></li>';
}
add_shortcode('videohalfurl', 'video_half_url');

/*------------------------------SLIDESHOW SHORTCODES--------------------*/
function slideshow( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<div class="images_slider_container"><div class="images_slider"><ul class="slides">'.do_shortcode($content) .'</ul></div></div>';
}
add_shortcode('slideshow', 'slideshow');

function slide_img( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<li><img src="'.do_shortcode($content) .'" alt="" title="" border="0" /></li>';
}
add_shortcode('slide-image', 'slide_img');

/*------------------------------SECTION CONTENT SHORTCODES--------------------*/
function section_content( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
		'imageurl'      => '',
		'titleurl'      => '',
		'title'      => '',
        ), $atts));
   return '<div class="post"><div class="post_thumb"><img src="'.$imageurl.'" alt="" title="" border="0" class="rounded-half" /><img src="'.$templateurl.'/images/shadow.png" alt="" title="" border="0" class="shadow" /></div><div class="post_content"><h3><a href="'.$titleurl.'">'.$title.'</a></h3><p>'.do_shortcode($content) .'</p></div></div>';
}
add_shortcode('section', 'section_content');

/*------------------------------Social button SHORTCODES--------------------*/
function social_buttons( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
        ), $atts));
   return '<ul class="social">'.do_shortcode($content) .'</ul>';
}
add_shortcode('social', 'social_buttons');

function social_button( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'templateurl'      => get_template_directory_uri(),
		'url'      => get_template_directory_uri(),
        ), $atts));
   return '<li><a href="'.$url.'"><img src="'.do_shortcode($content) .'" alt="" title="" border="0" class="rounded-half" /></a></li>';
}
add_shortcode('socialicon', 'social_button');

/*------------------------------Call button SHORTCODES--------------------*/
function call_button( $atts, $content = null)
{
 extract(shortcode_atts(array(
		'phone'      => '',
        ), $atts));
   return '<a href="tel:'.$phone.'" class="call_button">'.do_shortcode($content) .'</a>';
}
add_shortcode('callbutton', 'call_button');

?>