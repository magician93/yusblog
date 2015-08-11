<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bad Weather
 */
?>

<div class="bw--white bw--white-delay page-holder">
    
    <?php
    $bg_image = Bw::get_option( 'page_404_bg' );
    if( $bg_image ) { echo "<div id='bg-img' style='background-image: url({$bg_image});'></div>"; }
    ?>
    
    <article class="page page-404">
        
        <div class="page-title to--white">
            <h1><?php _e('Nothing was found!', BW_THEME); ?></h1>
            <h2><?php _e('Please try again', BW_THEME); ?></h2>
            <span class="separator"></span>
        </div>
        
        <?php // get_search_form(); ?>
        
        <form action="<?php echo home_url( '/' ); ?>" class="search-form" method="get" role="search" id="searchform" autocomplete="off">
            
            <input type="search" title="Search for:" name="s" value="" id="search" placeholder="<?php _e('Search the site ...', BW_THEME); ?>" class="search-field to--white">
            <button type="submit" class="search-submit to--white"><i class="fa fa-arrow-right"></i></button>
            <a class="search-location dJAX_internal" href="#"></a>
            
        </form>
        
    </div>
</div>