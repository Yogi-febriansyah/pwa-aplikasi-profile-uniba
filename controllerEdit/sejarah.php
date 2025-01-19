<?php

include('../db/koneksi.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entitas = $_POST['entitas'];
    $data_panjang = $_POST['paragraf'];

    $sql = mysqli_query($conn, "UPDATE sejarah SET paragraf = '$data_panjang' WHERE id = '$entitas'");

    if ($sql) {
        header('location:../backend/sejarah.php');
    } else {
        echo "Error: ";
    }

}


?>
