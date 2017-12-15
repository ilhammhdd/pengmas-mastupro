<?php
session_start();
require_once('db_connection.php');

$mysqliconnect = mysqli_connect($servername, $username, $password, $dbname);

$usrname = $_POST['user_name_login'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$usrname'");
$row = mysqli_fetch_row($query);

if(password_verify($_POST['password_login'], $row[2]) && $usrname == $row[1]){
    $_SESSION['account_verified'] = true;
    header("location: admin_home.php");
}else{
    $_SESSION['message'] = "Login Gagal";
    header("location: login.php");
}

?>