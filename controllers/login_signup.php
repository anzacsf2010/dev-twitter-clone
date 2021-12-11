<?php
    include ('../models/server.php');

    if ($_GET['action'] == "toggleLogin") {
        $errors = array();
        if (empty($_POST['email'])) $errors[] = "A valid email address is required!";
        else if (empty($_POST['password'])) $errors[] = "Password field is required!";
        else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = "Invalid email address. Please enter a valid email address!";
        }
        if (count($errors) != 0) {
            foreach ($errors as $value) {
                print_r($value);
            }
            exit();
        }
        $db_connection = connect_db();
        if ($_POST['LoginSignupToggle'] == "0") {
            $email = mysqli_real_escape_string($db_connection, $_POST['email']);
            $password = mysqli_real_escape_string($db_connection, $_POST['password']);
            $query = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1;";
            $result = mysqli_query($db_connection, $query);
            if (mysqli_num_rows($result) > 0) $errors[] = "That email address is already in use by another user. Please verify that the email address provided is correct!";
            else {
                $query = "INSERT INTO `users` (`email`,`password`) VALUES ('$email', '$password');";
                if (mysqli_query($db_connection, $query)) {
                    $id = mysqli_insert_id($db_connection);
                    $password = md5(md5($id).$password);
                    $query = "UPDATE `users` SET `password` = '$password' WHERE `id` = $id LIMIT 1;";
                    mysqli_query($db_connection, $query);
                    echo 1;
                }
            }
        } else {
            $email = mysqli_real_escape_string($db_connection, $_POST['email']);
            $password = mysqli_real_escape_string($db_connection, $_POST['password']);
            $query = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1;";
            $result = mysqli_query($db_connection, $query);
            $row = mysqli_fetch_assoc($result);
            $id = $row['id'];
            if ($row['password'] == md5(md5($id).$password)) {
                echo 1;
                $_SESSION['id'] = $id;
            } else {
                $errors[] = "Could not find a record with that username and password. Please verify that the credentials are correct!";
            }
        }
        if (count($errors) != 0) {
            foreach ($errors as $value) {
                print_r($value);
            }
            exit();
        }
    }

