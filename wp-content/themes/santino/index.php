<?php
/**
 * The main template file.
 *
 */
get_header();
?>

<div id="djax" class="djax-dynamic">
    <div id="content">

        <?php if( have_posts() ) : ?>

            <?php get_template_part( 'templates/content/content' ); ?>

        <?php else : ?>

            <?php get_template_part( 'templates/content/content', 'none' ); ?>

        <?php endif; ?>

    </div> <!-- #content -->
</div> <!-- #djax -->

<?php get_footer(); ?>
