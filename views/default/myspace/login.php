<?php
/**
 * Custom Login
 *
 */

$ts = time();
$token = generate_action_token($ts); 

$css = 'mod/myspace/css/login.css';
elgg_register_css('css', $css);
elgg_load_css('css');

?>

<div class="login">
	<p class="login-welcome">
		Welcome to MySpace
	</p>
	<ul>
		<li class="login-left">
			<p align="center"><img src="<?php echo elgg_get_site_url() . 'mod/myspace/images/badge_web20.png' ?>"/>
			</p>
		</li>
		</li>
		<li class="login-right">
			<form  method="post" action="action/login" class="elgg-form" autocomplete="on"> 
				<input type="hidden" name="__elgg_token" value="<?php echo $token;?>"/>
				<input type="hidden" name="__elgg_ts" value="<?php echo $ts;?>" />

				<p> 
					<input id="username" name="username" required="required" type="text" placeholder="Username or email"/>
				</p>
                               
				<p>
					<input id="password" name="password" required="required" type="password" placeholder="Password" /> 
				</p>

				<p>
					<input type="submit" value="Login" class="elgg-button elgg-button-submit" action="action/login" value="Login" /> 
				</p>
	
				<p> 
					<a href="forgotpassword">Forgot password?</a> | <a href="register" class="to_register">Join us</a> | <a href="<?php echo elgg_get_site_url() . 'terms'?>">Terms</a> | <a href="<?php echo elgg_get_site_url() . 'privacy'?>">Privacy</a>
				</p>

			</form>
		</li>
	</ul>
</div>