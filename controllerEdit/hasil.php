<?php

include('../db/koneksi.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $penelitian = $_POST['penelitian'];
    $dosen = $_POST['dosen'];
    $tahun = $_POST['tahun'];

    $sql = mysqli_query($conn, "UPDATE hasil SET penelitian = '$penelitian', dosen = '$dosen',
    tahun = '$tahun' WHERE id = '$id'");

    if ($sql) {
        header('location:../backend/hasil.php');
    } else {
        echo "Error: ";
    }

}


?>
