<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $penelitian = $_POST['penelitian'];
    $dosen = $_POST['dosen'];
    $tahun = $_POST['tahun'];

    $sql = "INSERT INTO hasil (penelitian, dosen, tahun) VALUES ('$penelitian', '$dosen', '$tahun')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/hasil.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>