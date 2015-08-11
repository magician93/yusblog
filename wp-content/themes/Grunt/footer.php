
	</div>
	<!-- END body -->

</div>
<!-- END #sitewrap -->

<!-- BEGIN FOOTER -->
<?php if(is_home() ) { ?>
	<div id="footer">
	
		<!-- BEGIN INCLUDE PAGINATION -->
		<?php get_template_part('includes/pagination'); ?>
		<!-- END INCLUDE PAGINATION -->
		
		<!-- BEGIN WIDGETS -->
		<div class="footer-widgets-wrapper">
			<div class="footer-widgets-wrapper-inner">
				<!-- BEGIN FULL WIDTH WIDGETS --><div class="footer-widgets-1-column"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widgets') ) : ?><?php endif; ?></div><!-- END FULL WIDTH WIDGETS -->
			</div>
		</div>
		<!-- END WIDGETS -->
	
	</div>
<?php } ?>
<!-- END FOOTER -->

<!-- wp_footer -->
<?php wp_footer(); ?>
</body>
</html>