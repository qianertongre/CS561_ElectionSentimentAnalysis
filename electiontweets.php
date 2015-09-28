<?php
session_start();
require_once("twitteroauth/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "mattga91";
$notweets = 30;
$consumerkey = "T8oZpeNJ9bqjl62fAleqqBgiN";
$consumersecret = "ZcYgeiajlD4YAyEQKtzcpPvug4fJQgw46Kco5Fo5JOVdiOvcuv";
$accesstoken = "2482651142-y15LpqOtK4b2pzSvn48bG9crAPznJ5gk46iT2S0";
$accesstokensecret = "ug7YwxNJYuU5iG0v0BhKYXZsldFYTQLSGXa962LSA4C4c";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/search/tweets.json?q=%23sanders");
 
echo json_encode($tweets);
?>