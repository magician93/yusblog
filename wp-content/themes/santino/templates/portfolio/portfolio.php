<div class="bw--isotope">
    
    <?php $bw_es = 20; ?>

    <div class="isotope-bg">
        <div class="isotope-holder" style="padding-bottom:<?php echo $bw_es; ?>px">
            <div class="isotope transition isotope-portfolio"  data-space="<?php echo $bw_es; ?>" style="padding:<?php echo $bw_es; ?>px 0 <?php echo $bw_es; ?>px <?php echo $bw_es; ?>px">

                <?php
                
                $cat_object = get_queried_object();
                $projects_id = $cat_object->term_id;
                
                if( empty( $projects_id ) ) {
                    $custom_category = true;
                    $projects_id = Bw::get_meta( 'pt_portfolio' );
                }
                
                $args = array(
                    'post_type' => 'bw_portfolio',
                    'orderby' => 'menu_order date',
                    'order' => 'DESC',
                    'posts_per_page' => 12,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'portfolio',
                            'field' => 'id',
                            'terms' => $projects_id,
                            'operator' => 'IN'
                        )
                    )
                );

                $query = new WP_Query( $args );
                ?>

                <?php
                while( $query->have_posts() ) : $query->the_post();

                    $gallery_ids = Bw::get_meta( 'bw_gallery' );
                    if( !empty( $gallery_ids ) ) {
                        $gallery_ids = explode( ',', $gallery_ids );
                    }

                    $attachments = get_posts( array(
                        'post_type' => 'attachment',
                        'posts_per_page' => -1,
                        'orderby' => "post__in",
                        'post__in' => $gallery_ids
                            ) );

                    $featured_image = "";
                    if( has_post_thumbnail() ) {
                        $featured_image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-big' );
                        $featured_image = $featured_image_data[0];
                    }else{
                        if( $gallery_ids != "" ) {
                            $attachments = get_posts( array(
                                'post_type' => 'attachment',
                                'posts_per_page' => -1,
                                'orderby' => "post__in",
                                'post__in' => $gallery_ids
                                    ) );
                        }else{
                            $attachments = get_posts( array(
                                'post_type' => 'attachment',
                                'posts_per_page' => -1,
                                'post_status' => 'any',
                                'post_parent' => $post->ID
                                    ) );
                        }

                        if( $attachments ) {
                            foreach( $attachments as $attachment ) {
                                $featured_image_data = wp_get_attachment_image_src( $attachment->ID, 'thumb_424x500_true' );
                                $featured_image = $featured_image_data[0];
                                break;
                            }
                        }
                    }
                    
                    $filter = '';
                    $terms = get_the_terms(get_the_ID(), 'portfolio');
                    if( is_array($terms) ) {
                        foreach( $terms as $term ) {
                            $filter .= ' bw-filter-' . $term->term_id;
                        }
                    }
                    
                    ?>

                    <div class="isotope-item item-h2 <?php echo $filter; ?>"  style="margin-bottom:<?php echo $bw_es; ?>px;">

                        <a href="<?php the_permalink(); ?>">
                            
                            <div class="element" style="background: transparent url('<?php echo !empty( $featured_image ) ? $featured_image : Bw::empty_img( '424x500' ); ?>') no-repeat 50% 50%; background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;"></div>
                            
                            <?php //if ( ! Bw::is_mobile() ) : ?>
                            
                            <div class="over"></div>
                            
                            <div class="portfolio-info">
                                <div class="text">
                                    
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <p><?php echo Bw::get_meta( 'sub_title' ) ?></p>
                                   
                                    <ul>
                                        <?php
                                        $categories = get_the_terms($post->ID, 'portfolio');
                                        foreach($categories as $category) {
                                            echo '<li>' . $category->name . '</li>';
                                        }
                                        ?>
                                    </ul>
                                    
                                    <?php if( Bw::get_option( 'enable_rates' ) ): ?>
                                    <div class="rate">
                                        <i class="fa fa-heart-o"></i>
                                        <span><?php echo Bw_theme_ajax::get_vote( get_the_ID() ); ?></span>
                                    </div>
                                    <?php endif; ?>
                                    
                                </div>
                            </div>
                            
                            <?php //endif; ?>
                            
                            <div class="pointer copyright"></div>
                            
                        </a>
                        
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </div>
    
    <?php
    // add filters
    if( isset( $custom_category ) and count( $projects_id ) > 1 ) {
        echo '<div class="isotope-filter"><div class="filter-content"><div><em class="round"><i class="fa fa-caret-right"></i></em><span>' . __('View all', BW_THEME) . '</span><ul>';
        foreach( $projects_id as $row ) {
            $term = get_term_by('id', (int) $row, 'portfolio');
            echo '<li data-filter="bw-filter-' . $row . '">' . $term->name . '</li>';
        }
        echo '<li>' . __('View all', BW_THEME) . '</li></div></ul></div></div>';
    }
    ?>
    
</div>