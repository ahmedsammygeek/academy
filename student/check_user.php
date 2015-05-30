<?php session_start();
    if(!isset($_SESSION['is_system_user']) || $_SESSION['is_system_user'] !== true) {
        header("location: login.php");
        die();
    }
    if(!isset($_SESSION['student_user_id']) || empty($_SESSION['student_user_id'])) {
        header("location: login.php");
        die();
    }
    

?>