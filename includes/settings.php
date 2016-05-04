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
	'testimonials' => array()
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
			output_menu($item);
			echo "</ul>";
		} else {
			echo "<a href='{$item}'>$key</a>";
		}
		echo "</li>";
	}
}

//define testimonials
$settings['testimonials'][0] = array(
	'content' => "This is a test testimonial, stating how great the company / a product is... here's some more content just to pad it out a bit.",
	'source' => 'John Smith, Swindon'
);
$settings['testimonials'][1] = array(
	'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pretium ultricies eros, sed ultrices nisi lacinia vel. Cras eu orci feugiat, tempor augue sit amet, ornare tellus. Proin odio ipsum, elementum pellentesque justo at, venenatis condimentum odio.",
	'source' => "Bob Smith, Bristol"
);
$settings['testimonials'][2] = array(
	'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nisi mi, gravida non auctor in, laoreet non odio. Fusce viverra, tortor eu varius pretium, mauris leo tempor mauris, sit amet mattis dui ligula nec urna. Donec rutrum est vitae mauris luctus, non feugiat ante tristique.",
	'source' => "John Snow, The North"
);

function output_testimonials($testimonials) {
	foreach ($testimonials as $key => $item) {
		if (is_array($item)) {
			output_testimonials($item);
		} else {
			if ($key == 'content') {
				echo '<p class="balloon">' . $item . '</p>';
			} else {
				echo '<p class="testimonial-source">&boxh; '.$item.' &boxh;</p>';
			}
		}
	}
}

function getRandomTestimonial($settings) {
	$arr = $settings['testimonials'];
	$random_key = array_rand($arr, 1);
	$content = $arr[$random_key]['content'];
	$source = $arr[$random_key]['source'];
	echo "<p class=\"balloon\">$content</p>";
	echo "<p class=\"testimonial-source\">&boxh; $source &boxh;</p>";
}
