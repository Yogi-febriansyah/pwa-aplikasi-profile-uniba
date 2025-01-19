<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM dosen";
$result = $conn->query($judul);

$conn->close();
?>