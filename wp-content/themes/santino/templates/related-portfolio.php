<?php

$q = new WP_Query(
    array(
        'post_type' => 'bw_portfolio',
        'orderby' => 'rand',
        'posts_per_page' => 3,
        'post__not_in' => array( get_the_ID() ),
        'meta_key' => '_thumbnail_id',
    )
);

echo '<div class="page-title to--white" style="margin:50px 0 20px 0;"><h1>' . __( 'Related articles', BW_THEME ) . '</h1><span class="separator"></span></div>';

echo '<div class="isotope-holder" style="float:left;"><div class="isotope isotope-portfolio" data-space="0">';

while( $q->have_posts() ) : $q->the_post();

    if( has_post_thumbnail() ) {
        $featured_image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-big' );
        $featured_image = $featured_image_data[0];
    }else{
        $gallery_ids = Bw::get_meta('bw_gallery');
        if( isset( $gallery_ids ) and $gallery_ids !== '' ) {
            $attachments = get_posts( array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'orderby' => "post__in",
                'post__in' => $gallery_ids
            ));
        }else{
            $attachments = get_posts( array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => 'any',
                'post_parent' => $post->ID
            ));
        }

        if( $attachments ) {
            foreach( $attachments as $attachment ) {
                $featured_image_data = wp_get_attachment_image_src( $attachment->ID, 'thumb_424x500_true' );
                $featured_image = $featured_image_data[0];
                break;
            }
        }
    }
    ?>

    <div class="isotope-item item-h2">

        <a href="<?php the_permalink(); ?>">

            <div class="element" style="background: transparent url('<?php echo!empty( $featured_image ) ? $featured_image : Bw::empty_img( '424x500' ); ?>') no-repeat 50% 50%; background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;"></div>

            <div class="over"></div>

            <div class="portfolio-info">
                <div class="text">

                    <h2><?php the_title(); ?></h2>

                    <?php the_excerpt(); ?>

                    <?php if( Bw::get_option( 'enable_rates' ) ): ?>
                    <div class="rate">
                        <i class="fa fa-heart-o"></i>
                        <span><?php echo Bw_theme_ajax::get_vote( get_the_ID() ); ?></span>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            <div class="pointer copyright"></div>

        </a>

    </div>
    
<?php
endwhile;
wp_reset_query();
echo '</div></div>';