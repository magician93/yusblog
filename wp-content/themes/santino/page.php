<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bad Weather
 */
get_header();
?>

<div id="djax" class="djax-dynamic">
    <div id="content">

        <?php while( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'templates/content/content-page' ); ?>

        <?php endwhile; ?>

    </div> <!-- #content -->
</div> <!-- #djax -->

<?php get_footer(); ?>
