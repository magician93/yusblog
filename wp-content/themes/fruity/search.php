<?php
/*
Template Name: Blog
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
			<div class="white-content-box">
				
				<?php if (have_posts()) : ?>

					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					     <h2 class="pagetitle">Search Results: "<?php the_search_query(); ?>"</h2>
						<ul class="nav-list">
					      <?php while (have_posts()) : the_post(); ?>
					      <li><a href="<?php the_permalink()?>"><strong><?php the_title(); ?></strong> <?php the_excerpt()?><span>&gt;</span></a></li>
					      <?php endwhile; ?>
						</ul>
						<div class="clear"></div>
			      
					      <div class="blog_nav">
						      <div class="prev"><?php next_posts_link('prev posts') ?></div>
						      <div class="next"><?php previous_posts_link('next posts') ?></div>
					      </div>
				      <?php else : ?>
			      
					      <h2 class="center">No posts found. Try a different search?</h2>
				      <?php endif;?>
				
			</div>
		</div>
		
<?php get_footer(); ?>  