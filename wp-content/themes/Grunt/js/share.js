<!-- BEGIN SHOW/HIDE SHARE BOX -->
jQuery('.button-share').click(
	function() {
		jQuery('#share-wrapper').toggleClass('share-active');
		jQuery('.button-share').removeClass('share-toggle-hover-touch');
});

jQuery(".button-share").hover(
	function() {
		jQuery(".button-share").addClass("share-toggle-hover-touch");
	},
	function() {
		jQuery(".button-share").removeClass("share-toggle-hover-touch");
});

<!-- END SHOW/HIDE SHARE BOX -->

<!-- BEGIN HIDE WHEN TAPPED OUTSIDE SHARE BOX -->
jQuery('html').on('touchstart', function() {

	jQuery("#share-wrapper").removeClass("share-active");
	jQuery('.button-share').removeClass('share-toggle-hover-touch');
});

jQuery('#share-wrapper, .button-share').on('touchstart', function(event){
	event.stopPropagation();
});
<!-- END HIDE WHEN TAPPED OUTSIDE SHARE BOX -->