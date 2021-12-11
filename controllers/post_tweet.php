<?php
    include ('models/server.php');
    include ('display_tweets.php');

    if ($_GET['action'] == "postTweet") {
        $db_connection = connect_db();
        if (empty($_POST['tweetcontent'])) {
            echo "Tweet field is empty. Please redact a tweet before clicking on the Post Tweet button.";
        } else if (strlen($_POST['tweetcontent']) > 200) {
            echo "Tweet is too long. Please ensure it is 200 characters or less.";
        } else {
            $tweet = mysqli_real_escape_string($db_connection, $_POST['tweetcontent']);
            $userid = mysqli_real_escape_string($db_connection, $_SESSION['id']);
            $new_tweet_query = "INSERT INTO `tweets` (`tweet`, `userid`, `datetime`) VALUES ('$tweet', '$userid', CONVERT_TZ(NOW(), '+00:00', '+05:00') );";
            mysqli_query($db_connection, $new_tweet_query);
            echo "1";
        }
    }