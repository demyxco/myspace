<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>

<div class="elgg-sidebar left-sidebar">
<?php if ((fnmatch($elgg . 'discussion/view*', $url)) || (fnmatch($elgg . 'discussion/all*', $url))  || (fnmatch($elgg . 'discussion/owner*', $url)) || (fnmatch($elgg . 'discussion/add*', $url)) || (fnmatch($elgg . 'discussion/edit*', $url))) { ?>

<ul><?php if (fnmatch($elgg . 'discussion/view*', $url)) { ?>
	<li class="report-button">
		<a href="javascript:elgg.forward('reportedcontent/add'+'?address='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title));" class="elgg-button">Report discussion</a>
	</li> <?php } ?>
	<li class="ad">


	</li>
</ul>
	
<?php } ?>

</div>
