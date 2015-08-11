<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
global $rvd_fruity_theme;
get_header(); ?>
		<div data-role="header" data-position="fixed">
			<div class="left">
			    <a href="#" class="showMenu menu-button"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-button.png" width="35" /></a>
			    <?php
			    global $post;
			    if ($post->post_parent || is_single($post)) {
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
			<div class="white-content-box">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2><?php echo the_title()?></h2>
				<?php the_content(); ?>
				<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
			<?php endwhile; endif; ?>
			</div>
		</div>

<?php get_footer(); ?>