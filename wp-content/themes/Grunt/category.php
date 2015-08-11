<?php get_header(); ?>		

<!-- BEGIN CATEGORY -->
<div class="tag-auth-cat-spacer"></div>

<div class="showing">
	<?php _e('Posts in category:', 'bonfire'); ?> <?php printf( '%s', '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
</div>
<!-- END CATEGORY -->

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>

			<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) )
			echo '<div class="archive-meta">' . $category_description . '</div>';
	
			/* Run the loop for the category page to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-category.php and that will be used instead.
			 */
			get_template_part( 'loop', 'category' );
			?>

	<?php while (have_posts()) : the_post(); ?>

	<!-- BEGIN LOOP -->
	<div class="wrapper-outer">
	<?php get_template_part( 'includes/loop'); ?>
	</div>
	<!-- END LOOP -->
	
	<?php endwhile; ?>
	
	<!-- BEGIN INCLUDE PAGINATION -->
	<div id="footer">
		<?php get_template_part('includes/pagination'); ?>
	</div>
	<!-- END INCLUDE PAGINATION -->
	
	<?php endif; ?>			
	
</div>
<!-- /#content -->

<?php get_footer(); ?>