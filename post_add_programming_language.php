<?php
session_start();
require_once('db_connection.php');

$nama = $_POST["nama"];
$keterangan = $_POST["keterangan"];
$link_keterangan = $_POST["nama"];
$nama_file = 'storage/images/' . $_POST["nama_file"];

$query = "INSERT INTO programming_language(nama, keterangan, nama_file, link_keterangan) VALUES ('$nama','$keterangan','$nama_file','$link_keterangan')";

$connStatus = $conn->query($query);

if($connStatus){
    echo 'berhasil';
}else{
    echo 'gagal karena '.$connStatus;
}

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
        header("location: admin_home.php");
    } else {
        echo "Maaf, terjadi masalah saat proses upload file anda.";
    }
}

?>