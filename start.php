<?php
/**
 * Elgg demo custom index page plugin
 * 
 */
 
//$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

elgg_register_event_handler('init', 'system', 'myspace_index_init');


//elgg_register_action("myspace/add", "$action_path/add.php");

elgg_register_js('jquery.mousewheel.min', 'mod/myspace/js/jquery.mousewheel.min.js');
elgg_load_js('jquery.mousewheel.min');
elgg_register_js('jquery.main', 'mod/myspace/js/main.js');
elgg_load_js('jquery.main');
//elgg_register_js('jquery.colorbox', 'mod/myspace/js/jquery.colorbox-min.js');
//elgg_load_js('jquery.colorbox');

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$user = $_SESSION['user'];
$elgg = elgg_get_site_url();
$entity = $vars['entity'];

if((elgg_get_context() == 'admin')) {
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_unregister_js('jquery.main');
}

if((elgg_get_context() == 'activity')) {
	elgg_register_js('jquery.basic', 'mod/myspace/js/basic.js');
	elgg_load_js('jquery.basic');
	elgg_register_js('jquery.simplemodal', 'mod/myspace/js/jquery.simplemodal.js');
	elgg_load_js('jquery.simplemodal');
	elgg_register_css('css_activity', 'mod/myspace/views/default/myspace/css-activity.css');
	elgg_load_css('css_activity');
	elgg_register_js('js_activity', 'mod/myspace/js/activity.js');
	elgg_load_js('js_activity');
}

if((elgg_get_context() == 'profile')) {
	elgg_register_css('css_profile', 'mod/myspace/views/default/myspace/css-profile.css');
	elgg_load_css('css_profile');
	elgg_register_js('js_profile', 'mod/myspace/js/profile.js');
	elgg_load_js('js_profile');
}

if ((fnmatch($elgg . 'terms*', $url)) || (fnmatch($elgg . 'privacy*', $url))) {
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
}

if (fnmatch($elgg . 'profile/*/edit*', $url)) {
	elgg_unregister_js('js_profile');
	elgg_unregister_css('css_profile');
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_unregister_event_handler('init', 'system', 'extended_tinymce_init');
	elgg_register_css('css_editprofile', 'mod/myspace/views/default/myspace/css-editprofile.css');
	elgg_load_css('css_editprofile');
	elgg_register_js('js_editprofile', 'mod/myspace/js/editprofile.js');
	elgg_load_js('js_editprofile');
	elgg_register_js('js_geolocate', 'http://www.geoplugin.net/javascript.gp');
	elgg_load_js('js_geolocate');
}

if (elgg_get_context() == 'reportedcontent') {
	elgg_unregister_event_handler('init', 'system', 'extended_tinymce_init');
	elgg_register_css('css_report', 'mod/myspace/views/default/myspace/css-editprofile.css');
	elgg_load_css('css_report');
}

if (fnmatch($elgg . 'avatar/edit*', $url)) {
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_avatar', 'mod/myspace/views/default/myspace/css-avatar.css');
	elgg_load_css('css_avatar');
	elgg_register_js('js_avatar', 'mod/myspace/js/avatar.js');
	elgg_load_js('js_avatar');
}

if ((fnmatch($elgg . 'friends*', $url)) || (fnmatch($elgg . 'friendsof*', $url))) {
	elgg_register_css('css_friends', 'mod/myspace/views/default/myspace/css-friends.css');
	elgg_load_css('css_friends');
	elgg_register_js('js_friends', 'mod/myspace/js/friends.js');
	elgg_load_js('js_friends');
}

if (fnmatch($elgg . 'collections*', $url)) {
 	forward(REFERRER);
}

if (fnmatch($elgg . 'invite*', $url)) {
	forward(REFERRER);
}

if (fnmatch($elgg . 'blog/*', $url)) {
	elgg_unregister_event_handler('init', 'system', 'river_addon_init');
	elgg_register_css('css_blog', 'mod/myspace/views/default/myspace/css-blog.css');
	elgg_load_css('css_blog');
	elgg_register_js('js_blog', 'mod/myspace/js/blog.js');
	elgg_load_js('js_blog');
		
	if (fnmatch($elgg . 'blog/add/*', $url) || fnmatch($elgg . 'blog/edit/*', $url)) {
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		elgg_unregister_css('css_blog');
		elgg_register_css('css_blogaddedit', 'mod/myspace/views/default/myspace/css-blog-add-edit.css');
		elgg_load_css('css_blogaddedit');
	}
	if (fnmatch($elgg . 'blog/view/*', $url)) {
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		//elgg_unregister_event_handler('init', 'system', 'tinymce_init');
		elgg_unregister_css('css_blog');
		elgg_register_css('css_blogview', 'mod/myspace/views/default/myspace/css-blog-view.css');
		elgg_load_css('css_blogview');
	}
}

