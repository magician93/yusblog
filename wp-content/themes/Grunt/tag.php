<?php get_header(); ?>		

<!-- BEGIN TAG -->
<div class="tag-auth-cat-spacer"></div>

<div class="showing">
	<?php _e( 'Posts tagged with:', 'bonfire' ); ?> <?php printf( '<span>' . single_tag_title( '', false ) . '</span>' ); ?>
</div>
<!-- END TAG -->

<div id="content" class="clearfix">

	<?php // the loop ?>
	<?php if (have_posts()) : ?>

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