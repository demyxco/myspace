<?php
/**
 * Elgg default annotation view
 *
 * @note To add or remove from the annotation menu, register handlers for the menu:annotation hook.
 *
 * @uses $vars['annotation']
 */

$annotation = $vars['annotation'];

$owner = get_entity($annotation->owner_guid);
if (!$owner) {
	return true;
}
$icon = elgg_view_entity_icon($owner, 'small');
$owner_link = "<a href=\"{$owner->getURL()}\">$owner->name</a>";

$menu = elgg_view_menu('annotation', array(
	'annotation' => $annotation,
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz float-alt',
));

$text = elgg_view("output/longtext", array("value" => $annotation->value));

$friendlytime = elgg_view_friendly_time($annotation->time_created);

$ip_address = $owner->ip_address;
$url = 'http://www.geoplugin.net/json.gp?ip=' . $ip_address;
$json = file_get_contents($url);
$data = json_decode($json, TRUE);
$geo_location = $data['geoplugin_city'] . ', ' . $data['geoplugin_region'];

$body = <<<HTML
<div class="mbn">
	$menu
	<div class="group-annotation">
	$owner_link
	<span class="elgg-subtext">
		$friendlytime near $geo_location
	</span>
	</div>
	$text
</div>
HTML;

echo elgg_view_image_block($icon, $body);
