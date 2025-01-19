<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $visi = $_POST['visi'];

    $sql = "INSERT INTO visi (visi) VALUES ('$visi')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/visi_misi.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>