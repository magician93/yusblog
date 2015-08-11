<div id="post-<?php the_ID(); ?>" <?php post_class( 'bw--kenburns' ); ?>>
	
	<div id="kenburns"></div>
    
	<div id="kb-images">
        <?php foreach(Bw::gallerize_by_id( Bw::get_meta('gallery'), 'thumb_1920x1080' ) as $image): ?>
            <span data-src="<?php echo $image['thumb'][0] ?>"></span>
        <?php endforeach; ?>
	</div>
	
</div>