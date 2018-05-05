<?php

function current_page_url() {
	$pageURL = 'http';
	if (isset($_SERVER["HTTPS"]) == "on") {$pageURL .= "s";}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
	$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}

function site_url($settings, $url = null) {
	return $settings['base_url'] . '/' . $url;
}

function output_menu($menu) {
	$current_url = current_page_url();
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
