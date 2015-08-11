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
				<div class="blog-full-article">
					<div class="article-header">
					  <p class="info"><?php the_date(); ?> <span> (By <?php the_author_posts_link(); ?>)</span></p>
					</div>
					<div class="article-body">
					  <div class="text">
					    <!--<img alt="Image-alt" src="images/content/blog-icon2.png" />-->
					    <?php the_content(); ?>
					    <br>
						<div data-ajax="false">
					    <?php
					    if (comments_open()) {
						comments_template();
					    }
					    ?>
						</div>
					    <!--<p><span class="drop-cap">P</span>ublishing's attractive fusion of retail and lifestyle is changing the way shopping is perceived, making Barzan Publishing not just a destination... but a revelation.</p>
					    <p>Publishing has emerged as the place to be seen for those who value a touch of class. For global brands, Publishing offers pristine, picture-perfect surroundings and an attractive client base. </p>-->
					  </div>
					</div>
					<div class="article-footer">
						<a data-transition="slide" class="back-button button button2 left">Back</a><br>
						<div class="right">
						      <div class="tags "><?php the_category(' '); ?><div class="clear"></div></div>
						      <div class="clear"></div><br>
						</div>
						<div class="clear"></div><br>
					</div>
				</div>
				<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
			<?php endwhile; endif; ?>
			</div>
		</div>

<?php get_footer(); ?>