<?php

include('../db/koneksi.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $web = $_POST['web'];

    $sql = mysqli_query($conn, "UPDATE kontak SET lokasi = '$lokasi', alamat = '$alamat', telepon = '$telepon',
    wa = '$wa', email = '$email', web = '$web' WHERE id = '$id'");

    if ($sql) {
        header('location:../backend/kontak.php');
    } else {
        echo "Error: ";
    }

}


?>
