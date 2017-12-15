<?php
session_start();
require_once('db_connection.php');

$idLanguage = $_POST["id-language"];

$query = "DELETE FROM programming_language WHERE id=".$idLanguage;

$connStatus = $conn->query($query);

unlink($_POST["nama-file"]);
if($connStatus){
    header("location: admin_edit_programming_languages.php");
}
?>