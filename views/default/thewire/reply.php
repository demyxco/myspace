<?php
/**
 * Reply header
 */

$post = $vars['post'];
$poster = $post->getOwnerEntity();
$poster_details = array(
	htmlspecialchars($poster->name,  ENT_QUOTES, 'UTF-8'),
	htmlspecialchars($poster->username,  ENT_QUOTES, 'UTF-8'),
);

?>

<div class="reply">

<?php echo elgg_view_entity_icon($poster, 'medium', $vars) ?>
<span class="reply-name"><b><?php echo $poster->name ?></b> wrote:</span>
<span class="description">
<?php echo $post->description; ?>
</span>
</div>