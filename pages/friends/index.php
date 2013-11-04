<?php
/**
 * Elgg friends page
 *
 * @package Elgg.Core
 * @subpackage Social.Friends
 */

$owner = elgg_get_page_owner_entity();
if (!$owner) {
	// unknown user so send away (@todo some sort of 404 error)
	forward();
}

if ($handler == 'friendsof') {
	$title = elgg_echo("friends:of:owned", array($owner->name));
} else {
	$title = elgg_echo("friends:owned", array($owner->name));
}

$options = array(
	'relationship' => 'friend',
	'relationship_guid' => $owner->getGUID(),
	'type' => 'user',
	'full_view' => FALSE,
	'count' => TRUE,
	'size' => 'large',
	//'limit' => '6',
);

switch ($handler) {
	case 'friendsof':
		$options['inverse_relationship'] = TRUE;
		break;
	case 'friends':		
	default:
		$options['inverse_relationship'] = FALSE;
		break;
}

$content = elgg_list_entities_from_relationship($options);
if (!$content) {
	$content = elgg_echo('friends:none');
}

$number = elgg_get_entities_from_relationship($options);

$params = array(
	'content' => $content,
	'title' => $title . " ($number)",
	'filter_override' => elgg_view('friendsgallery/nav', array('selected' => $handler)),
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($title, $body);