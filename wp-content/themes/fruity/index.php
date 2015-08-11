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
			
			<?php $blog = new WP_Query('showposts=6'); ?>
			<?php while($blog->have_posts()): $blog->the_post(); ?>
			
			<div class="white-content-box theme-bg-color">
					  <h1 class="center ipad-width-optimize"><?php the_title(); ?></h1><p></p>
					  <p class="center ipad-width-optimize"><?php the_date(); ?> <span> (By <?php the_author_posts_link(); ?>)</span></p>
			</div>
			<div class="white-content-box">
		
				<div class="blog-article">
					
					<div class="article-body">
					  <div class="text">
					    <!--<img alt="Image-alt" src="images/content/blog-icon2.png" />-->
					    <?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
					    <?php the_excerpt(); ?>
					    <br>
					    <b><?php comments_number('No Comments', '1 Comment', '% Comments' );?></b>
					    <!--<p><span class="drop-cap">P</span>ublishing's attractive fusion of retail and lifestyle is changing the way shopping is perceived, making Barzan Publishing not just a destination... but a revelation.</p>
					    <p>Publishing has emerged as the place to be seen for those who value a touch of class. For global brands, Publishing offers pristine, picture-perfect surroundings and an attractive client base. </p>-->
					  </div>
					</div>
					<div class="article-footer">
						<a href="<?php the_permalink(); ?>" data-transition="slide" class="button button2 left">Read On</a>
						<div class="right">
						      <div class="tags "><?php the_category(' '); ?><div class="clear"></div></div>
						      <div class="clear"></div><br>
						</div>
						<div class="clear"></div><br>
					</div>
				</div>
			</div>
			
			<?php endwhile; ?>
		
		</div>

<?php get_footer(); ?>  