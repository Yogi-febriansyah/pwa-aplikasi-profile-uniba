<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM sejarah";
$sejarah = $conn->query($sql);

$sql2 = "SELECT * FROM informasi ORDER BY id  DESC LIMIT 5";
$result2 = $conn->query($sql2);

$conn->close();

?>