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
			

			
		</li>
	</ul>	
</div>