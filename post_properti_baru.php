<?php
require_once('db_connection.php');

$kode_iklan = $_POST['kode_iklan'];
$jenis = $_POST['jenis'];
$gambar = 'files/images/' . $_FILES["filenya"]["name"];
$harga = $_POST['harga'];

$query = "INSERT INTO kuis1_1202150049(kode_iklan, jenis, gambar, harga) VALUES('$kode_iklan', '$jenis', '$gambar', '$harga')";

$conn->query($query);

$target_dir = "files/images/";
$target_file = $target_dir . basename($_FILES["filenya"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["filenya"]["tmp_name"]);
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
if ($_FILES["filenya"]["size"] > 8000000) {
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
    if (move_uploaded_file($_FILES["filenya"]["tmp_name"], $target_file)) {
//        echo "The file " . basename($_FILES["filenya"]["name"]) . " has been uploaded.";
        header("location: display_1202150049.php");
    } else {
        echo "Maaf, terjadi masalah saat proses upload file anda.";
    }
}
?>