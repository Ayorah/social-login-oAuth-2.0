<?php

	session_start();
	require_once "Facebook/autoload.php";
	$FB = new \Facebook\Facebook([
	        'app_id' => '376392342860522',
			'app_secret' =>'fd2556febca8393ca9e303aa01a17879',
			'default_graph_version' => 'v2.10'
	
	]);
	$helper = $FB->getRedirectLoginHelper();
?>