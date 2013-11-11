<?php
/**
 * Display location only for wire post in the activity view
 * 
 * 
 */

$subject = $vars['item']->getSubjectEntity();

$ip_address = $subject->ip_address;
$url = 'http://www.geoplugin.net/json.gp?ip=' . $ip_address;
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$geo_location = $data['geoplugin_city'] . ', ' . $data['geoplugin_region'];

echo '<div class="user-location">';
echo '<img src="' . elgg_get_site_url() . 'mod/myspace/images/location.png' . '" />';
echo $geo_location;
echo '</div>';