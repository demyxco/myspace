<?php

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>



<div class="elgg-sidebar left-sidebar">
<?php if ((fnmatch($elgg . 'friends/*', $url)) || (fnmatch($elgg . 'friendsof/*', $url))) { ?>
<!-- Begin BidVertiser code -->
<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=355617&bid=880572" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_advertiser.dbm">internet marketing</a></noscript>
<!-- End BidVertiser code --> <?php } ?>
</div>
