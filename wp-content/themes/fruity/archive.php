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
			    if (isset($post) && ($post->post_parent || is_single($post))) {
			    ?>
			    <a href="#" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/images/back-button.png" width="35" /></a>
			    <?php }?>
			</div>
			<h1>
				<?php
				?>
				<?php if (!is_front_page()) {?>
				<p class="no-margin"><?php
				
				if (is_category()) {
					single_cat_title();
					echo " Posts";
				} else if (is_tag()) {
					echo "Tagged &#8216;";
					single_tag_title();
					echo "&#8217;";
				} else if (is_day()) {
					echo "Archive:";
					the_time('F jS, Y');
				} else if (is_month()) {
					echo "Archive:";
					the_time('F, Y');
				} else if (is_year()) {
					echo "Archive:";
					the_time('Y');
				} else if (is_author()) {
					echo "Author Posts";
				} else if (isset($_GET['paged']) && !empty($_GET['paged'])) {
					echo "Archive";
				} else
					wp_title("");
				
				?></p>
				<p class="no-margin"><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php } else {?>
				<p><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php }?>
			</h1>
		</div>
		<div class="header-shadow"></div>
		<div data-role="content" data-theme="a" class="minus-shadow">
			
				<?php if (have_posts()) {?>
					<?php while (have_posts()) : the_post(); ?>
					<div class="white-content-box">
						<div class="blog-article">
							<div class="article-header">
							  <p class="title"><?php the_title(); ?></p>
							  <p class="info"><?php the_date(); ?> <span> (By <?php the_author_posts_link(); ?>)</span></p>
							</div>
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
					<img src="<?php echo get_template_directory_uri() . "/images/shadow.png"; ?>">
					<?php wp_link_pages('before=<p>&after=</p>&next_or_number=number&pagelink=page %'); ?>
					
					<?php endwhile; ?>
				<?php }else{?>
				<div class="white-content-box">
					<h2>No posts</h2>
					<p>There are no posts to show under this section.</p>
				</div>
				<?php }?>
			</div>
			<?php if (is_category()) {?>
			<ul class="nav-list">
				<?php wp_list_categories('title_li='); ?>
			</ul>
			<?php }?>
		</div>

<?php get_footer(); ?>