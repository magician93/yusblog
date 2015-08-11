<!-- BEGIN SETTING WEB APP LINK TARGETS -->
jQuery(document).ready(function(){
// on click load all links in same webapp window, except those with the target of _blank and those with a PhotoSwipe class
jQuery("a:not([target='_blank'])").not(".gallery-icon a, .comment-reply-link").click(function (event) {
event.preventDefault();
window.location = jQuery(this).attr("href");
});	
});
<!-- END SETTING WEB APP LINK TARGETS -->