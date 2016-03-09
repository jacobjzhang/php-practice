<?php
include 'database.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    
    // Set timezone
    date_default_timezone_set('America/New_York');
    $time = date('h:i:s a', time());
    
    // Validating the input
    if(!isset($user) || $user == '' || !isset($message) || $message == '') {
        $error = "Please properly fill out your name and message.";
        header("Location: index.php?error=".urlencode($error));
    } else {
        $query = "INSERT INTO shouts (user, message, time)
                VALUES ('$user', '$message', '$time')";
        if (!mysqli_query($con, $query)) {
            die('Error: '.mysqli_error($con));
        } else {
            header("Location: index.php");
            exit();
        }
    }
}