<?php
    include ('../models/server.php');

    $db_connection = connect_db();

    function display_tweets($type) {
        global $db_connection;
        $no_clause = "";
        $where_clause = "";
        $session_id = $_SESSION['id'];
        if ($type == "public") {
            $where_clause = $no_clause;
        } else if ($type == "following") {
            $id = mysqli_real_escape_string($db_connection, $session_id);
            $query = "SELECT * FROM `follows` WHERE `follower` = '$id';";
            $result = mysqli_query($db_connection, $query);
            $where_clause = $no_clause;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($where_clause == "") $where_clause = "WHERE";
                else $where_clause .= " OR ";
                $where_clause .= "`userid` = " . $row['following'];
            }
        } else if ($type == "yourtweets") {
            $id = mysqli_real_escape_string($db_connection, $session_id);
            $where_clause = " WHERE `userid` = " . $id;
        } else if ($type == "search") {
            echo '<p>Showing search results for "'.mysqli_real_escape_string($db_connection, $_GET['q']).'":</p>';
            $where_clause = "WHERE `tweet` LIKE '%". mysqli_real_escape_string($db_connection, $_GET['q'])."%'";
        } else if (is_numeric($type)) {
            $id = mysqli_real_escape_string($db_connection, $type);
            $query = "SELECT * FROM `users` WHERE `id` = $id LIMIT 1;";
            $query_result = mysqli_query($db_connection, $query);
            $user = mysqli_fetch_assoc($query_result);
            echo "<h2>".mysqli_real_escape_string($db_connection, $user['email'])."'s Tweets</h2>";
            $where_clause = "WHERE `userid` = ". $id;
        }
        $query = "SELECT * FROM `tweets` " . $where_clause . " ORDER BY `datetime` DESC LIMIT 25;";
        $result = mysqli_query($db_connection, $query);
        if (mysqli_num_rows($result) == 0) {
            echo "There are no tweets to display!";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = mysqli_real_escape_string($db_connection, $row['userid']);
                $user_query = "SELECT * FROM `users` WHERE `id` = $id LIMIT 1;";
                $query_result = mysqli_query($db_connection, $user_query);
                $user = mysqli_fetch_assoc($query_result);
                echo "<div class='Tweet'><p><a href='?page=publicprofiles&userid=".$user['id']."'>".$user['email']."</a> <span class='Time'>".time_since(time() - strtotime($row['datetime']))." ago</span>:</p>";
                echo "<p>".$row['tweet']."</p>";
                echo "<p><a class='ToggleFollow' data-id='".$row['userid']."' href='#'>";
                $follower = mysqli_real_escape_string($db_connection, $session_id);
                $following = mysqli_real_escape_string($db_connection, $row['userid']);
                $is_following_query = "SELECT * FROM `follows` WHERE `following` = '$following' AND `follower` = '$follower' LIMIT 1;";
                $is_following_query_result = mysqli_query($db_connection, $is_following_query);
                if (mysqli_num_rows($is_following_query_result) > 0) {
                    echo "Unfollow";
                } else {
                    echo "Follow";
                }
                echo "</a></p></div>";
            }
        }
    }
