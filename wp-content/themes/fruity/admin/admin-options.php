<?php

/*********************************************
* General Options
*********************************************
*/
$this->admin_option(array('General', 1),
	'Title', 'maintitle', 
	'text', 'Fruity WP', 
	array('help' => 'Enter your website title (displayed on each page on top).', 'display'=>'extended')
);

$this->admin_option('General',
	'Custom CSS', 'custom_css', 
	'textarea', '', 
	array('help' => '')
);

$this->admin_option('General',
	'Analytics Code', 'analytics_code', 
	'textarea', '', 
	array('help' => '')
);

$this->admin_option('General',
	'Footer Text', 'footer_text', 
	'textarea', 'Fruity WP',
	array('help' => '')
);


/*********************************************
* Theme Colors
*********************************************
*/
$this->admin_option(array('Colors', 2),
	'Theme Color', 'theme_color', 
	'colorpicker', '415057', 
	array('help' => 'Main website color (default = 415057)', 'display'=>'extended')
);
$this->admin_option(array('Colors', 2),
	'Theme Color 2', 'theme_color2', 
	'colorpicker', '47C1AB', 
	array('help' => 'Main website color (default = 47C1AB)', 'display'=>'extended')
);
$this->admin_option('Colors', 
	'Typo Color', 'typo_color', 
	'colorpicker', '737373', 
	array('help' => 'Color of main text font across the website (default = 737373)', 'display'=>'extended')
);
$this->admin_option('Colors', 
	'Gray Color', 'gray_color', 
	'colorpicker', 'f6f6f6', 
	array('help' => 'Shade of light gray (default = F6F6F6)', 'display'=>'extended')
);
$this->admin_option('Colors', 
	'Dark Gray Color', 'more_gray_color', 
	'colorpicker', 'efefef', 
	array('help' => 'Shade of dark gray (default = EFEFEF)', 'display'=>'extended')
);
$this->admin_option('Colors', 
	'Wallpaper', 'wallpaper', 
	'imageupload', '', 
	array('help' => 'Will be shown when the website is viewed on larger screens', 'display'=>'extended')
);


/*********************************************
* Widgets
*********************************************
*/
$this->admin_option('Widgets',
	'Search', 'show_search', 
	'select', 'enabled',
	array('help'=>'', 'display'=>'inline', 'options'=>array('enabled' => 'Enabled', 'disabled' => 'Disabled'))
);

/*********************************************
* Contact Options
*********************************************
*/
$this->admin_option(array('Contact Page', 6),
	'Contact Form', 'show_contact_form', 
	'select', 'enabled',
	array('help'=>'', 'display'=>'inline', 'options'=>array('enabled' => 'Enabled', 'disabled' => 'Disabled'))
);
$this->admin_option('Contact Page',
	'Name Label Text', 'label_name', 
	'text', 'Name', 
	array('help' => '')
);
$this->admin_option('Contact Page',
	'Email Label Text', 'label_email', 
	'text', 'Email Address', 
	array('help' => '')
);
$this->admin_option('Contact Page',
	'Contact Label Text', 'label_contact', 
	'text', 'Contact', 
	array('help' => '')
);
$this->admin_option('Contact Page',
	'Message Label Text', 'label_message', 
	'text', 'Message', 
	array('help' => '')
);
$this->admin_option('Contact Page',
	'Submit Contact Form To', 'contact_form_submit_to', 
	'text', 'test@example.com', 
	array('help' => 'Enter the email address where you want to receive notifications when someone contacts you.', 'display'=>"extended")
);
$this->admin_option('Contact Page',
	'Success Message', 'contactsucces', 
	'text', 'Your message has been sent. Thank you!', 
	array('help' => '')
);

/*********************************************
* Reset Options
*********************************************
*/
$this->admin_option(array('Reset Options', 7), 
'Reset Theme Options', 'reset_options', 
'content', '
<div id="admin_reset_options" style="margin-bottom:40px; display:none;"></div>
<div style="margin-bottom:40px;"><a class="admin-button-reset" onclick="if (confirm(\'All the saved settings will be lost! Do you really want to continue?\')) { admincore_form(\'admin_options&do=reset\', \'fpForm\',\'admin_reset_options\',\'true\'); } return false;">Reset Options Now</a></div>', 
array('help' => '<span style="color:red; margin:0 0 40px 0; display:block;"><strong>Note:</strong> All the previous saved settings will be lost!</span>', 'display'=>'extended-top')
);

?>