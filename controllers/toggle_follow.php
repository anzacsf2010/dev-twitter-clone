<?php
    include ('models/server.php');
    include ('display_tweets.php');

    $db_connection = connect_db();

    if ($_GET['action'] == "toggleFollow") {
        $follower = mysqli_real_escape_string($db_connection, $_SESSION['id']);
        $following = mysqli_real_escape_string($db_connection, $_POST['id']);
        $query = "SELECT * FROM `follows` WHERE `following` = '$following' AND `follower` = '$follower' LIMIT 1;";
        $result = mysqli_query($db_connection, $query);
        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_assoc($result);
            $id = mysqli_real_escape_string($db_connection, $row['id']);
            $delete_follow = "DELETE FROM `follows` WHERE `id` = $id;";
            mysqli_query($db_connection, $delete_follow);
            echo "UNFOLLOW";
        } else {
            $insert_follow = "INSERT INTO `follows` (`follower`, `following`) VALUES ('$follower', '$following');";
            mysqli_query($db_connection, $insert_follow);
            echo "FOLLOW";
        }
    }