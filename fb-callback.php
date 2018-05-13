<?php
    require_once "config.php";
	
	$redirectURL ="http://localhost:82/sociallogin/login.php/fb-callback.php/";
	$permission = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permission);
	echo $loginURL;
	?>
