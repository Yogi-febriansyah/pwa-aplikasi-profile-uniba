<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $lokasi = $_POST['lokasi'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $wa = $_POST['wa'];
    $email = $_POST['email'];
    $web = $_POST['web'];

    $sql = "INSERT INTO kontak (lokasi, alamat, telepon, wa, email, web) VALUES ('$lokasi', '$alamat', '$telepon',
    '$wa', '$email', '$web')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/kontak.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>