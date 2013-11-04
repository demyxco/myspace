<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>



<div class="elgg-sidebar left-sidebar">
<?php if ((fnmatch($elgg . 'friends/*', $url)) || (fnmatch($elgg . 'friendsof/*', $url))) { ?>
<?php } ?>
</div>
