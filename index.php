<?php
/**
 * Elgg custom index page
 * 
 */
 
//custom index css

$css_url = 'mod/myspace/views/default/myspace/css-login.css';
elgg_register_css('css', $css_url);
elgg_load_css('css');	

//custom login
$login = elgg_view('myspace/login');

if (elgg_is_logged_in()) {
	forward('activity');
}

echo elgg_view_page('', $login);
