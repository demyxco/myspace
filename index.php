<?php
/**
 * Elgg custom index page
 * 
 */

$css_url = 'mod/myspace/css/login.css';
elgg_register_css('css', $css_url);
elgg_load_css('css');	

//custom login
$login = elgg_view('myspace/login');

// if you are logged in, then redirected to the activity page
if (elgg_is_logged_in()) {
	forward('activity');
}

echo elgg_view_page('', $login);
