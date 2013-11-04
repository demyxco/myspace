<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

if ((fnmatch($elgg . 'groups/add*', $url)) || (fnmatch($elgg . 'groups/edit*', $url)) || (fnmatch($elgg . 'groups/invite*', $url)) || (fnmatch($elgg . 'groups/requests*', $url))) {
	
?>

<div class="elgg-sidebar left-sidebar">
<ul>
	<li class="ad">
<!-- Begin BidVertiser code -->
<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=355617&bid=880572" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_advertiser.dbm">internet marketing</a></noscript>
<!-- End BidVertiser code --></li></ul>
</div>

<?php } else { ?>
	
<div class="elgg-sidebar left-sidebar">

</div>	
	
<?php } ?>
