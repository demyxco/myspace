<?php
/**
 * Layout for main column with one sidebar
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['content'] Content HTML for the main column
 * @uses $vars['sidebar'] Optional content that is displayed in the sidebar
 * @uses $vars['title']   Optional title for main content area
 * @uses $vars['class']   Additional class to apply to layout
 * @uses $vars['nav']     HTML of the page nav (override) (default: breadcrumbs)
 */

$class = 'elgg-layout elgg-layout-one-sidebar clearfix';
if (isset($vars['class'])) {
	$class = "$class {$vars['class']}";
}

// navigation defaults to breadcrumbs
$nav = elgg_extract('nav', $vars, elgg_view('navigation/breadcrumbs'));

$url = "http://" . $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$elgg = elgg_get_site_url();

?>

<div class="<?php echo $class; ?>">
	<div class="elgg-sidebar">
		
	<?php

		if (elgg_is_logged_in() && elgg_get_context() == 'activity') {
			echo elgg_view('myspace/sidebar-activity');
		}

		if (fnmatch($elgg . 'avatar/edit/*', $url)) {
			echo elgg_view('myspace/sidebar-aep');
		}

		if (fnmatch($elgg . 'profile/*/edit', $url)) {
			echo elgg_view('myspace/sidebar-aep');
		}

		if ((fnmatch($elgg . 'friends*', $url)) || (fnmatch($elgg . 'friendsof/*', $url))) {
			echo elgg_view('myspace/sidebar-friends');
		}

		if (fnmatch($elgg . 'blog*', $url)) {
			echo elgg_view('myspace/sidebar-blog');
		}

		if (fnmatch($elgg . 'groups*', $url)) {
			echo elgg_view('myspace/sidebar-groups');
		}
		
		if (fnmatch($elgg . 'discussion*', $url)) {
			echo elgg_view('myspace/sidebar-discussion');
		}
		
		if (fnmatch($elgg . 'photos*', $url)) {
			echo elgg_view('myspace/sidebar-photos');
		}

		if ((fnmatch($elgg . 'members*', $url)) || (elgg_get_context() == 'reportedcontent')) {
			echo elgg_view('myspace/sidebar-members');
		}
		
		if (elgg_get_context() == 'thewire') {
			echo elgg_view('myspace/sidebar-thewire');
		}

		if ((elgg_get_context() == 'messages') || (elgg_get_context() == 'notifier')) {
			echo elgg_view('myspace/sidebar-messages');
		}

		if (elgg_get_context() == 'settings') {
			echo elgg_view('myspace/sidebar-settings');
		}

		if (elgg_get_context() == 'search') {
			echo elgg_view('myspace/sidebar-search'); 
		}
		
		if (!elgg_is_logged_in()) {
			echo elgg_view('myspace/guest'); 
		} else {
			echo elgg_view('page/elements/sidebar', $vars);
		}
	?>
		
	</div>

	<div class="elgg-main elgg-body">
		<?php
			echo $nav;
			
			if (isset($vars['title'])) {
				echo elgg_view_title($vars['title']);
			}
			// @todo deprecated so remove in Elgg 2.0
			if (isset($vars['area1'])) {
				echo $vars['area1'];
			}
			if (isset($vars['content'])) {
				echo $vars['content'];
			}
		?>
	</div>
</div>
