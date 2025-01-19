<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $paragraf = $_POST['paragraf'];

    $sql = "INSERT INTO paragraf (paragraf) VALUES ('$paragraf')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/sistem_kuliah.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>