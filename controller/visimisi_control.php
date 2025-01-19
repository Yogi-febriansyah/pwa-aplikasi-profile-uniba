<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM visi";
$visi = $conn->query($sql);

$sql2 = "SELECT * FROM misi";
$misi = $conn->query($sql2);

$sql3 = "SELECT * FROM informasi ORDER BY id  DESC LIMIT 5";
$result2 = $conn->query($sql3);


$conn->close();

?>