<?php

include('../db/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entitas = $_POST['id'];
    $misi = $_POST['misi'];

    $sql = mysqli_query($conn, "UPDATE misi SET misi = '$misi' WHERE id = '$entitas'");

    if ($sql) {
        header('location:../backend/visi_misi.php');
    } else {
        echo "Error: ";
    }

}

?>