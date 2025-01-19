<?php

session_start();


if (!isset($_SESSION['id'])) {

    header("Location:../login.php");
    exit();
}

// Ambil data dari session
$nama = $_SESSION['nama'];


?>