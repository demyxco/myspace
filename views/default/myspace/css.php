<?php
/*
 * myspace 2013 Main CSS
 */

/*
 * use to detect browser for css compatibility 
 *
 
if(isset($_SERVER['HTTP_USER_AGENT'])){
    $agent = $_SERVER['HTTP_USER_AGENT'];
} 

/*
<?php if(strlen(strstr($agent,"Safari")) > 0 ){ } ?>
 * 
 */

 
?>

.bottombar-ad {
	position: absolute;
	bottom: -4px;
	right: 0;
}

.elgg-menu-extras {
	display: none;
}

h2, h1, h3, h4, h5, h6 {
	color: #2e88c4;
}

html, body {
	height: 100%;
	margin: 0;
	padding: 0;
	width: 100%;
	overflow: hidden;
}

a {
	color: #2e88c4;
}

a:hover {
	text-decoration: none;
}
 
body {
	font-size: 70%;
	background: #eee;
}

.elgg-layout-one-sidebar {
	background: none;
}

.elgg-page-default .elgg-page-footer > .elgg-inner, .elgg-menu-footer-default {
	border: 0;
}

.elgg-button, .elgg-button-action:focus, a.elgg-button-delete {
	color: white;
	border: 1px solid #2e88c4;
	background: #2e88c4;
	float: right;
	text-shadow: none;
	font-weight: normal;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 20px;
	padding-right: 20px;
	box-shadow: inset 0px 0px 0px 0px #2e88c4;
 	-moz-box-shadow: inset 0px 0px 0px 0px #2e88c4;
 	-webkit-box-shadow: inset 0px 0px 0px 0px #2e88c4;
	letter-spacing: 1px;
}

.elgg-button:hover, a.elgg-button-delete:hover {
	border: 1px solid #2876aa;
	background: #2e88c4; /* Old browsers */
	background: -moz-linear-gradient(top,  #2e88c4 0%, #207cca 99%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2e88c4), color-stop(99%,#207cca)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #2e88c4 0%,#207cca 99%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #2e88c4 0%,#207cca 99%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #2e88c4 0%,#207cca 99%); /* IE10+ */
	background: linear-gradient(to bottom,  #2e88c4 0%,#207cca 99%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2e88c4', endColorstr='#207cca',GradientType=0 ); /* IE6-9 */
	color: white;
}

.elgg-page-topbar {
	position: fixed;
	bottom: 0;
	background: #303030;
	width: 100%;
	height: 60px;
	z-index: 10;
	border: 0;
}

.elgg-menu-topbar > li > a.elgg-topbar-logo {
    margin-top: -10px;
    width: 60px;
}

.elgg-menu-topbar > li > a.elgg-topbar-avatar {
	margin-top: -12px;
	border: 0;
	width: 40px;
}

.messages-new {
	top: 17px;
	left: 31px;
}

.elgg-border-plain {
	border: 0;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

#notifier-popup {
	bottom: 0;
	margin-bottom: 85px;
	left: 149px !important;
	width: 300px !important;
	position: fixed;
	overflow: visible;
}

#notifier-popup:after {
content: "";
position: absolute;
bottom: -14px;
left: 134px;
border-style: solid;
border-width: 15px 15px 0;
border-color: #eee transparent;
display: block;
width: 0;
z-index: 9999;
}

#notifier-popup:before {
content: "";
position: absolute;
bottom: -16px;
left: 132px;
border-style: solid;
border-width: 17px 17px 0;
border-color: #ccc transparent;
display: block;
width: 0;
z-index: 9998;
opacity: .7;
}

.elgg-module-popup {
	box-shadow: 0 0 0 0;
	border: 0;
border: 1px solid #ccc;
background-color: #eee !important;
}

#notifier-popup .elgg-image-block {
	display: inline;
	padding: 0;
	margin: 0;
}

#notifier-popup .elgg-body {
	margin-right: 0;
	text-align: left;
}

