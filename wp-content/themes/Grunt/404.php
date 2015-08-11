<?php get_header(); ?>

<div id="content" class="clearfix">
	<div class="page-wrapper">

		<div class="not-found-wrapper">
			<div class="wrapper-outer">
				<div class="not-found-title"><?php _e('Whoops!', 'bonfire'); ?></div>
				<?php _e('Looks like you found a page that does not quite exist anymore, or perhaps it never did. But no worries; simply use the search or menu buttons above to find your way, or...', 'bonfire'); ?>
	
				<br>
	
				<div class="not-found-home-link">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php _e('Head to the front page', 'bonfire'); ?> <i class="fa fa-long-arrow-right"></i>
					</a>
				</div>
			</div>
		</div>

	</div>
</div>
<!-- /#content -->

<?php get_footer(); ?>