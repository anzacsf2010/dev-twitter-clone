<?php
    session_start();

    function connect_db() {
        $host = "localhost";
        $username = "root";
        $db_name = "twitter_clone";
        $port = "3306";
        $db_connection= mysqli_connect($host, $username, $username, $db_name, $port);
        if (mysqli_connect_error()) {
            print_r(mysqli_connect_error());
            exit();
        } else {
            return $db_connection;
        }
    }

    if ($_GET['function'] == "logout") {
        session_unset();
    }

    function time_since($since): string {
        $chunks = array(
            array(60 * 60 * 24 * 365 , 'year'),
            array(60 * 60 * 24 * 30 , 'month'),
            array(60 * 60 * 24 * 7, 'week'),
            array(60 * 60 * 24 , 'day'),
            array(60 * 60 , 'hour'),
            array(60 , 'min'),
            array(1 , 'sec')
        );
        for ($i = 0, $j = count($chunks); $i < $j; $i++) {
            $seconds = $chunks[$i][0];
            $name = $chunks[$i][1];
            if (($count = floor($since / $seconds)) != 0) {
                break;
            }
        }
        $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
        return $print;
    }
