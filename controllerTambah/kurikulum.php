<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $kurikulum = $_POST['kurikulum'];

    $sql = "INSERT INTO kurikulum (kurikulum) VALUES ('$kurikulum')";

    if ($conn->query($sql) === TRUE) {
        header('location:../backend/sistem_kuliah.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>