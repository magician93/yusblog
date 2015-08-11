
<?php
// gallery cover settings
$enable_gallery_cover = get_field( 'enable_gallery_cover' );
$gallery_cover_image = get_field( 'gallery_cover_image' );
$gallery_cover_title = get_field( 'gallery_cover_title' );
if( empty( $gallery_cover_title ) ) {
    $gallery_cover_title = get_the_title();
}
$gallery_cover_text = get_field( 'gallery_cover_text' );
$gallery_cover_color = Bw::get_meta( 'gallery_cover_color' );
?>

<div id="post-<?php the_ID(); ?>" <?php post_class( 'bw--mp bw--isotope ' ); ?>>

    <?php $bw_es = Bw::get_meta( 'isotope_elements_space' ); ?>

    <div class="isotope-bg">
        <div class="isotope-holder" style="padding-bottom:<?php echo $bw_es; ?>px">
            <div class="isotope catalog" data-space="<?php echo $bw_es; ?>" style="padding:<?php echo $bw_es; ?>px 0 <?php echo $bw_es; ?>px <?php echo $bw_es; ?>px">

                <?php if( $enable_gallery_cover and ! empty( $gallery_cover_image['url'] ) ): ?>

                    <div class="isotope-item item-h4 item-w2 gallery-cover" style="margin-bottom:<?php echo $bw_es; ?>px;">

                        <div class="element" style="background: transparent url('<?php echo $gallery_cover_image['url'] ?>') no-repeat 50% 50%; background-size:cover;-moz-background-size:cover;-webkit-background-size:cover;"></div>

                        <div class="table">
                            <div class="info copyright">
                                <h2 style="color:<?php echo $gallery_cover_color; ?>"><?php echo $gallery_cover_title; ?></h2>
                                <span class="separator"></span>
                                <p style="color:<?php echo $gallery_cover_color; ?>"><?php echo $gallery_cover_text; ?></p>
                            </div>
                        </div>
                        
                        <?php
                        $rgb = Bw::hex2rgb($gallery_cover_color);
                        if(count($rgb)) {
                            Bw::add_css('.separator {background-color:' . $gallery_cover_color . ';} .separator:before, .separator:after {background-color:rgba(' . $rgb[0] . ',' . $rgb[1] . ',' . $rgb[2] . ',0.3)}');
                        }
                        ?>

                    </div>

                <?php endif; ?>

                <?php foreach( Bw::gallerize_by_id( Bw::get_meta( 'gallery' ), 'thumb_520x820_true' ) as $image ): ?>

                    <?php $video = get_field( 'embed_video', $image['id'] ); ?>
                    <?php $mp_type = !empty( $video ) ? 'iframe' : 'image'; ?>

                    <div class="isotope-item item-h4 item-w2" style="margin-bottom:<?php echo $bw_es; ?>px;">

                        <a class="mp-item mfp-<?php echo $mp_type; ?>" href="<?php echo!empty( $video ) ? $video : $image['original'][0]; ?>" data-title="<?php echo $image['title']; ?>" data-alt="<?php echo $image['info']; ?>">

                            <div class="element" style="background-image: url('<?php echo $image['thumb'][0] ?>')"></div>

                            <div class="over">
                                <span class="border border-hor after"></span>
                                <span class="border border-hor before"></span>
                                <span class="border border-ver after"></span>
                                <span class="border border-ver before"></span>
                            </div>

                            <?php if( $video ): ?>
                                <span class="icon-video"><i class="fa fa-video-camera"></i></span>
                            <?php endif; ?>
                                
                            <span class="mask over-effect copyright"></span>

                        </a>

                    </div>

                <?php endforeach; ?>

            </div>
        </div>
    </div>

</div>