<div class="bw--white bw--white-delay page-holder page-white full-page">
	<div class="page">
		
		<div class="page-title to--white">
			<h1><?php the_title(); ?></h1>
			<h2><?php _e('This is a password protected area', BW_THEME); ?></h2>
			<span class="separator"></span>
		</div>
		
		<div class="password-protection">
			<form method="post" action=" <?php echo site_url(); ?>/wp-login.php?action=postpass" name="password-protection">
				
				<div class="fa fa-lock to--white"></div>
				
                <div class="to--white">
                    <p>
                        <?php if(!empty($_POST)) {d($_POST);exit;} echo __('Please enter your password here:', BW_THEME); ?>
                        <?php if(defined('BW_INVALID_POST_PASS')) _e('The password you entered is wrong, please try again.'); ?>
                    </p>
                    <div class="fields">
                        <input name="post_password" class="ClientPasswordInput" id="post-password" type="password" placeholder="<?php echo __('Password', BW_THEME); ?>" autocomplete="off">
                        <button type="submit" class="ClientSubmit" name="Submit"><i class="fa fa-arrow-right"></i></button>
                    </div>
				</div>
				
			</form>
		</div>
	</div>
</div>