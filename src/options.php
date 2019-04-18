<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'html5reset'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {
	
	
	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();

	$options[] = array(
		'name' => __('Header Meta', 'html5reset'),
		'type' => 'heading');

// Standard Meta
	$options[] = array(
		'name' => __('Head ID', 'html5reset'),
		'desc' => __("", 'html5reset'),
		'id' => 'meta_headid',
		'std' => 'www-sitename-com',
		'type' => 'text');
	$options[] = array(
		'name' => __('Google Webmasters', 'html5reset'),
		'desc' => __("Speaking of Google, don't forget to set your site up: <a href='http://google.com/webmasters' target='_blank'>http://google.com/webmasters</a>", 'html5reset'),
		'id' => 'meta_google',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Author Name', 'html5reset'),
		'desc' => __('Populates meta author tag.', 'html5reset'),
		'id' => 'meta_author',
		'std' => '',
		'type' => 'text');
	$options[] = array(
		'name' => __('Mobile Viewport', 'html5reset'),
		'desc' => __('Uncomment to use; use thoughtfully!', 'html5reset'),
		'id' => 'meta_viewport',
		'std' => 'width=device-width, initial-scale=1.0',
		'type' => 'text');

// Icons
	//$options[] = array(
	//	'name' => __('Site Favicon', 'html5reset'),
	//	'desc' => __('', 'html5reset'),
	//	'id' => 'head_favicon',
	//	'type' => 'upload');
	//$options[] = array(
	//	'name' => __('Apple Touch Icon', 'html5reset'),
	//	'desc' => __('', 'html5reset'),
	//	'id' => 'head_apple_touch_icon',
	//	'type' => 'upload');

// App: Windows 8
	//$options[] = array(
	//	'name' => __('App: Windows 8', 'html5reset'),
	//	'desc' => __('Application Name', 'html5reset'),
	//	'id' => 'meta_app_win_name',
	//	'std' => '',
	//	'type' => 'text');
	//$options[] = array(
	//	'name' => __('', 'html5reset'),
	//	'desc' => __('Tile Color', 'html5reset'),
	//	'id' => 'meta_app_win_color',
	//	'std' => '',
	//	'type' => 'color');
	//$options[] = array(
	//	'name' => __('', 'html5reset'),
	//	'desc' => __('Tile Image', 'html5reset'),
	//	'id' => 'meta_app_win_image',
	//	'std' => '',
	//	'type' => 'upload');


		
	$options[] = array(
		'name' => __('Contact Information', 'options_check'),
		'type' => 'heading');

// App: Contact
	$options[] = array(
		'name' => __('Contact', 'html5reset'),
		'desc' => __('Street Address', 'html5reset'),
		'id' => 'meta_app_address_street',
		'std' => 'Street',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('City', 'html5reset'),
		'id' => 'meta_app_address_city',
		'std' => 'City',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('Province', 'html5reset'),
		'id' => 'meta_app_address_province',
		'std' => 'Province',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('Postal Code', 'html5reset'),
		'id' => 'meta_app_address_postal',
		'std' => 'Postal Code',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('Country', 'html5reset'),
		'id' => 'meta_app_address_country',
		'std' => 'Canada',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('Phone Number', 'html5reset'),
		'id' => 'meta_app_address_phone',
		'std' => 'Phone Number',
		'type' => 'text');
	$options[] = array(
		'name' => __('', 'html5reset'),
		'desc' => __('Email Address', 'html5reset'),
		'id' => 'meta_app_address_email',
		'std' => 'Email Address',
		'type' => 'text');
		
// Social Media Tab
	$options[] = array(
		'name' => __('Social Media', 'options_check'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Facebook', 'html5reset'),
		'desc' => __('Facebook URL', 'html5reset'),
		'id' => 'meta_app_fb_url',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Twitter', 'html5reset'),
		'desc' => __('Twitter URL', 'html5reset'),
		'id' => 'meta_app_twitter_url',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Google+', 'html5reset'),
		'desc' => __('Google+ URL', 'html5reset'),
		'id' => 'meta_app_googleplus_url',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('Instagram', 'html5reset'),
		'desc' => __('Instagram URL', 'html5reset'),
		'id' => 'meta_app_instagram_url',
		'std' => '',
		'type' => 'text');

	$options[] = array(
		'name' => __('YouTube', 'html5reset'),
		'desc' => __('YouTube URL', 'html5reset'),
		'id' => 'meta_app_youtube_url',
		'std' => '',
		'type' => 'text');

	return $options;

}
