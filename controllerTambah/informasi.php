<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['foto']['name'];
    if ($gambar) {
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $foto = $_FILES['foto']['name'];
            $targetDir = "../photo/";
            $uniqueName = uniqid() . "." . strtolower(pathinfo($foto, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $uniqueName;
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "<script>
                alert('Maaf file yang anda masukkan bukan foto');
                window.location.href = '../tambah/informasi.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                    $namafoto = $uniqueName;
                }
                $sql = "INSERT INTO informasi (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$namafoto')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/informasi.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!')
                    </script>";
                }
            }
        }
    } else {
        $sql = "INSERT INTO informasi (judul, deskripsi) VALUES ('$judul', '$deskripsi')";
            
        if ($conn->query($sql) === TRUE) {
            header('location:../backend/informasi.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!')
            </script>";
        }
    }
    

}

?>