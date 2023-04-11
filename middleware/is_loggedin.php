<?php 
session_start();
include './database/connection.php';
$_SESSION['auth_token'] = uniqid();

if (!isset($_SESSION['auth_token']) and !isset($_SESSION['user_id'])) {
    header("Location:./index.php?msg=Please login to have the permissions to access the system&type=error");
}
