<?php
global $rvd_fruity_theme;
get_header(); ?>
		<div data-role="header" data-position="fixed">
			<div class="left">
			    <a href="#" class="showMenu menu-button"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-button.png" width="35" /></a>
			    <?php
			    global $post;
			    if ($post->post_parent) {
			    ?>
			    <a href="#" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/images/back-button.png" width="35" /></a>
			    <?php }?>
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
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<div class="white-content-box">
				
			<?php
			$portfolio_categories = get_terms('portfolio_category');
			foreach($portfolio_categories as $cat) {?>
				<h2><?php echo $cat->name?></h2>
				<ul class="shadow-inner-images round-inner-images gallery column-split <?php echo $columns?$columns:'four-column'?>">
					<?php
					$tax_args=array('orderby' => 'none');
					
					$args = array(
						'post_type' => 'portfolio',
						'portfolio_category' => $cat->slug
						//'paged' => $paged,
						//'posts_per_page' => of_get_option('portfolio_items', '10'),
					);
					
					$portfolio_items = new WP_Query($args);
					
					while($portfolio_items->have_posts()) {
						$portfolio_items->the_post() ?>
					
					<li>
						<a href="<?php the_permalink(); ?>" data-transition="slide" class="center little-padding">
						    <img src="<?php echo current(wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium')); ?>">
						    <br/>
						    <strong><?php the_title(); ?></strong>
						    <br/>
						    Click to read more
						</a>
					</li>
					
					<?php } //end while ?>
				</ul>
				<div class="clear"></div>
			<?php }  // end for ?>
			
			
		</div>

<?php get_footer(); ?>  