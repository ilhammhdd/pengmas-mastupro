<?php
session_start();
require_once('db_connection.php');

$id = $_POST["id"];
$nama = $_POST["nama"];
$keterangan = $_POST["keterangan"];
$linkKeterangan = $_POST["nama"];
$namaFile = 'storage/images/' . $_POST["nama_file"];

$query = "UPDATE programming_language SET id='$id', nama='$nama', keterangan='$keterangan', nama_file='$namaFile', link_keterangan='$linkKeterangan' WHERE id='$id'";

$connStatus = $conn->query($query);

$target_dir = "storage/images/";
$target_file = $target_dir . basename($_POST["nama_file"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["the_file"]["tmp_name"]);
    if ($check !== false) {
//        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File bukan sebuah gambar.";
        $uploadOk = 0;
    }
}

// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/

// Check file size
if ($_FILES["the_file"]["size"] > 8000000) {
    echo "Maaf, file anda terlalu besar.";
    $uploadOk = 0;
}

// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"
) {
    echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Maaf, file anda tidak berhasil diupload.";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["the_file"]["tmp_name"], $target_file)) {
//        echo "The file " . basename($_FILES["the_file"]["name"]) . " has been uploaded.";
        $_SESSION["editing-language"] = null;
        header("location: admin_edit_programming_languages.php");
    } else {
        echo "Maaf, terjadi masalah saat proses upload file anda.";
    }
}
?>