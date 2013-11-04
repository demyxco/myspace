<?php
/**
 * Elgg topbar
 * The standard elgg top toolbar
 */

elgg_unregister_menu_item('topbar', 'elgg_logo');
elgg_unregister_menu_item('topbar', 'profile');
elgg_unregister_menu_item('topbar', 'administration');
elgg_unregister_menu_item('topbar', 'usersettings');
elgg_unregister_menu_item('topbar', 'logout');

$logo_url = elgg_get_site_url() . "mod/myspace/images/logo-small.png";
$elgg = elgg_get_site_url();
$viewer = elgg_get_logged_in_user_entity();
$loggedin = elgg_is_logged_in();
$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

if (!$loggedin) {
elgg_register_menu_item('topbar', array(
	'name' => 'logo',
	'title' => 'Logo',
	'href' => $elgg,
	'text' => "<img src=\"$logo_url\" alt=\"Logo\" width=\"60\" height=\"36\" />",
	'priority' => 1,
	'link_class' => 'elgg-topbar-logo',
));
}

if ($loggedin) {

elgg_register_menu_item('topbar', array(
	'name' => 'logo',
	'title' => 'Logo',
	'href' => $elgg . 'activity',
	'text' => "<img src=\"$logo_url\" alt=\"Logo\" width=\"60\" height=\"36\" />",
	'priority' => 1,
	'link_class' => 'elgg-topbar-logo',
));

		elgg_register_menu_item('topbar', array(
			'name' => 'icon',
			'href' => $viewer->getURL(),
			'text' => elgg_view('output/img', array(
				'src' => $viewer->getIconURL('small'),
				'alt' => $viewer->name,
				'title' => elgg_echo('profile'),
				'class' => 'elgg-border-plain elgg-transition',
			)),
			'priority' => 100,
			'link_class' => 'elgg-topbar-avatar',
		)); 

echo elgg_view('search/search_box', array('class' => 'hidden'));

		elgg_register_menu_item('topbar', array(
			'name' => 'search',
			'href' => '#search',
			'text' => elgg_view_icon('search'),
			'priority' => 700,
			'rel' => 'popup',
			'id' => 'search-popup-link'
		));		
		
     	$body = elgg_view('myspace/search');

         echo elgg_view_module('dropdown', '', $body, array('id' => 'search')); 

 
elgg_register_menu_item('topbar', array(
			'name' => 'usersettings',
			'href' => "settings/user/{$viewer->username}",
			'text' => elgg_view_icon('settings'),
			'priority' => 700,
		)); 
		
elgg_register_menu_item('topbar', array(
			'name' => 'logout',
			'href' => "action/logout",
			'text' => elgg_view_icon('delete'),
			'is_action' => TRUE,
			'confirm' => 'Are you sure you want to log out?',
			'priority' => 700,
		));
		
	if (elgg_is_admin_logged_in()) {
		elgg_register_menu_item('topbar', array(
			'name' => 'administration',
			'href' => 'admin',
			'text' => elgg_view_icon('star-empty'),
			'priority' => 700,
		));
	}
}
 
// Elgg logo
echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));
/*
if (!$loggedin) {
 	echo elgg_view('myspace/bottombar-login');
}*/

echo elgg_view('myspace/bottombar-ad');

// elgg tools menu
// need to echo this empty view for backward compatibility.
$content = elgg_view("navigation/topbar_tools");
if ($content) {
	elgg_deprecated_notice('navigation/topbar_tools was deprecated. Extend the topbar menus or the page/elements/topbar view directly', 1.8);
	echo $content;
}?>

<?php if ((fnmatch($elgg . 'terms*', $url)) || (fnmatch($elgg . 'privacy*', $url))) { ?>
	<style type="text/css">body{overflow-y:scroll;overflow-x:hidden;position:absolute}.elgg-output{margin-bottom:30px}.elgg-sidebar{display:none}</style>
<?php } ?>