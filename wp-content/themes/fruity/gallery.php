<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Gallery
*/
?>

<?php get_header(); ?>
<div id="pagecontainer">

    	<div id="header" class="black_gradient">
            <a href="<?php echo home_url(); ?>" class="back_button black_button"><?php $rvd_fruity_theme->option('home_button'); ?></a>
            <div class="page_title"><?php $rvd_fruity_theme->option('header_text'); ?></div>
            <a href="#" id="menu_open" class="black_button"><?php $rvd_fruity_theme->option('menu_button'); ?></a>
            <a href="#" id="menu_close" class="black_button"><?php $rvd_fruity_theme->option('close_button'); ?></a>
            <div class="clear"></div>
        </div>
        
    	<div id="pages_nav">
            <div class="icons_nav">
                <ul class="slides">
					<?php
					$count = 1;
					query_posts(array( 'post_type' => 'icons_menu', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => '999')); ?>
                    <?php $postsnr = $wp_query->found_posts; ?>
                    <?php if (have_posts()) : ?>
                    <li>
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php echo get_post_meta($post->ID, "menu_item_url", $single = true); ?>" class="icon"><?php the_post_thumbnail('menu-icon-size'); ?><span><?php the_title(); ?></span></a>
                    <?php if ($postsnr > 4 && $count == 4){ ?>
                    </li><li>
                    <?php } if ($postsnr > 8 && $count == 8){ ?>
                    </li><li>
                    <?php } ?>
                    <?php $count++; endwhile; ?>
					</li>
                    <?php if ($postsnr < 4 || $postsnr == 4){ ?>
                    <li></li>
                    <?php } ?>
					<?php endif; ?>
                </ul>
          </div>
      </div>
        
      <?php wp_reset_query(); ?>
   	  <div class="content">
		<?php query_posts(array( 'post_type' => 'gallery', 'showposts' => '9999'));?>
        <?php if (have_posts()) : ?>
        <h1><?php the_title(); ?></h1>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
            	<?php while (have_posts()) : the_post(); ?>

				<?php if (has_post_thumbnail( $post->ID ) ): ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/scripts/timthumb.php?src=<?php echo $image[0]; ?>&h=65&w=65&zc=1" data-large="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>"/></a></li>
                <?php endif; ?>
                      
                <?php endwhile; ?>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
      		<?php endif; ?>	
            
	 <?php if($rvd_fruity_theme->get_option('show_widget_area_4') == 'enable') {
     if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Archive widget area') ) : ?>
     <h2>You can add widgets here from Admin->Appearance->Widgets <br /> Enable or Disable this widget area from Theme Options -> Widgets</h2>
    <?php endif; } else {}?>      
            
      <div class="clear"></div>  
      </div>  
    
<?php get_footer(); ?>  
</div>

