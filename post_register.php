<?php
session_start();
require_once('db_connection.php');

$username = $_POST['user_name_register'];
$password = password_hash($_POST['password_register'], PASSWORD_DEFAULT);

$sql = "INSERT INTO user(username, password ) VALUES ('$username', '$password')";

$connstatus = $conn->query($sql);
$_SESSION['account_verified'] = true;

if($connstatus){
    header("location: admin_home.php");
}else{
    header("location: register.php");
}
?>