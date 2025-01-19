<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $akreditasi = $_POST['akreditasi'];
    $nosk = $_POST['nosk'];
    $masa = $_POST['masa'];

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $file = $_FILES['file']['name'];
        $targetDir = "../file/";
        $targetFile = $targetDir . $file;
        $allowedExtensions = ['doc', 'pdf', 'docx'];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
            alert('Maaf file yang anda masukkan tidak termasuk dalam daftar. Harus pdf atau word');
            window.location.href = '../tambah/akreditasi.php';
            </script>";
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                $namafile = $file;
            }
            $sql = "INSERT INTO akreditasi (akreditasi, nosk, masa, file) VALUES ('$akreditasi', '$nosk', '$masa', '$namafile')";
    
            if ($conn->query($sql) === TRUE) {
                header('location:../backend/akreditasi.php');
            } else {
                echo "<script>
                alert('Data gagal ditambahkan!')
                </script>";
            }
        }
    }

}

?>