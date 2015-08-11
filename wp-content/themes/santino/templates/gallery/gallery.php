<div id="post-<?php the_ID(); ?>" <?php post_class( 'bw--rail' ); ?>>

    <div id="rail-screen">
        <div id="rail-slider">
            <div id="rail">
                <?php foreach( Bw::gallerize_by_id( Bw::get_meta( 'gallery' ), 'thumb_1920x1080' ) as $image ): ?>

                    <img class="copyright" style="margin-right:<?php Bw::the_meta( 'isotope_elements_space' ); ?>px" src="<?php echo $image['thumb'][0]; ?>" alt="<?php echo $image['title']; ?>" data-title="<?php echo $image['title']; ?>">

                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <ul id="rail-hidden">
        <?php foreach( Bw::gallerize_by_id( Bw::get_meta( 'gallery' ) ) as $image ): ?>
            <?php
            $post_id = $image['id'];
            $post_object = get_post( $post_id );
            $description = $post_object->post_content;
            ?>
            <li data-title="<?php echo $image['title']; ?>"><?php echo $description; ?></li>
        <?php endforeach; ?>
    </ul>

    <div id="rail-info" data-from="<?php _e( 'from', BW_THEME ); ?>" data-photos="<?php _e( 'photos', BW_THEME ); ?>">
        
        <div class="img-title-holder">
            <h3 class="img-title"></h3>
        </div>
        
        <span class="separator white"></span>
        
        <p class="img-desc"></p>
        
        <ul id="rail-source">
            <?php foreach( Bw::gallerize_by_id( Bw::get_meta( 'gallery' ) ) as $image ): ?>
                <?php
                $source_label = Bw::get_meta('image_source_label', $image['id']);
                $source_url = Bw::get_meta('image_source_url', $image['id']);
                ?>
                
                <li data-id="<?php echo $image['id']; ?>">
                    <?php if( !empty($source_url) and !empty($source_label) ): ?>
                    <a href="<?php echo $source_url; ?>" <?php echo ( ( substr($source_url, 0, 4) == 'http' ) ? 'target="_blank"' : '' ); ?>>
                        <?php echo $source_label; ?>
                    </a>
                    <?php endif; ?>
                </li>
                
            <?php endforeach; ?>
        </ul>

        <div id="rail-buttons">
            <div class="rail-addthis pointer"><span><i class="fa fa-share-alt" style="padding-right:2px;"></i></span>
                <?php get_template_part( 'templates/share-gallery' ); ?>
            </div>
            <a href="#" class="rail-prev"><span><i class="fa fa-chevron-left" style="padding-right:3px;"></i></span></a>
            <a href="#" class="rail-next"><span><i class="fa fa-chevron-right" style="padding-left:3px;"></i></span></a>
        </div>
        
    </div>

</div>