if (fnmatch($elgg . 'groups*', $url)) {
	elgg_register_css('css_groups', 'mod/myspace/views/default/myspace/css-groups.css');
	elgg_load_css('css_groups');
	elgg_register_js('js_groups', 'mod/myspace/js/groups.js');
	elgg_load_js('js_groups');
	if (fnmatch($elgg . 'groups/add*', $url)) {
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		elgg_unregister_event_handler('init', 'system', 'extended_tinymce_init');
		elgg_unregister_css('css_groups');
		elgg_unregister_js('js_groups');
		elgg_register_css('css_groups_add', 'mod/myspace/views/default/myspace/css-groups-add-edit.css');
		elgg_load_css('css_groups_add');
		elgg_register_js('js_groups_add', 'mod/myspace/js/groups-add.js');
		elgg_load_js('js_groups_add');
	}
	if (fnmatch($elgg . 'groups/edit*', $url)) {
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		elgg_unregister_event_handler('init', 'system', 'tinymce_init');
		elgg_unregister_css('css_groups');
		elgg_unregister_js('js_groups');
		elgg_register_css('css_groups_edit', 'mod/myspace/views/default/myspace/css-groups-add-edit.css');
		elgg_load_css('css_groups_edit');
		elgg_register_js('js_groups_edit', 'mod/myspace/js/groups-edit.js');
		elgg_load_js('js_groups_edit');
	}
	if (fnmatch($elgg . 'groups/profile*', $url)) {
		elgg_unregister_css('css_groups');
		elgg_unregister_js('js_groups');
		elgg_register_css('css_groups_profile', 'mod/myspace/views/default/myspace/css-groups-profile.css');
		elgg_load_css('css_groups_profile');
		elgg_register_js('js_groups_profile', 'mod/myspace/js/groups-profile.js');
		elgg_load_js('js_groups_profile');
	}
	if (fnmatch($elgg . 'groups/all?filter=discussion*', $url)) {
		elgg_register_css('css_groups_discussion_filter', 'mod/myspace/views/default/myspace/css-groups-discussion-filter.css');
		elgg_load_css('css_groups_discussion_filter');
	}
	if (fnmatch($elgg . 'groups/invitations*', $url)) {
		elgg_register_css('css_groups_invitations', 'mod/myspace/views/default/myspace/css-groups-invitations.css');
		elgg_load_css('css_groups_invitations');
	}
	if (fnmatch($elgg . 'groups/invite*', $url)) {
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		elgg_unregister_js('js_groups');
		elgg_register_css('css_groups_invite', 'mod/myspace/views/default/myspace/css-groups-invite.css');
		elgg_load_css('css_groups_invite');
		elgg_register_js('js_groups_invite', 'mod/myspace/js/groups-invite.js');
		elgg_load_js('js_groups_invite');
	}
	if (fnmatch($elgg . 'groups/requests*', $url)) {
		elgg_register_css('css_groups_requests', 'mod/myspace/views/default/myspace/css-groups-requests.css');
		elgg_load_css('css_groups_requests');
		elgg_register_js('js_groups_requests', 'mod/myspace/js/groups-requests.js');
		elgg_load_js('js_groups_requests');
	}
}

if (fnmatch($elgg . 'discussion*', $url)) {
	elgg_register_css('css_discussion', 'mod/myspace/views/default/myspace/css-discussion.css');
	elgg_load_css('css_discussion');
	elgg_register_js('js_discussion', 'mod/myspace/js/discussion.js');
	elgg_load_js('js_discussion');
	if (fnmatch($elgg . 'discussion/view*', $url)) {
		elgg_unregister_css('css_discussion');
		elgg_unregister_js('js_discussion');
		elgg_register_css('css_discussion_view', 'mod/myspace/views/default/myspace/css-discussion-view.css');
		elgg_load_css('css_discussion_view');
		elgg_register_js('js_discussion_view', 'mod/myspace/js/discussion.js');
		elgg_load_js('js_discussion_view');
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
	}
	if ((fnmatch($elgg . 'discussion/add*', $url)) || (fnmatch($elgg . 'discussion/edit*', $url))) {
		elgg_unregister_css('css_discussion');
		elgg_unregister_js('js_discussion');
		elgg_register_css('css_discussion_add_edit', 'mod/myspace/views/default/myspace/css-discussion-add-edit.css');
		elgg_load_css('css_discussion_add_edit');
		elgg_unregister_js('jquery.main');
		elgg_unregister_js('jquery.mousewheel.min');
		elgg_register_js('js_discussion_view', 'mod/myspace/js/discussion.js');
		elgg_load_js('js_discussion_view');
	}
}

