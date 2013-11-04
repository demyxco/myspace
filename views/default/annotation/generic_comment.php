<?php
/**
 * Elgg generic comment view
 *
 * @uses $vars['annotation']  ElggAnnotation object
 * @uses $vars['full_view']   Display fill view or brief view
 */

if (!isset($vars['annotation'])) {
	return true;
}

$full_view = elgg_extract('full_view', $vars, true);

$comment = $vars['annotation'];

$entity = get_entity($comment->entity_guid);
$commenter = get_user($comment->owner_guid);
if (!$entity || !$commenter) {
	return true;
}

$friendlytime = elgg_view_friendly_time($comment->time_created);
$location = get_metadata_byname($comment->owner_guid,'geo_location'); 

$commenter_icon = elgg_view_entity_icon($commenter, 'small');
$commenter_link = "<a href=\"{$commenter->getURL()}\">$commenter->name</a>";

$entity_title = $entity->title ? $entity->title : elgg_echo('untitled');
$entity_link = "<a href=\"{$entity->getURL()}\">$entity_title</a>";

if ($full_view) {
	$menu = elgg_view_menu('annotation', array(
		'annotation' => $comment,
		'sort_by' => 'priority',
		'class' => 'elgg-menu-hz float-alt',
	));

	$comment_text = elgg_view("output/longtext", array("value" => $comment->value));

	$body = <<<HTML
<div class="mbn">
	$menu
	<div class="commenter">
	$commenter_link
	<span class="elgg-subtext">
		$friendlytime <small>near $location->value</small>
	</span>
	</div>
	$comment_text
</div>
HTML;

	echo elgg_view_image_block($commenter_icon, $body);

} else {
	// brief view

	//@todo need link to actual comment!

	$on = elgg_echo('on');

	$excerpt = elgg_get_excerpt($comment->value, 80);

	$body = <<<HTML
<span class="elgg-subtext">
	$commenter_link $on $entity_link ($friendlytime): $excerpt
</span>
HTML;

	echo elgg_view_image_block($commenter_icon, $body);
}
