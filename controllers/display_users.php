<?php
    include ('../models/server.php');

    $db_connection = connect_db();

    function display_users() {
        global $db_connection;
        $query = "SELECT * FROM `users` LIMIT 10";
        $result = mysqli_query($db_connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $email = $row['email'];
            echo "<p><a href='?page=publicprofiles&userid=" . $id . "'>" . $email . "</a></p>";
        }
    }