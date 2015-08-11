<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="content" class="list-post">

		<?php // get loop.php ?>

<!-- BEGIN LOOP + SEPARATOR -->
<div class="wrapper-outer">
<?php get_template_part( 'includes/loop'); ?>
</div>
<!-- END LOOP + SEPARATOR -->

<!-- BEGIN COMMENTS -->
<?php comments_template(); ?>
<!-- END COMMENTS -->

<!-- BEGIN AUTO-EXPAND TEXTAREA -->
<script>
jQuery(document).ready(function() {
	jQuery( "textarea" ).autogrow();
});
</script>
<!-- END AUTO-EXPAND TEXTAREA -->

	</div>
	<!-- /#content -->
	
<!-- BEGIN SHARE LINKS AREA -->
<div id="share-wrapper">
	<div class="share-links">
		<a class="share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i> Facebook</a>
		<a class="share-twitter" target="_blank" href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>"><i class="fa fa-twitter"></i>Twitter</a>
		<a class="share-googleplus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus"></i>Google</a>
	</div>
	<div class="share-bottom"></div>
	<div class="share-tooltip"></div>
</div>
<!-- END SHARE LINKS AREA -->
	
</div>

<!-- BEGIN SHARE + COMMENT BUTTON AREA -->
<div class="share-comment-wrapper">

	<!-- BEGIN SHARE BUTTON -->
	<div class="share-button-wrapper">
		<div class="button-share"></div>
	</div>
	<!-- END SHARE BUTTON -->

			<!-- BEGIN COMMENT COUNT -->
			<?php if ( have_comments() || comments_open() ) : ?>
			<span class="comment-count"><?php comments_number( '', '1', '%' ); ?></span>
			<?php else : if ( ! comments_open() ) :?>
			<span class="comment-count"></span>
			<?php endif; // end ! comments_open() ?>
			<?php endif; // end have_comments() || comments_open() ?>
			<!-- END COMMENT COUNT -->

	<!-- BEGIN COMMENT BUTTON -->
	<div class="comment-button-wrapper">
		<div class="button-comment"></div>
	</div>
	<!-- END COMMENT BUTTON -->

</div>
<!-- END SHARE + COMMENT BUTTON AREA -->

<?php endwhile; ?>
<?php get_footer(); ?>