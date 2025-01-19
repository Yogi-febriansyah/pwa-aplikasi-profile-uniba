<?php

include('../db/koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entitas = $_POST['id'];
    $paragraf = $_POST['paragraf'];

    $sql = mysqli_query($conn, "UPDATE paragraf SET paragraf = '$paragraf' WHERE id = '$entitas'");

    if ($sql) {
        header('location:../backend/sistem_kuliah.php');
    } else {
        echo "Error: ";
    }

}

?>