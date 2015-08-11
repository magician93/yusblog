<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php Bw::page_title(); ?></title>

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <?php
        /**
         * Wordpress Head. This is REQUIRED! Never remove the wp_head
         */
        wp_head();
        ?>

    </head>

    <body <?php body_class( Bw::body_class( 'expand-layers woocommerce' ) ); ?>>
        
        <?php if(Bw::get_option('copyright')): ?>
        <span id="image-copyright"><?php Bw::the_option('copyright_text', 'Hey, this photo is &copy;'); ?></span>
        <?php endif; ?>

        <div id="wrapper">

            <!-- djax layers -->
            <span class="bw-layer top"></span>
            <span class="bw-layer bottom"></span>

            <!-- main menu toggle -->
            <div id="main-menu-toggle" class="rr-button <?php if( Bw::get_option( 'homepage_open_menu' ) and is_front_page() ) { echo 'close'; } ?>">

                <div class="main-menu-lines">
                    <span class="line"></span>
                </div>

            </div>

            <!-- main menu -->
            <div id="main-menu" class="copyright <?php if( Bw::get_option( 'homepage_open_menu' ) and is_front_page() ) { echo 'visible'; } ?>">
                
                <div class="bw-center-block">
                    
                    <div class="bw-center-content">
                        
                        <!-- header -->
                        <header id="header">
                            
                            <!-- logo -->
                            <div id="logo">
                                    <?php $ot_logo = Bw::get_option( 'logo' ); ?>
                                <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <?php if( !empty( $ot_logo ) ): ?>
                                        <img src="<?php echo $ot_logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
                                    <?php else: ?>
                                        <h1><?php bloginfo( 'name' ); ?></h1>
                                        <p><?php bloginfo( 'description' ); ?></p>
                                    <?php endif; ?>
                                </a>
                            </div>
                            
                            <ul class="bw-menus">
                                <li>
                                    <nav id="primary" class="bw-menu">
                                    <?php if( has_nav_menu( 'primary' ) ) : ?>
                                        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                                    <?php else: ?>
                                        <p>Define your top bar navigation in <b>Apperance > Menus</b></p>
                                    <?php endif; ?>
                                    </nav>
                                </li>
                                <?php if( has_nav_menu( 'secondary' ) ) : ?>
                                <li>
                                    <nav id="secondary" class="bw-menu">
                                        <?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
                                    </nav>
                                </li>
                                <?php endif; ?>
                            </ul>

                            <?php Bw::go_social(); ?>

                            <?php if( Bw::get_option( 'footer_text' ) ): ?>
                                <div class="bottom-part">
                                    <p><?php Bw::the_option( 'footer_text' ); ?></p>
                                </div>
                            <?php endif; ?>

                        </header>

                    </div>
                </div>

            </div>
            
            <div id="container" class="<?php echo Bw::get_option( 'sticky_header' ) ? 'sticky' : ''; ?>">
