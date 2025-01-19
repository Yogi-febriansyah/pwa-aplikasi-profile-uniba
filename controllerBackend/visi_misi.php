<?php

include('../db/koneksi.php');

$sql = "SELECT * FROM visi";
$result = $conn->query($sql);
if(isset($_GET['action']) && $_GET['action'] == 'hapus') {
    $id = $_GET['id'];
    $data = mysqli_query($conn, "SELECT * FROM visi where id = '$id'");
    if(mysqli_num_rows($data)) {
        $hapus_data = mysqli_query($conn, "DELETE FROM visi where id = '$id'");
        if(!$hapus_data) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:visi_misi.php');
        }
    }
}

$sql2 = "SELECT * FROM misi";
$result2 = $conn->query($sql2);
if(isset($_GET['action']) && $_GET['action'] == 'hapus_data') {
    $id2 = $_GET['id_data'];
    $data2 = mysqli_query($conn, "SELECT * FROM misi where id = '$id2'");
    if(mysqli_num_rows($data2)) {
        $hapus_data2 = mysqli_query($conn, "DELETE FROM misi where id = '$id2'");
        if(!$hapus_data2) {
            die('Query Error '. mysqli_error($conn));
        } else {
            header('location:visi_misi.php');
        }
    }
}

?>