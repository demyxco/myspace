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

$ip_address = $owner->ip_address;
$url = 'http://www.geoplugin.net/json.gp?ip=' . $ip_address;
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$geo_location = $data['geoplugin_city'] . ', ' . $data['geoplugin_region'];

$subtitle = "$author_text $date near $geo_location";

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

?>

<script type="text/javascript" src="<?php echo elgg_get_site_url(); ?>js/thewire.js?view=default"></script>