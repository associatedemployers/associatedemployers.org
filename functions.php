<?php

function associatedemployers_customize_register( $wp_customize ) {
	//controls for theme (like the slider) C:
	$wp_customize->add_section(
		'slider_section',
		array(
			'title' => __( 'Slider Content', 'associatedemployers' ),
			'capability' => 'edit_theme_options',
			'description' => __( 'Edit the slider content', 'associatedemployers' )
			)
	);
	//SLIDE 1
	$wp_customize->add_setting(
		'ae_options[slider_slide1_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide1_heading]',
		array(
			'label' => 'Slide 1 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '1'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide1_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide1_subheading]',
		array(
			'label' => 'Slide 1 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '2'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide1_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide1_image',
		array(
			'label' => __('Slide 1 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide1_image]',
			'priority' => '3'
			)
		)
	);
	//SLIDE 2
	$wp_customize->add_setting(
		'ae_options[slider_slide2_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide2_heading]',
		array(
			'label' => 'Slide 2 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '4'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide2_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide2_subheading]',
		array(
			'label' => 'Slide 2 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '5'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide2_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide2_image',
		array(
			'label' => __('Slide 2 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide2_image]',
			'priority' => '6'
			)
		)
	);
	//SLIDE 3
	$wp_customize->add_setting(
		'ae_options[slider_slide3_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide3_heading]',
		array(
			'label' => 'Slide 3 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '7'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide3_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide3_subheading]',
		array(
			'label' => 'Slide 3 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '8'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide3_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide3_image',
		array(
			'label' => __('Slide 3 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide3_image]',
			'priority' => '9'
			)
		)
	);
	//SLIDE 4
	$wp_customize->add_setting(
		'ae_options[slider_slide4_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide4_heading]',
		array(
			'label' => 'Slide 4 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '10'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide4_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide4_subheading]',
		array(
			'label' => 'Slide 4 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '11'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide4_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide4_image',
		array(
			'label' => __('Slide 4 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide4_image]',
			'priority' => '12'
			)
		)
	);
	//SLIDE 5
	$wp_customize->add_setting(
		'ae_options[slider_slide5_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide5_heading]',
		array(
			'label' => 'Slide 5 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '13'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide5_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide5_subheading]',
		array(
			'label' => 'Slide 5 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '14'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide5_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide5_image',
		array(
			'label' => __('Slide 5 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide5_image]',
			'priority' => '15'
			)
		)
	);
	//SLIDE 6
	$wp_customize->add_setting(
		'ae_options[slider_slide6_heading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide6_heading]',
		array(
			'label' => 'Slide 6 Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '16'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide6_subheading]',
		array(
			'capability' => 'edit_theme_options',
			'type' => 'option',
			'default' => ''
		)
	);
	$wp_customize->add_control(
		'ae_options[slider_slide6_subheading]',
		array(
			'label' => 'Slide 6 Sub-Heading',
			'section' => 'slider_section',
			'type' => 'text',
			'priority' => '17'
			)
	);
	$wp_customize->add_setting(
		'ae_options[slider_slide6_image]',
		array(
			'default' => 'image.jpg',
			'capability' => 'edit_theme_options',
			'type' => 'option'
			)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control($wp_customize, 'slider_slide6_image',
		array(
			'label' => __('Slide 6 Image', 'associatedemployers'),
			'section' => 'slider_section',
			'settings' => 'ae_options[slider_slide6_image]',
			'priority' => '18'
			)
		)
	);
}
add_action( 'customize_register', 'associatedemployers_customize_register' );

function ae_options($name, $default = false) {
	$options = ( get_option( 'ae_options' ) ) ? get_option( 'ae_options' ) : null; // return the option if it exists
	if(isset( $options[ $name ] )) {
		return apply_filters( 'ae_options_$name', $options[ $name ] );
	}
	return apply_filters( 'ae_options_$name', $default );
}

add_filter( 'rewrite_rules_array','my_insert_rewrite_rules' );
add_filter( 'query_vars','my_insert_query_vars' );
add_action( 'wp_loaded','my_flush_rules' );

function my_flush_rules(){ $rules = get_option('rewrite_rules'); if(!isset( $rules['(membership/members-only/add-sub-accounts)/(\d*)$'])) { global $wp_rewrite; $wp_rewrite->flush_rules(); } }
function my_insert_rewrite_rules($rules) { $newrules = array();  $newrules['(membership/members-only/add-sub-accounts)/(\d*)$'] = 'index.php?pagename=$matches[1]&user_edit=$matches[2]';  return $newrules + $rules; }
function my_insert_query_vars( $vars ) { array_push($vars, 'user_edit'); return $vars; }

function unique_id($l = 6) { return substr(md5(uniqid(mt_rand(), true)), 0, $l); }

add_action("init", "blackbox_disable");
function blackbox_disable() {
    if(!current_user_can("edit_plugins")) {
        remove_action('admin_footer', array("BlackBox_Hook", "footer"));
        remove_action('wp_footer', array("BlackBox_Hook", "footer"));
    }
}

add_action( 'init', 'register_shortcodes');
function register_shortcodes(){ add_shortcode('google-map', 'googlemap'); }
function googlemap() { return '<iframe width="560" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?ie=UTF8&amp;q=Associated+Employers+2727+Central+Avenue,+Suite2+Billings,+Montana+59102&amp;fb=1&amp;gl=us&amp;hq=Associated+Employers+2727+Central+Avenue,+Suite2+Billings,+Montana+59102&amp;cid=0,0,9949643869833810416&amp;t=m&amp;ll=45.770187,-108.581743&amp;spn=0.008981,0.024033&amp;z=15&amp;iwloc=near&amp;output=embed"></iframe>'; }

if(function_exists('register_sidebar')) { register_sidebar(array('name' => __('Sidebar Widget Area'), 'id' => 'sidebarwidgetarea', 'description' => __('Widget container for the Sidebar', 'twentyeleven'))); }

function content($limit) {
	$content = explode(' ', get_the_content());
	$content = implode(" ", $content);
	$content = preg_replace('/<div (.*?)>(.*?)<\/div>/si','',$content);
	$content = preg_replace('/(\[.*\])/','',$content);
	$content = preg_replace('/<img[^>]+\>/i', '', $content);
	$content = preg_replace('/<iframe (.*?)>(.*?)<\/iframe>/si','',$content);
	$content = iconv('utf-8', 'ascii//TRANSLIT', $content);
	$content = trim($content);
	$content = explode(' ', $content, $limit);
	array_pop($content);
	$content = implode(" ", $content);
	$content = apply_filters('the_content', $content);
	$content = trim(strip_tags($content)) . '&hellip; ';
	return $content;
}
//get attribute from html tag
function getAttribute($attrib, $tag){ $re = '/' . preg_quote($attrib) . '=([\'"])?((?(1).+?|[^\s>]+))(?(1)\1)/is'; if (preg_match($re, $tag, $match)) { return $match[2]; } return false; }

///////////////////////////////////////////////
// EDIT PROFILE
///////////////////////////////////////////////

//Edit Profile - Company
add_filter("gform_field_value_f3_company", "ep_company", 10, 3);
function ep_company($value){  global $wpdb; global $wp_query; session_start();  $sql = "SELECT company FROM ae_company WHERE id = " . $_SESSION['comp_id'];  $result = $wpdb->get_results($wpdb->prepare($sql, 0));  if($result) { return $result[0]->company; } }

//Edit Profile - Address
add_filter("gform_field_value_f3_address", "ep_address", 10, 3);
function ep_address($value){ global $wpdb; session_start(); $sql = "SELECT address FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->address; } }

//Edit Profile - Address2
add_filter("gform_field_value_f3_address2", "ep_address2", 10, 3);
function ep_address2($value){ global $wpdb; session_start(); $sql = "SELECT address2 FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->address2; } }

//Edit Profile - City
add_filter("gform_field_value_f3_city", "ep_city", 10, 3);
function ep_city($value){ global $wpdb; session_start(); $sql = "SELECT city FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->city; } }

//Edit Profile - State
add_filter("gform_field_value_f3_state", "f3_state", 10, 3);
function f3_state($value){ global $wpdb; global $member_database; session_start(); $sql = "SELECT state FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->state; } }

//Edit Profile - Zip
add_filter("gform_field_value_f3_zip", "ep_zip", 10, 3);
function ep_zip($value){ global $wpdb; session_start(); $sql = "SELECT zip FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->zip; } }

//Edit Profile - First Name
add_filter("gform_field_value_f3_first_name", "ep_first_name", 10, 3);
function ep_first_name($value){ global $wpdb; session_start(); $sql = "SELECT first_name FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->first_name; } }

//Edit Profile - Last Name
add_filter("gform_field_value_f3_last_name", "ep_last_name", 10, 3);
function ep_last_name($value){ global $wpdb; session_start(); $sql = "SELECT last_name FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->last_name; } }

//Edit Profile - Email
add_filter("gform_field_value_f3_email", "ep_email", 10, 3);
function ep_email($value){ global $wpdb; session_start(); $sql = "SELECT email FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->email; } }

//Edit Profile - Phone
add_filter("gform_field_value_f3_phone", "ep_phone", 10, 3);
function ep_phone($value){ global $wpdb; session_start(); $sql = "SELECT phone FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->phone; } }

//Edit Profile - Alt. Phone
add_filter("gform_field_value_f3_alt_phone", "ep_alt_phone", 10, 3);
function ep_alt_phone($value){ global $wpdb; session_start(); $sql = "SELECT phone_alt FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->phone_alt; } }

//Edit Profile - Fax
add_filter("gform_field_value_f3_fax", "ep_fax", 10, 3);
function ep_fax($value){ global $wpdb; session_start(); $sql = "SELECT fax FROM ae_company WHERE id = " . $_SESSION['comp_id']; $result = $wpdb->get_results($wpdb->prepare($sql, 0)); if($result) { return $result[0]->fax; } }

add_filter('gform_after_submission_3', 'profile_after_submission', 10, 3);
function profile_after_submission($entry, $form) {
	global $wpdb; session_start();
	$company = $entry["9"];
	$address = $entry["7.1"];
	$address2 = $entry["7.2"];
	$city = $entry["7.3"];
	$state = $entry["7.4"];
	$zip = $entry["7.5"];
	$first_name = $entry["1.3"];
	$last_name = $entry["1.6"];
	$email = $entry["2"];
	$phone = $entry["4"];
	$phone_alt = $entry["5"];
	$fax = $entry["6"];

	$password = $entry["3"];
	$sql_extra = '';
	if($password) { $sql_extra = ", password = MD5('" . $password . "') "; }

	$sql = "UPDATE ae_company SET company = '$company', address = '$address', address2 = '$address2', city = '$city', state = '$state', zip = '$zip',
		first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone', phone_alt = '$phone_alt', fax = '$fax' " . $sql_extra . "
		WHERE id = " . $_SESSION['comp_id'];
	$result = $wpdb->get_results($wpdb->prepare($sql, 0));
}
///////////////////////////////////////////////
// EDIT SUB ACCOUNT
///////////////////////////////////////////////
//Edit Sub Account - First Name
add_filter("gform_field_value_f2_first_name", "es_first_name", 10, 2);
function es_first_name($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT first_name FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->first_name; }
	}
}
//Edit Sub Account - Last Name
add_filter("gform_field_value_f2_last_name", "es_last_name", 10, 2);
function es_last_name($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT last_name FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->last_name; }
	}
}
//Edit Sub Account - Email
add_filter("gform_field_value_f2_email", "es_email", 10, 2);
function es_email($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT email FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->email; }
	}
}
//Edit Sub Account - Phone
add_filter("gform_field_value_f2_phone", "es_phone", 10, 2);
function es_phone($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT phone FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->phone; }
	}
}
//Edit Sub Account - Alt. Phone
add_filter("gform_field_value_f2_alt_phone", "es_alt_phone", 10, 2);
function es_alt_phone($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT phone_alt FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->phone_alt; }
	}
}
//Edit Sub Account - Fax
add_filter("gform_field_value_f2_fax", "es_fax", 10, 2);
function es_fax($value){
	global $wpdb; global $wp_query; session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	if($id) {
		$sql = "SELECT fax FROM ae_user WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		if($result) { return $result[0]->fax; }
	}
}
add_filter('gform_after_submission_2', 'user_after_submission', 10, 2);
function user_after_submission($entry, $form) {
	global $wpdb;
	global $wp_query;
	session_start();
	$id = $wp_query->query_vars['user_edit'];
	if(!$id && $_SESSION['user_type'] == 'sub_account') { $id = $_SESSION['user_id']; }

	$first_name = $entry["1.3"];
	$last_name = $entry["1.6"];
	$email = $entry["2"];
	$phone = $entry["4"];
	$phone_alt = $entry["5"];
	$fax = $entry["6"];
	$password = $entry["3"];
	$sql_extra = '';
	if($password) { $sql_extra = ", password = MD5('" . $password . "') "; }

	if($id) { //UPDATE
		$sql = "UPDATE ae_user SET first_name = '$first_name', last_name = '$last_name', email = '$email', phone = '$phone', phone_alt = '$phone_alt', fax = '$fax' " . $sql_extra . " WHERE id = " . $id . " AND company_id = " . $_SESSION['comp_id'];
	} else { //NEW
		$sql = "INSERT INTO ae_user (first_name, last_name, email, phone, phone_alt, fax, password, company_id) VALUES ('$first_name', '$last_name', '$email', '$phone', '$phone_alt', '$fax', MD5('" . $password . "'), " . $_SESSION['comp_id'] . ")";
	}

	$result = $wpdb->get_results($wpdb->prepare($sql, 0));
}
///////////////////////////////////////////////
// New Member
///////////////////////////////////////////////
add_filter('gform_after_submission_5', 'newmember_after_submission', 10, 5);
function newmember_after_submission($entry, $form) {
	global $wpdb; session_start();
	$company = $entry["9"];
	$address = $entry["7.1"];
	$address2 = $entry["7.2"];
	$city = $entry["7.3"];
	$state = $entry["7.4"];
	$zip = $entry["7.5"];
	$first_name = $entry["1.3"];
	$last_name = $entry["1.6"];
	$email = $entry["2"];
	$phone = $entry["4"];
	$phone_alt = $entry["5"];
	$fax = $entry["6"];

	$password = $entry["3"];

	$sql = "INSERT INTO ae_company (company, address, address2, city, state, zip, first_name, last_name, email, phone, phone_alt, fax, password, active) VALUES
	('$company', '$address', '$address2', '$city', '$state', '$zip', '$first_name', '$last_name', '$email', '$phone', '$phone_alt', '$fax', MD5('" . $password . "'), 1)";
	$result = $wpdb->get_results($wpdb->prepare($sql, 0));
}
///////////////////////////////////////////////
// RENEWALS
///////////////////////////////////////////////
add_filter("gform_field_value_f4_company_name", "renw_company", 10, 4);
function renw_company($value){
	global $wpdb; global $wp_query; session_start();
	$sql = "SELECT company FROM ae_company WHERE id = " . $_SESSION['comp_id'];
	$result = $wpdb->get_results($wpdb->prepare($sql, 0));
	if($result) { return $result[0]->company; }
}
add_filter('gform_after_submission_2', 'renewal_after_submission', 10, 2);
function renewal_after_submission($entry, $form) {
	// Possibly update payment_due_date in ae_company
	// table with 1 extra year from stored date/now.
}
add_filter("gform_submit_button", "form_submit_button", 10, 2);
function form_submit_button($button, $form){
	global $wpdb; global $wp_query;
	$value = getAttribute('value', $button);
	$id = $wp_query->query_vars['user_edit'];
	if($id && is_page('add-sub-accounts')) { $value = 'Update Account'; }
	return "<button class='button btn btn-primary' id='gform_submit_button_{$form["id"]}'><span>{$value}</span></button>";
}
//Hides SSL warning for testing purposes only
add_filter("gform_is_ssl", "set_ssl");
function set_ssl() { return true; }

add_filter('gform_pre_render_7', 'populate_webinars');
function populate_webinars ($form) {
	global $wpdb; 
	$table_name = $wpdb->prefix . "webinars"; 
	$sql = "SELECT * FROM $table_name";
	$webinars = $wpdb->get_results($wpdb->prepare($sql));
	$i = 0;

	foreach($webinars as $webinar) { // : is to insert the title into the Gravity Forms entry for ease of viewing orders 
		$webinars[$i++] = array('text' => $webinar->title, 'value' => $webinar->id . ":" . $webinar->title, 'price' => '$' . $webinar->price); //isSelected' => $isSelected, 
	}

	$form['fields'][6]['choices'] = $webinars;
	return $form;
}
add_action("gform_confirmation_8", "after_submission", 10, 8);
function after_submission($confirmation, $form, $lead, $ajax) {
	global $wpdb;
	$code = $lead[1];
	//$ajax = true;
	$sql = "SELECT * FROM wp_webinar_code LEFT JOIN wp_webinars ON wp_webinar_code.webinar_id = wp_webinars.id WHERE webinar_code = '$code'";
	$results = $wpdb->get_results($wpdb->prepare($sql));
	if(!empty($results) && ($results[0]->expiration_date >= date('Y-m-d') || $results[0]->expiration_date == NULL)) {
		$confirmation = '<h1>' . $results[0]->title . '</h1>
			<video class="sublime" width="640" height="360" title="Present Party" data-uid="a240e92d" data-autoresize="fit">
			<source src="' . $results[0]->url . '" />
			</video>';
	} else if(empty($results)) {
		$confirmation = 'Webinar code is not valid.';
	} else {
		$confirmation = 'Webinar code is expired.';
	}
	return $confirmation;
}
add_filter('gform_notification_7', 'gform_notification', 10, 7);
function gform_notification( $notification, $form, $entry ) {
	if($notification["to"] != '{admin_email}') {
		global $wpdb;
		$notification['message'] = 'Please use the following codes to view purchased webinar(s) on our "webinars for purchase" page\n';
		for($i = 1; $i <= 20; $i++) { // Change if increase max number of webinars (increase Gforms checkboxes count)
			if($entry["11.$i"] != '') {
				$exploded = explode('|', $entry["11.$i"]); // value from price
				$exploded[0] = explode(':', $exploded[0]); // Separate title from id
				$id = $exploded[0][0];
				$title = $exploded[0][1];
				$entry_id = $entry["id"];
				$code = md5(uniqid($entry["date_created"].$entry["11.$i"], true)); // Create hash of timestamp and current webinar for unique code
				$duration_sql = "SELECT duration, unlimited FROM wp_webinars WHERE id=$id";
				$duration_result = $wpdb->get_results($wpdb->prepare($duration_sql));
				$duration = $duration_result[0]->duration;
				$unlimited = $duration_result[0]->unlimited;
				$first = $entry["1.3"];
				$last = $entry["1.6"];
				$email = $entry["3"];
				$total = $entry["6"];

				if($unlimited != 1) {
					$date = date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+$duration, date("Y"))); // Calculate expiration date
					$sql = "INSERT INTO wp_webinar_code
					(webinar_id, transaction_id, first, last, email, total, title, webinar_code, expiration_date)
					VALUES
					($id, $entry_id, '$first', '$last', '$email', '$total', '$title', '$code', '$date')";
				} else {
					$sql = "INSERT INTO wp_webinar_code
					(webinar_id, transaction_id, first, last, email, total, title, webinar_code, expiration_date)
					VALUES
					($id, $entry_id, '$first', '$last', '$email', '$total', '$title', '$code', NULL)";
				}

				$wpdb->query($wpdb->prepare($sql));

				$notification['message'] .= "Title: $title: \\nAccess Code: $code\\n";
			}
		}
		$notification['message'] .= 'Thank you for your interest in Associated Employers!';
	}

	return $notification;
}

//Removes Entries from the Database
//add_action('gform_post_submission_1', 'remove_form_entry', 10, 1);
add_action('gform_post_submission_2', 'remove_form_entry', 10, 2);
add_action('gform_post_submission_3', 'remove_form_entry', 10, 3);
add_action('gform_post_submission_8', 'remove_form_entry', 10, 5);
function remove_form_entry($entry, $form){
	global $wpdb;
	$lead_id = $entry['id'];
	$lead_table = RGFormsModel::get_lead_table_name();
	$lead_notes_table = RGFormsModel::get_lead_notes_table_name();
	$lead_detail_table = RGFormsModel::get_lead_details_table_name();
	$lead_detail_long_table = RGFormsModel::get_lead_details_long_table_name();

	$sql = $wpdb->prepare("DELETE FROM $lead_detail_long_tableWHERE lead_detail_id IN(SELECT id FROM $lead_detail_table WHERE lead_id=%d)", $lead_id);
	//Delete from detail long
	$wpdb->query($sql);
	//Delete from lead details
	$sql = $wpdb->prepare("DELETE FROM $lead_detail_table WHERE lead_id=%d", $lead_id);
	$wpdb->query($sql);
	//Delete from lead notes
	$sql = $wpdb->prepare("DELETE FROM $lead_notes_table WHERE lead_id=%d", $lead_id);
	$wpdb->query($sql);
	//Delete from lead
	$sql = $wpdb->prepare("DELETE FROM $lead_table WHERE id=%d", $lead_id);
	$wpdb->query($sql);
}

?>