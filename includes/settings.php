<?php
//include("includes/connect.php");

$settings = array(
	'site_name' => 'Site Name',
	'base_url' => '/template-php-bs',
	'navigation' => array(),
	'tel_no' => '01793 123456',
	'contact_email' => 'info@domain.co.uk',
	'address' => 'Address line 1, Address line 2, Town, County, Postcode'
);

function base_url($url = null) {
	global $settings;
	return $settings['base_url'] . '/' . $url;
}

//define pages
$settings['navigation']['Home'] = base_url('index.php');
$settings['navigation']['About'] = base_url('about.php');
$settings['navigation']['Page 3'] = base_url('page3.php');
$settings['navigation']['Page 4'] = base_url('page4.php');
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
