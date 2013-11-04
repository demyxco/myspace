<?php
/**
 * Layout of the groups profile page
 *
 * @uses $vars['entity']
 */

echo elgg_view('groups/profile/summary', $vars);
if (group_gatekeeper(false)) {
	//echo elgg_view('groups/profile/widgets', $vars);
} else {
	echo elgg_view('groups/profile/closed_membership');
}

$group = $vars['entity'];

?>

<div class="groups-profile-info">
	<h2><?php echo $group->name; ?></h2>
	<ul>
		<li class="groups-profile-summary">
			<?php echo $group->description; ?>
		</li><?php if (group_gatekeeper(false)) { ?>
		<li class="groups-profile-members">
			<?php 
			
$limit = elgg_extract('limit', $vars, 14);

$all_link = elgg_view('output/url', array(
	'href' => 'groups/members/' . $vars['entity']->guid,
	'text' => elgg_echo('groups:members:more'),
	'is_trusted' => true,
));

$body = elgg_list_entities_from_relationship(array(
	'relationship' => 'member',
	'relationship_guid' => $vars['entity']->guid,
	'inverse_relationship' => true,
	'types' => 'user',
	'limit' => $limit,
	'size' => 'small',
	'list_type' => 'gallery',
	'gallery_class' => 'elgg-gallery-users',
	'pagination' => false
));

$body .= "<div class='center mts'>$all_link</div>";

echo $body;

?>
			
		</li><?php } else {} ?>
	</ul>
	
</div>


<div class="groups-activity">
<?php if (!group_gatekeeper(false)) {} else { ?>	
	<?php
	
$all_link = elgg_view('output/url', array(
	'href' => "discussion/owner/$group->guid",
	'text' => elgg_echo('link:view:all'),
	'is_trusted' => true,
));

$options = array(
	'type' => 'object',
	'subtype' => 'groupforumtopic',
	'container_guid' => $group->getGUID(),
	'limit' => 10,
	'full_view' => false,
	'pagination' => false,
);
$content = elgg_list_entities($options);

if (!$content) {
	$content = '<p>' . elgg_echo('discussion:none') . '</p>';
}

$new_link = elgg_view('output/url', array(
	'href' => "discussion/add/" . $group->getGUID(),
	'text' => elgg_echo('groups:addtopic'),
	'is_trusted' => true,
));

echo elgg_view('groups/profile/module', array(
	'title' => elgg_echo('discussion:group'),
	'content' => $content,
	'all_link' => $all_link,
	'add_link' => $new_link,
));

?>

<?php } ?>
</div>
<?php if (elgg_is_admin_logged_in()) { ?>
<style type="text/css">
.groups-activity .elgg-button {
	padding: 3.4px 10px;
}

.elgg-form-groups-search {
	margin-top: 10px;
}
</style>
<?php } ?>