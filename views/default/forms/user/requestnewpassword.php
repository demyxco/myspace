<?php
/**
 * Elgg forgotten password.
 *
 * @package Elgg
 * @subpackage Core
 */
 
$css = 'mod/myspace/css/lostpassword.css';
elgg_register_css('css', $css);
elgg_load_css('css'); 
 
?>

<div class="lostpassword">

<div class="mtm">
	<?php echo elgg_echo('user:password:text'); ?>
</div>
<div>
	<?php echo elgg_view('input/text', array(
		'name' => 'username',
		'class' => 'elgg-autofocus',
		'placeholder' => 'Username or email',
		));
	?>
</div>
<?php echo elgg_view('input/captcha'); ?>
<div class="elgg-foot">
	<?php echo elgg_view('input/submit', array('value' => elgg_echo('request'))); ?>
</div>

</div>