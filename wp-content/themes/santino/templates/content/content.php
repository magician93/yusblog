<?php
/**
 * @package Bad Weather
 */
?>

<?php $bw_es = 30; ?>

<div class="bw--mp bw--white bw--isotope">

    <div class="isotope-holder light-gray" style="padding-bottom:<?php echo $bw_es; ?>px">
        <div class="isotope isotope-mixed isotope-blog" data-space="<?php echo $bw_es; ?>" style="padding:<?php echo $bw_es; ?>px 0 <?php echo $bw_es; ?>px <?php echo $bw_es; ?>px">

            <?php while( have_posts() ) : the_post(); ?>

                <div class="isotope-item item-h2 item-w2" style="margin-bottom:<?php echo $bw_es; ?>px;">
                    
                    <?php $post_format = get_post_format(); ?>
                    
                    <div class="item-box">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <?php if( $post_format !== 'quote' ): ?><p><?php the_excerpt(); ?></p><?php endif; ?>
                    </div>
                    
                    <?php

                    // image
                    if( $post_format == 'image' or has_post_thumbnail() ):
                        $featured_id = get_post_thumbnail_id();
                        $image_data = wp_get_attachment_image_src( $featured_id, 'thumb_480_false' );
                        ?>
                        
                        <a class="element over-effect" href="<?php the_permalink(); ?>">
                           
                            <img src="<?php echo $image_data[0]; ?>" alt="<?php the_title(); ?>">
                            
                            <div class="over">
                                <span class="border border-hor after"></span>
                                <span class="border border-hor before"></span>
                                <span class="border border-ver after"></span>
                                <span class="border border-ver before"></span>
                            </div>

                            <?php if( $post_format == 'video' ): ?>
                                <span class="icon-video"><i class="fa fa-video-camera"></i></span>
                            <?php endif; ?>
                                
                            <span class="mask copyright"></span>
                            
                        </a>
                    <?php endif; ?>
                    
                    <?php if( $post_format == 'video' and !has_post_thumbnail() ): ?>
                        <?php Bw::the_meta('embed_code'); ?>
                    <?php endif; ?>

                    <?php if( $post_format == 'gallery' ): ?>
                        <ul class="bw-owl-slider isotope-post-gallery hide-nav">
                            <?php foreach( Bw::gallerize_by_id( Bw::get_meta( 'bw_gallery' ), 'thumb_480x500_true' ) as $image ): ?>
                                <li><img src="<?php echo $image['thumb'][0] ?>" alt=""></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if( $post_format == 'quote' ): ?>
                        <blockquote>
                            <?php Bw::the_meta( 'quote_content' ); ?>
                            <span class="post-quote-auth"><?php Bw::the_meta( 'quote_author' ); ?></span>
                        </blockquote>
                    <?php endif; ?>

                    <?php if( $post_format == 'link' ): ?>
                        <a class="post-link" href="<?php Bw::the_meta( 'link_content' ); ?>" <?php if( Bw::get_meta( 'link_target' ) ) {
                        echo 'target="_blank"';
                    } ?>>
                        <?php Bw::the_meta( 'link_text' ); ?>
                        </a>
                    <?php endif; ?>
                    
                    <div class="item-box">
                        <span class="the-date">
                            <?php $date = get_the_date(); ?>
                            <?php if(!empty($date)): ?>
                            <i class="fa fa-calendar-o"></i> <?php echo $date; ?>
                            <?php endif; ?>
                            
                            <?php if( Bw::get_option( 'enable_rates' ) ): ?>
                            <i class="fa fa-heart-o"></i> <?php echo Bw_theme_ajax::get_vote( get_the_ID() ); ?>
                            <?php endif; ?>
                            
                            <?php $terms = get_the_terms(get_the_ID(), 'portfolio'); ?>
                            <?php if( has_category() or !empty( $terms ) ): ?>
                            <i class="fa fa-folder-open-o"></i> <?php the_category(', '); ?>
                            <?php $c = 1; if( is_array( $terms ) ) { foreach( $terms as $term ) { $c++;
                                echo "<a href='" . get_term_link($term) . "'>{$term->name}</a>";
                                if( count( $terms ) >= $c ) { echo ', '; }
                            }} ?>
                            <?php endif; ?>
                        </span>
                    </div>
                    
                </div>

            <?php endwhile; ?>

        </div>
    </div>

<?php Bw::paging_nav(); ?>

</div>