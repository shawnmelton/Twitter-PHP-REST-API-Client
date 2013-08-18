<?php
require_once 'TwitterClient.php';
require_once 'config.php';

$twitter = new TwitterClient(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_TOKEN, OAUTH_TOKEN_SECRET);
$twitter->setResponseFormat('json'); // optional, json is default

// https://dev.twitter.com/docs/api/1/get/account/verify_credentials
$params = array();
$raw_response = $twitter->get('account/verify_credentials', $params);
$response = json_decode($raw_response, true);
var_dump($response);

// https://dev.twitter.com/docs/api/1/get/statuses/user_timeline
$params = array(
    'count' => 10,
    'screen_name' => 'FergusonCareers'
);
$raw_response = $twitter->get('statuses/user_timeline', $params);
$response = json_decode($raw_response, true);
var_dump($response);
