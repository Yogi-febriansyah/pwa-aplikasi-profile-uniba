<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM kontak";
$kontak = $conn->query($judul);
$data = mysqli_fetch_array($kontak);

$conn->close();
?>