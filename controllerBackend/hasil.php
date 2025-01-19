<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM hasil";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM hasil where id = '$id'");
    if(mysqli_num_rows($data)) {
        $hapus_data = mysqli_query($conn, "DELETE FROM hasil where id = '$id'");
        if(!$hapus_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:hasil.php');
        }
    }
}
?>