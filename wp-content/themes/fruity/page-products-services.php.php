<?php
/*
Template Name: Products & Services
*/
global $rvd_fruity_theme;
get_header(); ?>
		<div data-role="header" data-position="fixed">
			<div class="left">
			    <a href="#" class="showMenu menu-button"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-button.png" width="35" /></a>
			    <?php
			    global $post;
			    ?>
			</div>
			<h1>
				<?php
				?>
				<?php if (!is_front_page()) {?>
				<p class="no-margin"><?php wp_title(""); ?></p>
				<p class="no-margin"><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php } else {?>
				<p><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php }?>
			</h1>
		</div>
		<div class="header-shadow"></div>
		<div data-role="content" data-theme="a" class="minus-shadow">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content();?>
			<?php endwhile; endif; ?>
			
				
			<?php
			$product_categories = get_terms('product_category');
			foreach($product_categories as $cat) {?>
			<div class="white-content-box">
				<h2><?php echo $cat->name?></h2>
					<?php
					$tax_args=array('orderby' => 'none');
					
					$args = array(
						'post_type' => 'products_services',
						'product_category' => $cat->slug
					);
					
					$product_items = new WP_Query($args);
					
					while($product_items->have_posts()) {
						$product_items->the_post() ?>
					
					<a data-transition="slide" class="icon" href="<?php the_permalink(); ?>">
						<?php if(get_post_thumbnail_id($post->ID)) {?>
						<img src="<?php echo current(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')); ?>" width="48" />
						<?php }else{?>
						<img src="<?php echo get_template_directory_uri() . "/images/spacer.gif"; ?>" width="48" />
						<?php }?>
						<span><?php the_title(); ?></span>
					</a>
										
					<?php } //end while ?>
				<div class="clear"></div>
			</div> <!-- end white-content-box-->
			<br>
			<?php }  // end for ?>
			
			
			
		</div>

<?php get_footer(); ?>  