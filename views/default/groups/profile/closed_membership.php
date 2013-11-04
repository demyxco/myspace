<?php
/**
 * Display message about closed membership
 * 
 * @package ElggGroups
 */
 

 
elgg_unregister_css('css_groups_profile');
elgg_unregister_js('js_groups_profile');
elgg_register_css('css_groups_profile_closed', 'mod/myspace/views/default/myspace/css-groups-profile-closed.css');
elgg_load_css('css_groups_profile_closed');
elgg_register_js('js_groups_profile_closed', 'mod/myspace/js/groups-profile-closed.js');
elgg_load_js('js_groups_profile_closed');
 
?>
<p class="mtm">
<script type="text/javascript">$('.elgg-menu-owner-block-default').remove();</script>
<style type="text/css">.elgg-menu-title {margin-top: -5px}</style>
<?php 
echo elgg_echo('groups:closedgroup');
if (elgg_is_logged_in()) {
	echo ' ' . elgg_echo('groups:closedgroup:request');
}
?>
</p>
