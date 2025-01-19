<?php

include('../db/koneksi.php');

$judul = "SELECT * FROM hasil";
$result = $conn->query($judul);

$sql2 = "SELECT * FROM informasi ORDER BY id  DESC LIMIT 5";
$result2 = $conn->query($sql2);

$conn->close();
?>