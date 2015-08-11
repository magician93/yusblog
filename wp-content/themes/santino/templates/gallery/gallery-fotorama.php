<div id="post-<?php the_ID(); ?>" <?php post_class( 'bw--fotorama' ); ?>>
	
	<div id="fotorama" class="fotorama" data-keyboard="true" data-auto="false" data-autoplay="3000">
		
		<?php foreach(Bw::gallerize_by_id( Bw::get_meta('gallery'), 'thumb_1920x1080' ) as $image): ?>
			
			<img src="<?php echo $image['thumb'][0] ?>" alt="<?php echo $image['title'] ?>">
			
		<?php endforeach; ?>
			
	</div>
	
</div>