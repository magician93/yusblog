<?php
/*
Template Name: Contact Form
*/
global $rvd_fruity_theme;
if (isset($_POST['submitted'])) {
	
	$emailTo = $rvd_fruity_theme->get_option('contact_form_submit_to');
	if (!isset($emailTo) || ($emailTo == '') ){
		$emailTo = get_option('admin_email');
	}
	$subject = '[PHP Snippets] From '.$name;
	$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
	$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

	wp_mail($emailTo, $subject, $body, $headers);
	$emailSent = true;
	echo $emailSent;
	die();
}
get_header(); ?>
		<div data-role="header" data-position="fixed">
			<div class="left">
			    <a href="#" class="showMenu menu-button"><img src="<?php echo get_template_directory_uri(); ?>/images/menu-button.png" width="35" /></a>
			    <?php
			    global $post;
			    if ($post->post_parent) {
			    ?>
			    <a href="#" class="back-button"><img src="<?php echo get_template_directory_uri(); ?>/images/back-button.png" width="35" /></a>
			    <?php }?>
			</div>
			<h1>
				<?php
				?>
				<?php if (!is_front_page()) {?>
				<p class="no-margin"><?php wp_title(""); ?></p>
				<p class="no-margin"><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php } else {?>
				<p><?php $rvd_fruity_theme->option('maintitle'); ?></p>
				<?php }?>
			</h1>
		</div>
		<div class="header-shadow"></div>
		<div data-role="content" data-theme="a" class="minus-shadow">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<div class="white-content-box">
				<div class="approved success-message hidden">
					<div class="typo-icon">
					  <?php echo $rvd_fruity_theme->get_option("contactsucces"); ?>
					</div>
				</div>
				<?php if($rvd_fruity_theme->get_option("show_contact_form") == "enabled") {?>
				<form class="ajax-form designed" action="<?php the_permalink(); ?>" method="post">
					<div class="form-element">
					  <label for="txtfullname"><?php echo $rvd_fruity_theme->get_option("label_name"); ?></label>
					  <input  id="txtfullname" name="fullname" type="text" placeholder="required" required />
					</div>
					<div class="form-element">
					  <label for="txtemail"><?php echo $rvd_fruity_theme->get_option("label_email"); ?></label>
					  <input  id="txtemail" name="email" type="email" placeholder="required" required  />
					</div>
					<div class="form-element">
					  <label for="txtcontact"><?php echo $rvd_fruity_theme->get_option("label_contact"); ?></label>
					  <input  id="txtcontact" name="contact" type="tel" placeholder="optional" />
					</div>
					<div class="form-element">
					  <label for="txtmessage"><?php echo $rvd_fruity_theme->get_option("label_message"); ?></label>
					  <textarea  id="txtmessage" name="message" placeholder="required" rows="5" required ></textarea>
					</div>
					<input type="reset" class="button button3" value="Reset" />
					<input data-theme="b" name="submitted" type="submit" class="button button2" value="Send Message" />
				</form>
				<?php }?>

			</div>
		</div>

<?php get_footer(); ?>  