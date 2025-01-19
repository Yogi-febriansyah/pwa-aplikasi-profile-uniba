<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_FILES['foto'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto']['name'];
        $targetDir = "../uploads/";
        $uniqueName = uniqid() . "." . strtolower(pathinfo($foto, PATHINFO_EXTENSION));
        $targetFile = $targetDir . $uniqueName;
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
            alert('Maaf file yang anda masukkan bukan foto');
            window.location.href = '../tambah/fasilitas.php';
            </script>";
        } else {
            if ($_FILES['foto']['size'] > 2097152) {
                echo "<script>
                alert('Ukuran foto terlalu besar. Maksimal 2MB');
                window.location.href = '../tambah/fasilitas.php';
                </script>";
                return back();
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                    $namafoto = $uniqueName;
                }
                $sql = "INSERT INTO fasilitas (judul, deskripsi, foto) VALUES ('$judul', '$deskripsi', '$namafoto')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/fasilitas.php');
                } else {
                    echo "<script>
                    alert('Data gagal ditambahkan!')
                    </script>";
                }
            }
        }
    }

}

?>