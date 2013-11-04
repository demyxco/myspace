<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

if ((fnmatch($elgg . 'groups/add*', $url)) || (fnmatch($elgg . 'groups/edit*', $url)) || (fnmatch($elgg . 'groups/invite*', $url)) || (fnmatch($elgg . 'groups/requests*', $url))) {
	
?>

<div class="elgg-sidebar left-sidebar">
<ul>
	<li class="ad">
</li></ul>
</div>

<?php } else { ?>
	
<div class="elgg-sidebar left-sidebar">

</div>	
	
<?php } ?>
