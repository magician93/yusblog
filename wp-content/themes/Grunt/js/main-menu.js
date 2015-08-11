<!-- BEGIN SHOW/HIDE MAIN MENU -->
jQuery('.menu-button').click(function(){
	if(jQuery('#menu').hasClass('menu-active'))
	{

		jQuery('#menu').removeClass('menu-active');
		jQuery('.menu-button').removeClass('menu-button-hover');
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
		jQuery('.menu-close').removeClass('menu-close-opacity');
		setTimeout(function(){
			jQuery('.menu-close').removeClass('menu-close-active');
		},750);

		/* content elements */
		jQuery('.wrapper-outer').removeClass('wrapper-outer-active-scale');
	}
	else
	{

		jQuery('#menu').addClass('menu-active');
		jQuery('.menu-button').addClass('menu-button-hover');
		jQuery(".menu-button").addClass("menu-button-hover-touch");
		jQuery('.menu-close').addClass('menu-close-active');
		setTimeout(function(){
			jQuery('.menu-close').addClass('menu-close-opacity');
		},50);
		
		/* content elements */
		jQuery('.wrapper-outer').addClass('wrapper-outer-active-scale');

	}
});


jQuery(".menu-button").hover(
	function() {
		jQuery(".menu-button").addClass("menu-button-hover-touch");
	},
	function() {
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
});
<!-- END SHOW/HIDE MAIN MENU -->


<!-- BEGIN HIDE WHEN CLICKED/TAPPED OUTSIDE MENU -->
jQuery('.menu-close').on('click', function() {
	
		jQuery('#menu').removeClass('menu-active');
		jQuery('.menu-button').removeClass('menu-button-hover');
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
		jQuery('.menu-close').removeClass('menu-close-opacity');
		setTimeout(function(){
			jQuery('.menu-close').removeClass('menu-close-active');
		},750);

		/* content elements */
		jQuery('.wrapper-outer').removeClass('wrapper-outer-active-scale');

});
<!-- END HIDE WHEN CLICKED/TAPPED OUTSIDE MENU -->