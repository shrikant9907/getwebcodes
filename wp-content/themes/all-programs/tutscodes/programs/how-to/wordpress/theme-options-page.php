<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}


// Theme Options page
add_action('admin_menu', 'add_appearance_theme_option');
function add_appearance_theme_option(){
     add_submenu_page( 
     	'themes.php', 
     	'Theme Options', 
     	'Theme Options', 
     	'manage_options', 
     	'theme_options', 
     	'site_theme_options'
     );
}

// Theme Options page
function site_theme_options() {
	
    if (isset($_POST['site_theme_options']) && ($_POST['site_theme_options'] == 'yes')) {
		update_option('site_theme_options', $_POST);
		
		update_option('blogname', trim($_POST['site_name']));
		update_option('site_name', trim($_POST['site_name']));
	}

	$themeOptions = get_option('site_theme_options');
	extract($themeOptions);  

    // Default Logo Location
    if (!$site_logo) {
        $site_logo = get_stylesheet_directory_uri() . '/images/logo.png';
    }

    // Default Favicon Location
    if (!$site_favicon) {
        $site_favicon = get_stylesheet_directory_uri() . '/images/favicon.png';
    }

    ?>
	<div class="section panel backend-structure-ui">
		<h1>Theme Options</h1>
        <hr />
        <h3>General Options</h3>
		<form method="post" enctype="multipart/form-data" action="themes.php?page=theme_options">
		<input type="hidden" name="site_theme_options" value="yes" />	
        <div class="row">
        	<div class="col-4">
        		<label>Site Name</label>
        	</div>
        	<div class="col-8">
        		<input type="text" required class="text-regular" name="site_name" value="<?php echo $site_name; ?>" placeholder="Enter site name or blog name." />
        	</div>
        </div>

        <div class="row">
        	<div class="col-4">
        		<label>Site Logo</label>
        	</div>
        	<div class="col-8">
        		<input type="text" class="text-full" name="site_logo" value="<?php echo $site_logo; ?>" placeholder="Enter logo full URL." />
        	</div>
        </div>

        <div class="row">
        	<div class="col-4">
        		<label>Site Favicon</label>
        	</div>
        	<div class="col-8">
        		<input type="text" class="text-full" name="site_favicon" value="<?php echo $site_favicon; ?>" placeholder="Enter favicon URL." />
        	</div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Site Copyright</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_copyright" value="<?php echo $site_copyright; ?>" placeholder="Enter Copyright." />
            </div>
        </div>
        <hr />
        <h3>Contact Details</h3>
        <div class="row">
            <div class="col-4">
                <label>Address</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_address" value="<?php echo $site_address; ?>" placeholder="Enter Your Address." />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Contact Number(s)</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_number" value="<?php echo $site_number; ?>" placeholder="Enter contact numbers." />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Email Address</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_email" value="<?php echo $site_email; ?>" placeholder="Enter Your Email Address." />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Open Hours</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_open_hours" value="<?php echo $site_open_hours; ?>" placeholder="Enter Open Hours." />
            </div>
        </div>
        <hr />
        <h3>CDN Options</h3>
        <div class="row">
            <div class="col-4">
                <label>CDN URL</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="site_cdn_url" value="<?php echo $site_cdn_url; ?>" placeholder="Enter CDN URL." />
            </div>
        </div>
        <hr />
        <h3>Extra Options</h3>
        <div class="row">
            <div class="col-4">
                <label>Google Verfication Code</label>
            </div>
            <div class="col-8">
                <input type="text" class="text-full" name="google_verification" value="<?php echo $google_verification; ?>" placeholder="Enter google verifcation code." />
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Google Analytics Code</label>
            </div>
            <div class="col-8">
                <textarea rows="4" class="text-full" name="google_analytics" placeholder="Enter google analytics code."><?php echo $google_analytics; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Header Scripts/Styles</label>
            </div>
            <div class="col-8">
                <textarea rows="4" class="text-full" name="header_extra_scripts" placeholder="Enter extra scripts for header."><?php echo $header_extra_scripts; ?></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label>Footer Scripts</label>
            </div>
            <div class="col-8">
                <textarea rows="4" class="text-full" name="footer_extra_scripts" placeholder="Enter extra scripts for footer."><?php echo $header_extra_scripts; ?></textarea>
            </div>
        </div>

		<p class="submit">
       	 <input type="submit" class="button-primary" value="<?php _e('Update Options') ?>" />
		</p>            
		</form>
	</div>
	<?php

}