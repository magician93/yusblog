<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Bad Weather
 */
?>

<div id="sidebar" class="to--white">
    <?php $sidebar = Bw_woo::is_woo() ? 'sidebar-shop' : 'sidebar-1'; ?>

    <?php if( !dynamic_sidebar( $sidebar ) ) : ?>

        <aside id="search" class="widget widget_search">
            <?php get_search_form(); ?>
        </aside>

        <aside id="archives" class="widget">
            <h1 class="widget-title"><?php _e( 'Archives', BW_THEME ); ?></h1>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
            </ul>
        </aside>

        <aside id="meta" class="widget">
            <h1 class="widget-title"><?php _e( 'Meta', BW_THEME ); ?></h1>
            <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aside>

    <?php endif; ?>
</div> <!-- #sidebar -->