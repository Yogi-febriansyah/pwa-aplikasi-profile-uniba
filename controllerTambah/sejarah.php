<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $paragraf = $_POST['paragraf'];

    $sql = "INSERT INTO sejarah (paragraf) VALUES ('$paragraf')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/sejarah.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>