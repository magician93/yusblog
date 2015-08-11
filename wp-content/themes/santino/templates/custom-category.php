<?php
/*
Template Name: Custom Category
*/

get_header();

$type = Bw::get_meta('gallery_or_portfolio');

if ( ! empty( $type ) ) {
	
	echo '<div id="djax" class="djax-dynamic"><div id="content">';
	
	switch ( $type ) {
		
		case 'portfolio':
			
			get_template_part( 'templates/portfolio/portfolio' );
			
			break;
			
		case 'gallery':
			
			$gallery_id = Bw::get_meta('pt_gallery');
			
			if ( is_numeric( $gallery_id ) ) {
				
				global $wp_query;
				
				query_posts('post_type=bw_gallery&p=' . $gallery_id);
				
				while ( have_posts() ) { the_post();
					
					get_template_part( 'templates/content/content', str_replace('bw_', '', get_post_type() ) );
					
				}
				
				wp_reset_query();
			}
			
		break;
	}
	
	echo '</div></div>';
}

?>



<?php get_footer(); ?>