if (fnmatch($elgg . 'members*', $url)) {
	elgg_register_css('css_members', 'mod/myspace/views/default/myspace/css-members.css');
	elgg_load_css('css_members');
	elgg_register_js('js_members', 'mod/myspace/js/members.js');
	elgg_load_js('js_members');
}

if (elgg_get_context() == 'thewire') {
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_thewire', 'mod/myspace/views/default/myspace/css-thewire.css');
	elgg_load_css('css_thewire');
	elgg_register_js('js_thewire', 'mod/myspace/js/thewire.js');
	elgg_load_js('js_thewire');
	elgg_register_js('jquery.autosize', 'mod/myspace/js/jquery.autosize.js');
	elgg_load_js('jquery.autosize');
}

if ((elgg_get_context() == 'messages') || (elgg_get_context() == 'notifier')) {
	elgg_unregister_event_handler('init', 'system', 'infinite_scroll_init');
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_messages', 'mod/myspace/views/default/myspace/css-messages.css');
	elgg_load_css('css_messages');
	elgg_register_js('js_messages', 'mod/myspace/js/messages.js');
	elgg_load_js('js_messages');
}

if ((elgg_get_context() == 'settings') || (elgg_get_context() == 'notifications')) {
	elgg_unregister_event_handler('init', 'system', 'infinite_scroll_init');
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_settings', 'mod/myspace/views/default/myspace/css-settings.css');
	elgg_load_css('css_settings');
	elgg_register_js('js_settings', 'mod/myspace/js/settings.js');
	elgg_load_js('js_settings');
}

if (elgg_get_context() == 'search') {
	elgg_unregister_event_handler('init', 'system', 'infinite_scroll_init');
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_search', 'mod/myspace/views/default/myspace/css-search.css');
	elgg_load_css('css_search');
	elgg_register_js('js_search', 'mod/myspace/js/search.js');
	elgg_load_js('js_search');
}

function myspace_index_init() {

	// Extend system CSS with our own styles
	elgg_extend_view('css/elgg', 'myspace/css');

	// Replace the default index page
	elgg_register_plugin_hook_handler('index', 'system', 'myspace_index');
	
	elgg_unregister_page_handler('friends', 'friends_page_handler');
	elgg_unregister_page_handler('friendsof', 'friends_page_handler');	
	elgg_register_page_handler('friends', 'custom_friends_page_handler');
	elgg_register_page_handler('friendsof', 'custom_friends_page_handler');

	elgg_unregister_page_handler('members', 'members_page_handler');
	elgg_register_page_handler('members', 'custom_members_page_handler');	
}

if (fnmatch($elgg . 'photos*', $url)) {
	elgg_unregister_event_handler('init', 'system', 'infinite_scroll_init');
	elgg_unregister_js('jquery.main');
	elgg_unregister_js('jquery.mousewheel.min');
	elgg_register_css('css_photos', 'mod/myspace/views/default/myspace/css-photos.css');
	elgg_load_css('css_photos');
	elgg_register_js('js_photos', 'mod/myspace/js/photos.js');
	elgg_load_js('js_photos');
	elgg_extend_view('page/elements/head','myspace/tidypics');
	if ((fnmatch($elgg . 'photos/add*', $url)) && (!elgg_is_admin_logged_in())) {
		forward(REFERRER);
	}
}

function myspace_index($hook, $type, $return, $params) {
	if ($return == true) {
		// another hook has already replaced the front page
		return $return;
	}

	if (!include_once(dirname(__FILE__) . "/index.php")) {
		return false;
	}

	// return true to signify that we have handled the front page
	return true;
}

function custom_friends_page_handler($page_elements, $handler) {
	elgg_set_context('friends');
	
	if (isset($page_elements[0]) && $user = get_user_by_username($page_elements[0])) {
		elgg_set_page_owner_guid($user->getGUID());
	}
	if (elgg_get_logged_in_user_guid() == elgg_get_page_owner_guid()) {
		collections_submenu_items();
	}
	
	if (!isset($handler[0])) {
		$handler[0] = 'friends';
	}
	
	require_once(dirname(__FILE__) . "/pages/friends/index.php");
	return true;
}

function custom_members_page_handler($page) {
	$base = elgg_get_plugins_path() . 'myspace/pages/members';

	if (!isset($page[0])) {
		$page[0] = 'newest';
	}

	$vars = array();
	$vars['page'] = $page[0];

	if ($page[0] == 'search') {
		$vars['search_type'] = $page[1];
		require_once "$base/search.php";
	} else {
		require_once "$base/index.php";
	}
	return true;
}