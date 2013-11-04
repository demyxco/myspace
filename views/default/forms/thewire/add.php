<?php
/**
 * Wire add form body
 *
 * @uses $vars['post']
 */

elgg_load_js('elgg.thewire');

$post = elgg_extract('post', $vars);

$text = elgg_echo('post');
if ($post) {
	$text = elgg_echo('thewire:reply');
}

if ($post) {
	echo elgg_view('input/hidden', array(
		'name' => 'parent_guid',
		'value' => $post->guid,
	));
}

echo elgg_view('input/plaintext', array(
	'name' => 'body',
	'class' => 'mtm',
	'id' => 'thewire-textarea',	
));

$elgg = elgg_get_site_url();

?>
<div id="thewire-characters-remaining">
	<span>140</span> <?php echo elgg_echo('thewire:charleft'); ?>
</div>
<div class="elgg-foot mts">
<?php

echo elgg_view('input/submit', array(
	'value' => $text,
	'id' => 'thewire-submit-button',
));

?>
</div>

<?php if ($post) { 
$poster = $post->getOwnerEntity();
?>
<script>
$(function(){
   $(document).ready(function(){
           $.ajax({
        url: "<?php echo $elgg . 'thewire/reply/' . $post->guid ?>",
        success: function(html){
         $("textarea").append("@<?php echo $poster->username ?> ")
        }
     })
   })
})
</script>

<?php } ?>