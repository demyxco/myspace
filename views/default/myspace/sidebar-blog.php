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
<!-- Begin BidVertiser code -->
<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=355617&bid=880572" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_advertiser.dbm">internet marketing</a></noscript>
<!-- End BidVertiser code -->
</ul>
<?php } ?>
</div>
