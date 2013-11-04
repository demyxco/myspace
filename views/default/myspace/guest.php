<?php
$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();
?>

<div class="guest">
	<ul style="text-align: center">
		<li class="sidebar-blogs">
			<a class="elgg-button" href="<?php echo elgg_get_site_url()?>blog/all">Blogs</a>
		</li>
		<li class="sidebar-groups">
			<a class="elgg-button" href="<?php echo elgg_get_site_url()?>groups/all">Groups</a>
		</li>
		<li class="sidebar-members">
			<a class="elgg-button" href="<?php echo elgg_get_site_url()?>members">Members</a>
		</li>
		<li class="sidebar-thewire">
			<a class="elgg-button" href="<?php echo elgg_get_site_url()?>thewire/all">The Wire</a>
		</li>
	</ul>
</div>

<?php if (fnmatch($elgg . 'activity*', $url)) { ?>
	<style type="text/css">.elgg-sidebar{background: none repeat scroll 0% 0% rgba(226, 226, 226, 0.7);padding:10px;padding-top:0;}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'groups/members*', $url)) { ?>
	<style type="text/css">.elgg-sidebar{padding-top:0px;}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'discussion*', $url)) { ?>
	<style type="text/css">.guest{margin-bottom:10px;}.report-button a {margin-bottom:0px}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'discussion/owner*', $url)) { ?>
	<style type="text/css">.ad{display:none;}.elgg-sidebar{padding-top:0px}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'groups*', $url)) { ?>
	<style type="text/css">.elgg-menu-filter{margin-top:-10px;margin-bottom: 0;}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'members*', $url)) { ?>
	<style type="text/css">.guest{margin-bottom:10px;}.elgg-tabs{margin-bottom:0px}.elgg-infinite-scroll-bottom {width:auto}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'thewire*', $url)) { ?>
	<style type="text/css">.elgg-main .elgg-item:nth-child(2n) .elgg-menu-entity {margin-right:132px;} .elgg-sidebar{padding-top:0px;}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'blog*', $url)) { ?>
	<style type="text/css">.guest{margin-bottom:10px;}.elgg-sidebar{padding-top: 0;}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'friends*', $url)) { ?>
	<style type="text/css">.guest{margin-top:-10px;}.elgg-infinite-scroll-bottom {width:auto}</style>
<?php } ?>
<?php if (fnmatch($elgg . 'profile*', $url)) { ?>
	<style type="text/css">.guest{display:none;}.elgg-menu-owner-block-default{position:absolute;margin-top:30px;
	background: rgba(226,226,226,0.7);
	padding: 10px;
	padding-top: 0px;
	padding-bottom: 6px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin-left: -10px;
	}
	</style>
<?php } ?>
<?php if (fnmatch($elgg . 'photos*', $url)) { ?>
<style type="text/css">
.ad {
	display: none;
}
</style>
<?php } ?>