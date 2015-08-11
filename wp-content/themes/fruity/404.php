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
			    ?>
			    <a href="#" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/images/back-button.png" width="35" /></a>
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
		    <br/><br/>
		    <div class="center">
			<p style="font-size: 40px;">Oops.</p>
			<div class="white-content-box ">
				<div class="ipad-width-optimize">
					<h3>The page you are looking for was not found.</h3>
					<p>Click on the menu on top-left to browse through our existing content and see if something interests you; or simply search for something in that same menu.</p>
				</div>
			</div>
		    </div>
		</div><!-- /content -->
		
<?php get_footer(); ?>  