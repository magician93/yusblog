<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
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

        
        <h2>Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        
        <h2>Archives by Subject:</h2>
            <ul>
                 <?php wp_list_categories(); ?>
            </ul>
        
        </div>

      <div class="clear"></div>  
      </div>  

<?php get_footer(); ?>  

</div>