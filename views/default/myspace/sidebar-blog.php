<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>



<div class="elgg-sidebar left-sidebar">
<?php if ((fnmatch($elgg . 'blog/add/*', $url)) || (fnmatch($elgg . 'blog/view/*', $url)) || (fnmatch($elgg . 'blog/edit/*', $url))) { ?>
	
	<ul><?php if ((fnmatch($elgg . 'blog/add*', $url)) || (fnmatch($elgg . 'blog/edit*', $url))) { } else { ?>
	<li class="report-button">
		<a href="javascript:elgg.forward('reportedcontent/add'+'?address='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title));" class="elgg-button">Report blog</a>
	</li> <?php } ?>

</ul>
<?php } ?>
</div>
