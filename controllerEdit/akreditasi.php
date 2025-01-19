<?php

include('../db/koneksi.php');

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $file_lama = $_POST['file_lama'];
    $akreditasi = $_POST['akreditasi'];
    $nosk = $_POST['nosk'];
    $masa = $_POST['masa'];
    $gambar = $_FILES['file'];
    $file_baru = $_FILES['file']['name'];
    if ($file_baru) {
        if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
            $file = $_FILES['file']['name'];
            $targetDir = "../file/";
            $uniqueName = uniqid() . "." . strtolower(pathinfo($file, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $uniqueName;
            $allowedExtensions = ['pdf', 'doc', 'docx'];
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "<script>
                alert('Maaf file yang anda masukkan bukan file');
                window.location.href = '../edit/akreditasi.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFile)) {
                    unlink("../uploads/$file_lama");
                    $namafile = $uniqueName;
                }
                $sql = "UPDATE akreditasi SET nosk = '$nosk', akreditasi = '$akreditasi', masa = '$masa', file = '$namafile' WHERE id = '$id'";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/akreditasi.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!');
                    window.location.href = '../edit/akreditasi.php';
                    </script>";
                }
            }
        }
    } else {
        $sql = "UPDATE akreditasi SET nosk = '$nosk', akreditasi = '$akreditasi', masa = '$masa' WHERE id = '$id'";
            
        if ($conn->query($sql) === TRUE) {
            header('location:../backend/akreditasi.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!');
            window.location.href = '../edit/akreditasi.php';
            </script>";
        }
    }

    

}

?>