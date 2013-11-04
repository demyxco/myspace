<?php
/**
 * View a wire post
 * 
 * @uses $vars['entity']
 */

elgg_load_js('elgg.thewire');

$full = elgg_extract('full_view', $vars, FALSE);
$post = elgg_extract('entity', $vars, FALSE);

if (!$post) {
	return true;
}

// make compatible with posts created with original Curverider plugin
$thread_id = $post->wire_thread;
if (!$thread_id) {
	$post->wire_thread = $post->guid;
}

$owner = $post->getOwnerEntity();

$owner_icon = elgg_view_entity_icon($owner, 'medium');
$owner_link = elgg_view('output/url', array(
	'href' => "thewire/owner/$owner->username",
	'text' => $owner->name,
	'is_trusted' => true,
));
$author_text = $owner_link;
$date = elgg_view_friendly_time($post->time_created);

$metadata = elgg_view_menu('entity', array(
	'entity' => $post,
	'handler' => 'thewire',
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

$location = get_metadata_byname($post->owner_guid,'geo_location'); 

$subtitle = "$author_text $date near $location->value";

// do not show the metadata and controls in widget view
if (elgg_in_context('widgets')) {
	$metadata = '';
}

$params = array(
	'entity' => $post,
	'metadata' => $metadata,
	'subtitle' => $subtitle,
	'content' => thewire_filter($post->description),
	'tags' => false,
);
$params = $params + $vars;
$list_body = elgg_view('object/elements/summary', $params);

echo elgg_view_image_block($owner_icon, $list_body);

if ($post->reply) {
	echo "<div class=\"thewire-parent hidden\" id=\"thewire-previous-{$post->guid}\">";
	echo "</div>";
}
