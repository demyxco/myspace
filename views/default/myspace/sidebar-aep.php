<?php

$user = $_SESSION['user'];

?>

<div class="elgg-sidebar left-sidebar">
	<ul>
		<li class="sidebar-avatar">
			<a href="<?php echo elgg_get_site_url() . 'avatar/edit/' . $user->username?>" class="elgg-button">Edit Avatar</a>
		</li>
		<li class="sidebar-profile">
			<a href="<?php echo elgg_get_site_url() . 'profile/' . $user->username . '/edit'?>" class="elgg-button">Edit Profile</a>
			
		</li>
		<li class="ad">
			
<!-- Begin BidVertiser code -->
<SCRIPT LANGUAGE="JavaScript1.1" SRC="http://bdv.bidvertiser.com/BidVertiser.dbm?pid=355617&bid=880572" type="text/javascript"></SCRIPT>
<noscript><a href="http://www.bidvertiser.com/bdv/BidVertiser/bdv_advertiser.dbm">internet marketing</a></noscript>
<!-- End BidVertiser code -->
			
		</li>
	</ul>	
</div>