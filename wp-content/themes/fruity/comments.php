<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

	<div data-role="collapsible-set" data-mini="true">
		<div data-role="collapsible">
			<h3><?php comments_number('No Comments', '1 Comment', '% Comments' ); ?></h3>
			
			<?php if ( have_comments() ) : ?>
				<h3><?php comments_number('No Comments', '1 Comment', '% Comments' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
			    
				<ul class="comments-list">
				<?php wp_list_comments(); ?>
				</ul>
			    
				<div class="navigation">
				    <div class="left"><?php previous_comments_link() ?></div>
				    <div class="right"><?php next_comments_link() ?></div>
				    <div class="clear"></div>
				</div>
			<?php else : ?>
			<p>No comments.</p>
			<?php endif; ?>
			
			
			<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>
				<?php
				if (comments_open()) {
					comment_form(array(), $post->ID);
				}
				?>
				<!--<div class="form">
					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
						<?php if ( is_user_logged_in() ) : ?>
							<p class="logged-in-as">Logged in as <?php echo $user_identity; ?>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
						<?php else : ?>
							<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
							<input required class="form_input" type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
							
							<label for="email">Email <?php if ($req) echo "(required)"; ?></label>
							<input required class="form_input" type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
							
							<label for="url">Website</label>
							<input class="form_input" type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" />
						<?php endif; ?>
			
						<label for="url">Write a comment or reply</label>
						<textarea required class="form_textarea" name="comment" id="comment" cols="" rows="" tabindex="4"></textarea>
						<input name="submit" type="submit" id="submit" tabindex="5" class="form_submit" value="Submit Comment" />
						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
					</form>
				</div>
				-->
			<?php endif; // If registration required and not logged in ?>
		</div>
	</div>