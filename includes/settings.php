<?php
//include("includes/connect.php");

$settings = array(
	'site_name' => 'Site Name',
	//'base_url' => '',
	'base_url' => '/template-php-bs',
	'navigation' => array(),
	'tel_no' => '01793 123456',
	'contact_email' => 'info@domain.co.uk',
	'address' => 'Address line 1, Address line 2, Town, County, Postcode',
	'address_formatted' => 'Address line 1,<br /> Address line 2,<br /> Town, County,<br /> Postcode',
	'google_analytics' => 'UA-XXXXX-X',
	'opening_times' => 'Mon - Fri: 09:00 - 17:00',
	'facebook_url' => 'https://www.facebook.com/',
	'twitter_url' => 'https://www.twitter.com/',
);

function base_url($url = null) {
	global $settings;
	return $settings['base_url'] . '/' . $url;
}

//define pages
$settings['navigation']['Home'] = base_url('index.php');
$settings['navigation']['About'] = base_url('about.php');
$settings['navigation']['Services'] = base_url('services.php');
$settings['navigation']['Testimonials'] = base_url('testimonials.php');
$settings['navigation']['Contact Us'] = base_url('contact.php');
//$settings['navigation']['Contact Us']['Terms'] = base_url('terms.php'); //multi-level not working

function output_menu($menu) {
	$current_url = $_SERVER['PHP_SELF'];
	foreach($menu as $key=>$item) {
		echo ($current_url == $item ? '<li class="active">' : '<li>');
		if (is_array($item)) {
			echo "<ul>";
			print_list($item);
			echo "</ul>";
		} else {
			echo "<a href='{$item}'>$key</a>";
		}
		echo "</li>";
	}
}
