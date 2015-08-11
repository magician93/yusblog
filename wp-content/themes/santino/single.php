<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Bad Weather
 */
get_header();
?>

<div id="djax" class="djax-dynamic">
    <div id="content">
        
        <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'templates/content/content', str_replace( 'bw_', '', get_post_type() ) ); ?>
        
        <?php endwhile; ?>
        
    </div> <!-- #content -->
</div> <!-- #djax -->

<?php get_footer();