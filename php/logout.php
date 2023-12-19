<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
    if (isset($logout_id)) {
        $status = "offline";

        // Make sure no output is sent before this point
        ob_start();

        $sql = mysqli_query($conn, "UPDATE user SET status = '$status' WHERE unique_id = {$logout_id}");
        if ($sql) {
            session_unset();
            session_destroy();
            header("location: ../login.php");
            exit(); // Make sure to exit after the redirect
        }
        ob_end_flush(); // End output buffering
    } else {
        header("location: ../user.php");
        exit(); // Make sure to exit after the redirect
    }
} else {
    header("location: ../login.php");
    exit(); // Make sure to exit after the redirect
}
?>
