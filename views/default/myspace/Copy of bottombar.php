<?php
/**
 * Bottom Bar
 *
 */


$user = $_SESSION['user']; 

?>
	<ul class="bottombar-menus">
		<li <?php if((elgg_get_context() == 'activity')) { echo 'class="bottombar-logo bottombar-active"'; } else { echo 'class="bottombar-logo"'; } ?>>
			<a href="<?php echo elgg_get_site_url() . "activity" ?>">
				<img src="<?php echo elgg_get_site_url() . "mod/myspace/images/logo-small.png"?>">
			</a></li>
		<li>
			<span class="bottombar-divider"></span>
		</li>
		<li <?php if((elgg_get_context() == 'profile')) { echo 'class="bottombar-profile bottombar-active"'; } else { echo 'class="bottombar-profile"'; } ?>>
			<a href="<?php echo elgg_get_site_url() . "profile/" . $user->username ?>"><?php echo $user->name ?></a>
		</li>
		<li>
			<span class="bottombar-divider"></span>
		</li>
		<li <?php if((elgg_get_context() == 'friends')) { echo 'class="bottombar-friends bottombar-active"'; } else { echo 'class="bottombar-friends"'; } ?>>
			<a href="<?php echo elgg_get_site_url() . "friends/" . $user->username ?>"></a>
		</li>
		<li>
			<span class="bottombar-divider"></span>
		</li>
		<li <?php if((elgg_get_context() == 'messages')) { echo 'class="bottombar-messages bottombar-active"'; } else { echo 'class="bottombar-messages"'; } ?>>
			<a href="<?php echo elgg_get_site_url() . "messages" ?>"><div></div></a>
		</li>
		<li>
			<span class="bottombar-divider"></span>
		</li>
		<li <?php if((elgg_get_context() == 'settings')) { echo 'class="bottombar-settings bottombar-active"'; } else { echo 'class="bottombar-settings"'; } ?>>
			<a href="<?php echo elgg_get_site_url() . "settings" ?>"><div>	</div></a>
		</li>
		<li>
			<span class="bottombar-divider"></span>
		</li>
	</ul>
	<ul class="bottombar-search">
		<li <?php if((elgg_get_context() == 'search')) { echo 'class="bottombar-search-active"'; } else { echo 'class="bottombar-search"'; } ?>>
			<?php echo elgg_view('search/search_box'); ?>
		</li>
	</ul>