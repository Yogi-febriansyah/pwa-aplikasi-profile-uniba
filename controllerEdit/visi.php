<?php

include('../db/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entitas = $_POST['id'];
    $visi = $_POST['visi'];

    $sql = mysqli_query($conn, "UPDATE visi SET visi = '$visi' WHERE id = '$entitas'");

    if ($sql) {
        header('location:../backend/visi_misi.php');
    } else {
        echo "Error: ";
    }

}

?>