#notifier-popup .elgg-list { 
	border: 0;
	margin: 0;
}

#notifier-popup .elgg-list > li {
	border: 0;
	padding: 5px;
	background: white;
	margin-bottom: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}

#notifier-popup .elgg-subtext {
	font-size: 100%;
	font-style: normal;
}

.elgg-module-dropdown {
	margin-bottom: 70px;
	padding-left: 0;
	background: #fff;
	height: 20px;
	width: 300px;
}

.elgg-module-dropdown .elgg-search {
	left: 0;
	top: 0;
	height: auto;
}

.elgg-module-dropdown .elgg-search input[type=text] {
	background: none;
	border: 0;
	padding: 10px;
	padding-left: 5px;
	padding-right: 5px;
	padding-top: 9px;
	background: white;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	border-radius: 0px;
	font-size: 200%;
	width: 100%;	
}

.elgg-menu-topbar li {
	float: left;
	text-align: center;
	padding-top: 20px;
}

.elgg-menu-topbar li a {
	margin: 0 15px;
}

.bottombar-divider {
 	display: inline-block;
 	width: 0;
	height: 3em;
	margin-top: 13px;
 	border-left: 1px solid #444;
 	border-right: 1px solid #111;
}

.elgg-sidebar {
	position: fixed;
	top: 20px;
	left: 0;
	background: #303030;
	margin-left: 20px;
	float: none;
	width: auto;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-webkit-backface-visibility: hidden;
	z-index: 1;
	padding: 0;
	padding-bottom: 10px;
}

.sidebar-avatar a, #profile-owner-block .profile-owner-avatar {
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center;
}

.sidebar-avatar a:hover, #profile-owner-block .profile-owner-avatar:hover {
	color: white;
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/avatar.png) no-repeat 35px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

.sidebar-profile a, #profile-owner-block .profile-owner-edit {
	margin-top: 10px;
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center;
}

.sidebar-profile a:hover, #profile-owner-block .profile-owner-edit:hover {
	background: #a5c9e5;
	color: white;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/profile.png) no-repeat 35px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

.sidebar-status a {
	margin-top: 10px;
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center;
	margin-bottom: 0px;
}

.sidebar-status a:hover {
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/status.png) no-repeat 25px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

.sidebar-blogs a, .elgg-menu-owner-block .elgg-menu-item-blog a {
	<?php if (elgg_is_logged_in()) { echo 'margin-top: 10px;'; } ?>
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #aaa url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center;
	border: 1px solid #aaa;
}

.sidebar-blogs a:hover, .elgg-menu-owner-block .elgg-menu-item-blog a:hover {
	border: 1px solid #9f9f9f;
	background: #aaa;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center, -moz-linear-gradient(top, #aaa 0%, #9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#9f9f9f), to(#999));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center, -webkit-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center, -o-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 55px center, -ms-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/blogs.png) no-repeat 56px center, linear-gradient(top, #aaa 0%,#9f9f9f 100%);
}

.sidebar-groups a {
	margin-top: 10px;
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #aaa url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px;
	border: 1px solid #aaa;
}

.sidebar-groups a:hover {
	border: 1px solid #9f9f9f;
	background: #aaa;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, -moz-linear-gradient(top, #aaa 0%, #9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, -webkit-gradient(linear, 0% 0%,0% 100%, from(#9f9f9f), to(#999));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, -webkit-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, -o-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, -ms-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/groups.png) no-repeat 50px 5px, linear-gradient(top, #aaa 0%,#9f9f9f 100%);
}

.sidebar-members a {
	margin-top: 10px;
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #aaa url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px;
	border: 1px solid #aaa;
}

.sidebar-members a:hover {
	border: 1px solid #9f9f9f;
	background: #aaa;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, -moz-linear-gradient(top, #aaa 0%, #9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, -webkit-gradient(linear, 0% 0%,0% 100%, from(#9f9f9f), to(#999));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, -webkit-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, -o-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, -ms-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/members.png) no-repeat 40px 7px, linear-gradient(top, #aaa 0%,#9f9f9f 100%);
}

