<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<!-- BEGIN FEATURED IMAGE -->
<div class="featured-image">
	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
	</a>
</div>
<!-- END FEATURED IMAGE -->

<!-- BEGIN CUSTOM FIELD FOR EMBEDDABLE CONTENT -->
<?php $featuredembed = get_post_meta($post->ID, 'FeaturedEmbed', true); ?>
<div class="video-container"><?php echo $featuredembed; ?></div>
<!-- END CUSTOM FIELD FOR EMBEDDABLE CONTENT -->

<!-- BEGIN SHORTCODE OUTSIDE THE LOOP -->
<div class="post-shortcode">
	<?php $shortcode = get_post_meta($post->ID, 'Shortcode', true); ?><?php echo do_shortcode($shortcode); ?>
</div>
<!-- END SHORTCODE OUTSIDE THE LOOP -->

<!-- BEGIN TAGS AREA -->
<?php if ( is_single() ) { ?>

	<!-- BEGIN SHOW .tags-wrapper IF HAS TAGS -->
	<?php if( has_tag() ) { ?>
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
	<?php } ?>
	<!-- END SHOW .tags-wrapper IF HAS TAGS -->

		<!-- BEGIN POST TAGS -->
		<?php the_tags('<span class="post-tag">','<span class="tags-dot"></span></span><span class="post-tag">','<span class="tags-dot"></span></span><div class="tags-end-spacer"></div>'); ?>
		<!-- END POST TAGS -->

	<!-- BEGIN SHOW .tags-wrapper IF HAS TAGS -->
	<?php if( has_tag() ) { ?>
					</div>
				</div>
			</div>
	<?php } ?>
	<!-- END SHOW .tags-wrapper IF HAS TAGS -->

	<!-- BEGIN TAGS SWIPE SCRIPT -->
	<script>
	var mySwiper = new Swiper('.swiper-container',{
		scrollContainer: true,
		});
	</script>
	<!-- END TAGS SWIPE SCRIPT -->

<?php } ?>
<!-- END TAGS AREA -->

<div class="content-wrapper">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- BEGIN GET POST ID (FOR CUSTOM TITLE HOVER COLOR) -->
		<?php $bonfire_grunt_tones = get_post_meta($post->ID, 'bonfire_grunt_tones', true); ?>
		<!-- END GET POST ID (FOR CUSTOM TITLE HOVER COLOR) -->

		<!-- BEGIN TITLE -->
		<h1 class="post-title <?php if ( is_single() ) { ?><?php echo $bonfire_grunt_tones; ?><?php } ?>">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'bonfire' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
		<!-- END TITLE -->

		<!-- BEGIN CONTENT -->
		<div class="entry-content">
			<?php the_content( __( 'Continues..', 'bonfire' ) ); ?>
		</div>
		<!-- END CONTENT -->

		<!-- BEGIN POST AUTHOR + DATE -->
		<?php if ( is_single() ) { ?>
			<div class="post-meta-author-date">
				<?php _e( 'Post by ', 'bonfire' ); ?>
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php printf( get_the_author() ); ?></a>,
				<time datetime="<?php echo esc_attr( the_time('o-m-d') ); ?>"><?php the_time('M j') ?></time>
			</div>
		<?php } ?>
		<!-- END POST AUTHOR + DATE -->
		
		<!-- BEGIN POST NAVIGATION -->
		<div class="link-pages">
			<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'bonfire').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
		<!-- END POST NAVIGATION -->
		
		<!-- BEGIN EDIT POST LINK -->
		<?php edit_post_link(__('EDIT', 'bonfire')); ?>
		<!-- END EDIT POST LINK -->

		<!-- BEGIN POST SEPARATOR -->
		<?php if ( is_single() ) { ?>
		<?php } else { ?>
			<div class="separator-container">
				<div class="separator"></div>
			</div>
		<?php } ?>
		<!-- END POST SEPARATOR -->
	
	</article>
		
</div>
<!-- /.post -->