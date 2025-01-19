<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM informasi";
$result = $conn->query($judul);

$conn->close();
?>