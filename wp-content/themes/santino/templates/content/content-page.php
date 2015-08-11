<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Bad Weather
 */
?>

<div class="bw--white bw--white-delay bw--page">

<?php
$bw_id = Bw::get_if_id();
if( $bw_id ) {
    $bg_image_data = get_field( 'page_bg_img', $bw_id );
    $bg_image = $bg_image_data['url'];
}
$white_bg = get_field( 'white_page_bg', $bw_id );
$fixed_width = get_field( 'fixed_page_width', $bw_id );
?>


<?php if( !empty( $bg_image ) ): ?>
    <div id="bg-img" style="background: #111 url('<?php echo $bg_image; ?>') no-repeat center center;background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;"></div>
<?php endif; ?>

<div class="page-holder <?php if( $white_bg ) { echo 'page-white'; } ?> <?php if( $fixed_width or ( Bw_woo::woo_active_plugin() && ( is_cart() or is_checkout() ) ) ) { echo 'fixed-page'; } ?>">
    <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="page-title to--white">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field( 'page_sub_title' ); ?></h2>
            <span class="separator black"></span>
        </div>

        <div class="page-content to--white">
        <?php the_content(); ?>
        </div>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', BW_THEME ),
            'after' => '</div>',
        ) );
        ?>

    </article>
</div>
</div>