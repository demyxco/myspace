<?php

$user = $_SESSION['user'];
$vars['hover'] = false;

$following = elgg_get_entities_from_relationship(array(
'relationship' => 'friend',
'relationship_guid' => elgg_get_page_owner_guid(),
'types' => 'user',
'count' => true
));

$followers = elgg_get_entities_from_relationship(array(
'relationship' => 'friend',
'relationship_guid' =>  elgg_get_page_owner_guid(),
'inverse_relationship' => TRUE,
'types' => 'user',
'count' => true
));

$wires = elgg_get_entities(array(
	'types' => 'object',
	'subtypes' => 'thewire',
	'owner_guid' => elgg_get_page_owner_guid(),
	'count' => true
));

$ts = time();
$token = generate_action_token($ts); 

?>

<span><?php echo elgg_view_entity_icon($user, 'large', $vars) ?></span>

<ul class="sidebar-info">
	<li class="sidebar-following">
		<a href="<?php echo elgg_get_site_url() . 'friends/' . $user->username?>">
			
			<b><?php echo $following?></b><br /> Following
			
		</a>
	</li>
	<li class="sidebar-followers">
		<a href="<?php echo elgg_get_site_url() . 'friendsof/' . $user->username?>">
		<b><?php echo $followers?></b><br />	Followers
		</a>
	</li>

	<li class="sidebar-wires">
		<a href="<?php echo elgg_get_site_url() . 'thewire/owner/' . $user->username?>">
		<b><?php echo $wires?></b><br />	Wires
		</a>
	</li>
</ul>

<div class="elgg-sidebar left-sidebar">
	<ul>
		<li class="sidebar-avatar">
			<a href="<?php echo elgg_get_site_url() . 'avatar/edit/' . $user->username?>" class="elgg-button">Edit avatar</a>
		</li>
		<li class="sidebar-profile">
			<a href="<?php echo elgg_get_site_url() . 'profile/' . $user->username . '/edit'?>" class="elgg-button">Edit profile</a>
			
		</li>
		<li class="sidebar-status">
			<div id='basic-modal'><a class="elgg-button status" href="">Update status</a></div>
		</li>
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
		
<div id="basic-modal-content" style="display: none;">
					<?php 
						$form_vars = array('class' => 'thewire-form'); 
						$wire .= elgg_view_form('thewire/add', $form_vars); 
						$wire .= elgg_view('input/urlshortener'); echo $wire;  
					?>
</div>

<div class="terms-privacy">
	<a href="<?php echo elgg_get_site_url() . 'terms'?>">Terms</a> | <a href="<?php echo elgg_get_site_url() . 'privacy'?>">Privacy</a>
</div>
