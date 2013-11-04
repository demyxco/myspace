<?php
/**
 * Elgg user display (details)
 * @uses $vars['entity'] The user entity
 */

$user = elgg_get_page_owner_entity();
$profile_fields = elgg_get_config('profile_fields');

echo '<div id="profile-details" class="elgg-body pll">';
echo "<h2>{$user->name}</h2>";

//echo elgg_view("profile/status", array("entity" => $user));
//elgg_view('output/url', array('is_action' => TRUE));

echo '<ul class="profile-details">';

// Only admins should see this
if (elgg_is_admin_logged_in()) {
	$location = get_metadata_byname($user->guid,'geo_location');
	$ip = get_metadata_byname($user->guid,'ip_address');
	echo $location->value . ' : ' . '<a href="http://www.ip-adress.com/ip_tracer/' . $ip->value . '" target="_blank">' . $ip->value . '</a>';
}          

if ($user->description == "") { echo '<li></li>'; }
else { echo '<li class="profile-aboutme">' . $user->description . '</li>'; }
if ($user->location == "") { echo '<li></li>'; }
else { echo '<li class="profile-location">' . $user->location . '</li>'; }
if ($user->website == "") { echo '<li></li>'; }
else { echo '<li class="profile-website">' . "<a href=\"http://adf.ly/21542/" . $user->website . '">' . $user->website . '</a>' . '</li>'; }
echo '<li class="profile-friends">';


// the number of friends to display
$num = "10";

if (elgg_instanceof($user, 'user')) {
	$html = $user->listFriends('', $num, array(
		'size' => "small",
		'list_type' => 'gallery',
		'pagination' => false,
		'hover' => false,
	));
	if ($html) {
		echo $html;
	}
}
echo '</li>';
echo '</ul>';
echo '</div>';

$activitiy_options = array(
	'limit' => 20,
	'pagination' => false,
	'options_values' => 'friends',
);

$messageboard_options = array(
	'annotations_name' => 'messageboard',
	'guid' => $user->getGUID(),
	'limit' => 1,
	'pagination' => false,
	'reverse_order_by' => true,
);

echo '<div class="profile-activity">';

if (elgg_is_logged_in()) {
	echo elgg_view_form('messageboard/add', array('name' => 'elgg-messageboard'), $user);
}

if (elgg_in_context('dashboard')) {
	if ($vars['entity']->content_type == 'friends') {
		$activitiy_options['relationship_guid'] = elgg_get_page_owner_guid();
		$activitiy_options['relationship'] = 'friend';
	}
} else {
	$activitiy_options['subject_guid'] = elgg_get_page_owner_guid();
}

$activity = elgg_list_river($activitiy_options);
if (!$activity) {
	$activity = elgg_echo('river:none');
}

echo elgg_list_annotations($messageboard_options);
echo $activity;

echo '</div>';

if (!elgg_is_logged_in()) {
	echo elgg_view('myspace/guest');
}
