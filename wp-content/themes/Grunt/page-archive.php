<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix">
<div class="wrapper-outer">
	<div class="page-wrapper">
		<div class="archive-content">
			
			<div class="archive-full">
			<span class="archive-title"><?php _e( 'Yearly', 'bonfire' ); ?></span>
			<ul><?php wp_get_archives( array( 'type' => 'yearly', 'limit' => '12', 'show_post_count' => 1 ) ); ?></ul>
			</div>
			
			<div class="archive-full">
			<span class="archive-title"><?php _e( 'Monthly', 'bonfire' ); ?></span>
			<ul><?php wp_get_archives( array( 'type' => 'monthly', 'limit' => '12', 'show_post_count' => 1 ) ); ?></ul>
			</div>
			
			<div class="archive-full">
			<span class="archive-title"><?php _e( 'Authors', 'bonfire' ); ?></span>
			<ul><?php wp_list_authors(TRUE, TRUE, TRUE); ?></ul>
			</div>
			
			<div class="archive-full">
			<span class="archive-title"><?php _e( 'Categories', 'bonfire' ); ?></span>
			<ul><?php wp_list_categories( array( 'title_li' => '', 'show_count' => 1 ) ); ?></ul>
			</div>
			
			<div class="archive-full">
			<span class="archive-title"><?php _e( 'Tags', 'bonfire' ); ?></span>
			<?php wp_tag_cloud('smallest=20&largest=20&unit=px&orderby=count'); ?>
			</div>
			
		</div>
	</div>
</div>
</div>

	<!-- /#content -->

<?php get_footer(); ?>