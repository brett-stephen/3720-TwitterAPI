<?php

	require_once('TwitterAPIExchange.php');
	 
	// Set access tokens: https://dev.twitter.com/apps/
	$settings = array(
	    'oauth_access_token' => "YOUR_TOKEN",
	    'oauth_access_token_secret' => "YOUR_TOKEN_SECRET",
	    'consumer_key' => "YOUR_KEY",
	    'consumer_secret' => "YOUR_SECRET"
	);

	// Choose URL and Request Method
	$url = "https://api.twitter.com/1.1/statuses/mentions_timeline.json";
	$getfield = '?screen_name=chrisannclark&count=20'; // queries start with ? and are strung together with &
	$requestMethod = "GET";
	
	//Perform the request!
	$twitter = new TwitterAPIExchange($settings);
	echo $twitter->setGetfield($getfield)
	             ->buildOauth($url, $requestMethod)
	             ->performRequest();

?>

