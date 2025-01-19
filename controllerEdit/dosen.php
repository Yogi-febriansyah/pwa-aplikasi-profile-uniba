<?php

include('../db/koneksi.php');

if(isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $foto_lama = $_POST['foto_lama'];
    $nama = $_POST['nama'];
    $dosen = $_POST['dosen'];
    $gambar = $_FILES['foto'];
    $foto_baru = $_FILES['foto']['name'];
    if ($foto_baru) {
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
            $foto = $_FILES['foto']['name'];
            $targetDir = "../image/";
            $uniqueName = uniqid() . "." . strtolower(pathinfo($foto, PATHINFO_EXTENSION));
            $targetFile = $targetDir . $uniqueName;
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "<script>
                alert('Maaf file yang anda masukkan bukan foto');
                window.location.href = '../edit/dosen.php';
                </script>";
            } else {
                if ($_FILES['foto']['size'] > 5242880) {
                    echo "<script>
                    alert('Ukuran foto terlalu besar. Maksimal 5MB');
                    window.location.href = '../edit/dosen.php';
                    </script>";
                } else {
                    if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                        unlink("../uploads/$foto_lama");
                        $namafoto = $uniqueName;
                    }
                    $sql = "UPDATE dosen SET nama = '$nama', dosen = '$dosen', foto = '$namafoto' WHERE id = '$id'";
            
                    if ($conn->query($sql) === TRUE) {
                        header('location:../backend/dosen.php');
                    } else {
                        echo "<script>
                        alert('Data gagal ditambahkan!');
                        window.location.href = '../edit/dosen.php';
                        </script>";
                    }
                }
            }
        }
    } else {
        $sql = "UPDATE dosen SET nama = '$nama', dosen = '$dosen' WHERE id = '$id'";
            
        if ($conn->query($sql) === TRUE) {
            header('location:../backend/dosen.php');
        } else {
            echo "<script>
            alert('Data gagal ditambahkan!');
            window.location.href = '../edit/dosen.php';
            </script>";
        }
    }

    

}

?>