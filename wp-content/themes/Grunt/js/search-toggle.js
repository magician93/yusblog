<!-- SHOW SHOW/HIDE SEARCH FORM -->

/* show/hide search form via search icon */
jQuery('#header-search').click(function(){
	if(jQuery('#header-search-wrapper .searchform-wrapper').hasClass('searchform-wrapper-active'))
	{

		/* hide search field */
		setTimeout(function(){ jQuery('#header-search-wrapper .searchform-wrapper').removeClass('searchform-wrapper-active'); },50);
		return false;

	}
	else
	{

		/* hide accordion menu if open */
		jQuery("#menu, #menu-index, .menu-tooltip, .menu-tooltip-index").removeClass("menu-active");
		jQuery('.menu-button').removeClass('menu-button-hover');
		jQuery(".menu-button").removeClass("menu-button-hover-touch");
	
		/* show search field */
		setTimeout(function(){ jQuery('#header-search-wrapper .searchform-wrapper').addClass('searchform-wrapper-active'); },100);
		/* focus search field */
		jQuery('#header-search-wrapper #searchform #s').focus();
		return false;

	}
});

/* hide search field via 'X' button */
jQuery('#searchform-close').click(
	function() {

		/* hide search field */
		setTimeout(function(){ jQuery('#header-search-wrapper .searchform-wrapper').removeClass('searchform-wrapper-active'); },50);
		/* remove hover from search button */
		jQuery('#header-search').unbind('mouseenter mouseleave');
		return false;

});
<!-- END SHOW/HIDE SEARCH FORM -->