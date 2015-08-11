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
        <div class="bw--mp">

            <?php if ( is_singular( 'product' ) ) {
                woocommerce_content();
            }else{
                //For ANY product archive.
                //Product taxonomy, product search or /shop landing
                woocommerce_get_template( 'archive-product.php' );
            } ?>

        </div>
    </div> <!-- #content -->
</div> <!-- #djax -->

<?php get_footer(); ?>
