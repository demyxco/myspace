<?php 

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>

<script type="text/javascript">
$(document).ready(function() {
<?php if (!elgg_is_admin_logged_in()) {?>
	$('.elgg-menu-title').remove();
<?php } ?>
<?php if (fnmatch($elgg . 'photos/image*', $url)) { ?>
	$('.left-sidebar').append($('.elgg-module'));
<?php } ?>
});
</script>

