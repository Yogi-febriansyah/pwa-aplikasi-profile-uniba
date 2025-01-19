<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM paragraf";
$paragraf = $conn->query($sql);

$sql2 = "SELECT * FROM kurikulum";
$kurikulum = $conn->query($sql2);

$sql2 = "SELECT * FROM informasi ORDER BY id  DESC LIMIT 5";
$result2 = $conn->query($sql2);


$conn->close();

?>