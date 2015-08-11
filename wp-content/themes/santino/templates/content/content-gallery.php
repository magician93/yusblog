<?php
if ( post_password_required() ) {
	get_template_part( 'templates/gallery/password-protection' );
}else{
	get_template_part( 'templates/gallery/gallery', Bw::get_meta('gallery_type') );
}
?>