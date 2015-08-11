
<?php
$layout = Bw::get_meta('page_layout');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'bw--page bw--white bw--article bw--mp bw--isotope post' ); ?>>
    <div class="wrap-post">
        <div class="inside <?php if( $layout == 'full' ) { echo 'full'; } ?>">
            
            <div class="to--white">
                
                <?php Bw::set_post_views(); ?>

                <?php if(get_post_format() == 'image'): ?>
                <div class="post-featured">
                    <?php
                    $post_featured_id = get_post_thumbnail_id( get_the_ID() );
                    $post_featured_data = get_post( $post_featured_id );
                    ?> 
                    <a class="mp-item mfp-image" href="<?php echo Bw::get_image_src('thumb_1920x1080'); ?>" data-title="<?php echo $post_featured_data->post_title; ?>" data-alt="<?php echo $post_featured_data->post_content; ?>">
                    <?php the_post_thumbnail( 'bw_1100', array( 'class' => 'copyright' ) ); ?>
                    </a>
                </div>
                <?php endif ?>

                <?php if(get_post_format() == 'video'): ?>
                <div class="post-embed <?php if(Bw::get_meta_checkbox('embed_height')) { echo 'aspect'; } ?>">
                    <?php Bw::the_meta('embed_code'); ?>
                </div>
                <?php endif; ?>

                <?php if(get_post_format() == 'quote'): ?>
                    <blockquote>
                        <?php Bw::the_meta('quote_content'); ?>
                        <span class="post-quote-auth">` <?php Bw::the_meta('quote_author'); ?> `</span>
                    </blockquote>
                <?php endif ?>

                <?php if(get_post_format() == 'link'): ?>
                    <a class="post-link" href="<?php Bw::the_meta('link_content'); ?>" class="post-link" <?php if( Bw::get_meta_checkbox('link_target') ) { echo 'target="_blank"'; } ?>>
                            <?php Bw::the_meta('link_text'); ?>
                    </a>
                <?php endif ?>

                <?php if(get_post_format() == 'gallery'): ?>

                    <?php
                    $slider_options = 'fade';
                    $slider_effect = Bw::get_meta('slider_effect') ? Bw::get_meta('slider_effect') : false;
                    if(Bw::get_meta_checkbox('auto_height')) { $slider_options .= ' auto-height'; }
                    if(Bw::get_meta_checkbox('auto_play')) { $slider_options .= ' auto-play'; }
                    if(Bw::get_meta_checkbox('hide_nav')) { $slider_options .= ' hide-nav'; }
                    ?>

                    <ul class="post-gallery bw-owl-slider <?php echo $slider_options; ?>" data-effect="<?php echo $slider_effect; ?>">
                    <?php foreach(Bw::gallerize_by_id( Bw::get_meta('bw_gallery'), Bw::get_meta_checkbox('auto_height') ? 'thumb_960' : 'thumb_920_520_true' ) as $image): ?>
                        <li>
                            <img src="<?php echo $image['thumb'][0] ?>" alt="<?php echo $image['title'] ?>">
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif ?>
            
            </div>

            <div class="page-title to--white"><h1><?php the_title(); ?></h1><span class="separator"></span></div>
            
            <span class="the-date to--white" <?php if( !Bw::get_option( 'enable_rates' ) ) { echo 'style="margin-bottom:30px;"'; } ?>>
                <?php $date = get_the_date(); ?>
                <?php if(!empty($date)): ?>
                <i class="fa fa-calendar-o"></i> <?php echo $date; ?>
                <?php endif; ?>
                <i class="fa fa-folder-open-o"></i>
                <?php the_category(', '); ?>
            </span>
            
            <?php if( Bw::get_option( 'enable_rates' ) ): ?>
            <div class="like-box to--white <?php if( Bw_theme_ajax::has_voted( get_the_ID() ) ) { echo 'done'; } ?>" data-post-id="<?php echo get_the_ID(); ?>">
                <a href="#"><i class="fa fa-heart-o"><em><?php echo Bw_theme_ajax::get_vote( get_the_ID() ); ?></em></i></a>
            </div>
            <?php endif; ?>

            <div class="post-excerpt to--white">
                <?php if(is_single()): ?>
                    <?php the_content(); ?>
                <?php else: ?>
                    <?php the_excerpt(); ?>
                <?php endif; ?>
            </div>
            
            <?php if(Bw::get_option('show_blog_tags') and has_tag() ): ?>
                <div class="post-tags to--white"><?php the_tags('', ''); ?></div>
            <?php endif; ?>

            <?php if(is_single() && Bw::get_option('share_links_post')): ?>
                <?php get_template_part( 'templates/share' ); ?>
            <?php endif; ?>
            
        </div>
        <?php if( $layout !== 'full' ) { get_template_part('sidebar'); } ?>
    </div>
    
    <?php if( is_single() && Bw::get_option('show_related_articles') ): ?>
        <?php get_template_part( 'templates/related-articles' ); ?>
    <?php endif; ?>
    
    <div class="wrap-post to--white">
        <div class="wrap-post">
        <div class="inside full">
        <?php wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __( 'Pages:', BW_THEME ),
                'after'  => '</div>',
            )
        ); ?>

        <?php if( Bw::get_option( 'comment_type_blog' ) == 'facebook' ): ?>
            <?php get_template_part( 'templates/comments/facebook' ); ?>
        <?php elseif( Bw::get_option( 'comment_type_blog' ) == 'none' ): ?>
            <!-- comments are disabled -->
        <?php else: ?>
            <?php if( comments_open() || '0' != get_comments_number() ) {
                comments_template();
            } ?>
        <?php endif; ?>
        </div>
        </div>
    </div>
    
</article> <!-- // article -->
