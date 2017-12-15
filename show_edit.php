<?php
session_start();
require_once('db_connection.php');

$language = [];

$language["idLanguage"] = $_POST["id-language"];
$language["namaLanguage"] = $_POST["nama-language"];
$language["keteranganLanguage"] = $_POST["keterangan-language"];
$language["linkKeteranganLanguage"] = $_POST["link-keterangan-language"];
$language["namaFileLanguage"] = $_POST["nama-file-language"];

$_SESSION["editing-language"] = $language;

header("location: edit.php");
?>