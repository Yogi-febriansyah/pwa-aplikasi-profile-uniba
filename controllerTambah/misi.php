<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $misi = $_POST['misi'];

    $sql = "INSERT INTO misi (misi) VALUES ('$misi')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/visi_misi.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>