.elgg-menu-item-blog {
	text-align: center;
}

.sidebar-thewire a, .elgg-menu-owner-block .elgg-menu-item-thewire a {
	margin-top: 10px;
	padding: 10px;
	font-size: 100%;
	color: white;
	float: none;
	width: 178px;
	background: #aaa url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px;
	border: 1px solid #aaa;
	text-align: center;
}

.sidebar-thewire a:hover, .elgg-menu-owner-block .elgg-menu-item-thewire a:hover {
	text-align: center;
	border: 1px solid #9f9f9f;
	background: #aaa;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, -moz-linear-gradient(top, #aaa 0%, #9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, -webkit-gradient(linear, 0% 0%,0% 100%, from(#9f9f9f), to(#999));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, -webkit-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, -o-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, -ms-linear-gradient(top, #aaa 0%,#9f9f9f 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/thewire.png) no-repeat 40px 4px, linear-gradient(top, #aaa 0%,#9f9f9f 100%);
}

.profile-location {
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/location.png) no-repeat 0 center;
}

.profile-website {
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/site.png) no-repeat 0 center;
}

.elgg-list-river {
	border: 0;
}

#profile-owner-block .profile-sendmessage {
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center;
}

#profile-owner-block .profile-sendmessage:hover {
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/messages-hover.png) no-repeat 42px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

#profile-owner-block .profile-report {
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center;
}

#profile-owner-block .profile-report:hover {
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/report.png) no-repeat 32px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

#profile-owner-block .profile-follow {
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center;
}

#profile-owner-block .profile-follow:hover {
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/followers-hover.png) no-repeat 48px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}	

#profile-owner-block .profile-unfollow {
	background: #2e88c4 url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center;
}

#profile-owner-block .profile-unfollow:hover {
	background: #a5c9e5;
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, -moz-linear-gradient(top, #2e88c4 0%, #207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, -webkit-gradient(linear, 0% 0%,0% 100%, from(#2e88c4), to(#207cca));
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, -webkit-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, -o-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, -ms-linear-gradient(top, #2e88c4 0%,#207cca 100%);
	background: url(<?php echo elgg_get_site_url()?>mod/myspace/images/unfollow.png) no-repeat 43px center, linear-gradient(top, #2e88c4 0%,#207cca 100%);
}

.elgg-page-default .elgg-page-body > .elgg-inner {
	width: auto;
}

.elgg-infinite-scroll-bottom {
    display: inline-block;
    text-align: center;
    width: 290px;
}

.elgg-infinite-scroll-bottom .elgg-button {
	width: 40px;
	height: 40px;
	-webkit-border-radius: 100px;
	-moz-border-radius: 100px;
	border-radius: 100px;
	padding: 10px;
	line-height: 40px;
	text-align: center;
	float: none;
}

.elgg-main .elgg-breadcrumbs { top: 0; }

.elgg-page-topbar .elgg-head {
	display: none;
}

#basic-modal-content {display:none;}

/* Overlay */
#simplemodal-overlay {background-color:#000; cursor:wait;}

/* Container */
#simplemodal-container {
	height:400px; 
	width:600px; 
	color:#bbb; 
	background-color:#eee; 
	border:5px solid #444; 
	padding:12px;
	-webkit-box-shadow: 0 13px 16px rgba(0,0,0,.5);
	-moz-box-shadow: 0 13px 16px rgba(0,0,0,.5);
	box-shadow: 0 13px 16px rgba(0,0,0,.5);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	}
#simplemodal-container a.modalCloseImg {background:url(<?php echo elgg_get_site_url() . "mod/myspace/images/x.png";?>) no-repeat; width:25px; height:29px; display:inline; z-index:3200; position:absolute; top:-15px; right:-16px; cursor:pointer;}