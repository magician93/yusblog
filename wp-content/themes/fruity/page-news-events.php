<?php
/*
Template Name: News & Events
*/
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
			
				
			<?php
			$news_categories = get_terms('news_category');
			foreach($news_categories as $cat) {?>
			<div class="white-content-box">
				<h2><?php echo $cat->name?></h2>
				<ul class="news-item column-split flexible-column">
					<?php
					$tax_args=array('orderby' => 'none');
					
					$args = array(
						'post_type' => 'news_events',
						'news_category' => $cat->slug,
						'orderby' => 'meta_value',
						'meta_key' => 'Date',
						'order' => 'desc'
					);
					
					$news_items = new WP_Query($args);
					
					while($news_items->have_posts()) {
						$news_items->the_post();
						
						$date = get_post_meta( get_the_ID(), 'Date', true );
						?>
					
					<li>
						<strong><?php echo date("d-M-Y", strtotime($date)); ?></strong>
						<p><?php the_title(); ?></p>
						<a class="no-border" data-transition="slide" href="<?php the_permalink(); ?>">Read more</a>
					</li>
										
					<?php } //end while ?>
				<div class="clear"></div>
				</ul>
			</div> <!-- end white-content-box-->
			<br>
			<?php }  // end for ?>
			
			
			
		</div>

<?php get_footer(); ?>