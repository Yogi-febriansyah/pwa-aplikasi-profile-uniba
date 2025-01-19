<?php
include('db/koneksi.php');
$sql = "SELECT * FROM pengumuman ORDER BY id  DESC LIMIT 5";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM informasi ORDER BY id  DESC LIMIT 5";
$result2 = $conn->query($sql2);

$conn->close();
?>
