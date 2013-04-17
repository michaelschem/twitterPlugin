<?php
if (isset($_POST['tweet'])) {
    echo "Your Tweet has been proccessed!";
    $tweet = $_POST['tweet'];
    //echo $tweet;
    // Twitter Class
    require_once('twitteroauth/twitteroauth.php');

// Twitter Connection Info
    $twitter_access_token = '757961804-DV0VzERyFc42AJ9Ofmc9GtpwDT7fG2IUXixBR8jm';
    $twitter_access_token_secret = 'jmqx7MEGYS5aJkiL1iI1qpvzBEo4My7ZgF4iaYOLaI4';
    $twitter_consumer_key = 'tYRvTlOd8gQLdYS3EqxVPw';
    $twitter_consumer_secret = 'rzuu6U1uEjfYr8YLJ5LpMDARFzINx0kDVBh2b07h8';

// Connect to Twitter
    $connection = new TwitterOAuth($twitter_consumer_key, $twitter_consumer_secret, $twitter_access_token, $twitter_access_token_secret);

// Post Update
    $content = $connection->post('statuses/update', array('status' => $tweet));

//var_export($connection->http_info);
}
?>