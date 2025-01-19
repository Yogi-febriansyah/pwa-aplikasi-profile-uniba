<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM tendik";
$result = $conn->query($judul);

$conn->close();
?>