<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM pengumuman";
$result = $conn->query($judul);

$conn->close();
?>