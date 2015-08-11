<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bad Weather
 */

get_header(); ?>
	
	<div id="djax" class="djax-dynamic">
		<div id="content">
			
			<?php if( get_post_type() == 'bw_portfolio' ): ?>
				
				<?php get_template_part( 'templates/portfolio/portfolio' ); ?>
				
			<?php else: ?>
				
				<?php get_template_part( 'templates/content/content' ); ?>
                
			<?php endif; ?>
			
		</div> <!-- #content -->
	</div> <!-- #djax -->

<?php get_footer(); ?>
