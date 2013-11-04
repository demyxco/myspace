<?php
$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();
?>

<div class="elgg-sidebar left-sidebar">
<ul>
	<li class="ad">

	</li>
</ul>
</div>

<?php if (fnmatch($elgg . 'photos*', $url)) { ?>
<style type="text/css">
	html {
		overflow-y: scroll;
		overflow-x: hidden;
		height: auto;
	}
</style>
<?php } ?>