jQuery('#commentform-fields').hide(0);

/* when comment textarea is clicked */
jQuery('#comment').click(function() {
	jQuery('#commentform-fields').show(0).animate({opacity: 1}, 0);
	jQuery('#cancel-comment').show(0);
	jQuery('#respond').addClass('respond-active');
	jQuery(window).scrollTo( '#comment-wrapper', 400, {offset:-10} );
});
/* when 'reply' link is clicked */
jQuery('.comment-reply-link').click(function() {
	jQuery('#commentform-fields').show(0).animate({opacity: 1}, 0);
	jQuery('#cancel-comment-reply-link, #cancel-comment').show(0);
	jQuery('#respond').addClass('respond-active');
	jQuery(window).scrollTo( '#comment-wrapper', 400, {offset:-20} );
});
/* when comment is cancelled */
jQuery('#cancel-comment').click(function() {
	jQuery('#commentform-fields').animate({opacity: 0}, 0).hide(0);
	jQuery('#cancel-comment').hide(0);
	jQuery('#respond').removeClass('respond-active');
});
/* when comment reply is cancelled */
jQuery('#cancel-comment-reply-link').click(function() {
	jQuery('#cancel-comment-reply-link').hide(0);
	jQuery('#commentform-fields').show(0).animate({opacity: 1}, 0);
	jQuery(window).scrollTo( '#comment-wrapper', 400, {offset:-10} );
});

<!-- BEGIN COMMENTFORM + COMMENTS SLIDE-IN -->
jQuery('.commentwrap').fadeOut(0);

jQuery('.button-comment').toggle(
	function() {
		jQuery('.commentwrap').fadeIn(750);
		jQuery('.commentwrap').addClass('commentwrap-active');
		jQuery('.button-comment').addClass('comments-toggle-hover-touch');
		jQuery(window).scrollTo( '#comment-wrapper', 400, {offset:-10} );
	},
	function() {
		jQuery('.commentwrap').slideUp(750);
		jQuery('.commentwrap').removeClass('commentwrap-active');
		jQuery(".button-comment").removeClass("comments-toggle-hover-touch");
});
<!-- END COMMENTFORM + COMMENTS SLIDE-IN -->