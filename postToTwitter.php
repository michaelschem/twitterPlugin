<?php
if (isset($_POST['tweet'])) {
    echo "Your Tweet has been proccessed!";
    $tweet = $_POST['tweet'];
    //echo $tweet;
    // Twitter Class
    require_once('twitteroauth/twitteroauth.php');

// Twitter Connection Info
    $twitter_access_token = 'REMOVED FOR SECURITY PURPOSES';
    $twitter_access_token_secret = 'REMOVED FOR SECURITY PURPOSES';
    $twitter_consumer_key = 'REMOVED FOR SECURITY PURPOSES';
    $twitter_consumer_secret = 'REMOVED FOR SECURITY PURPOSES';

// Connect to Twitter
    $connection = new TwitterOAuth($twitter_consumer_key, $twitter_consumer_secret, $twitter_access_token, $twitter_access_token_secret);

// Post Update
    $content = $connection->post('statuses/update', array('status' => $tweet));

//var_export($connection->http_info);
}
?>
