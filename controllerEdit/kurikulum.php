<?php

include('../db/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entitas = $_POST['id'];
    $kurikulum = $_POST['kurikulum'];

    $sql = mysqli_query($conn, "UPDATE kurikulum SET kurikulum = '$kurikulum' WHERE id = '$entitas'");

    if ($sql) {
        header('location:../backend/sistem_kuliah.php');
    } else {
        echo "Error: ";
    }

}

?>