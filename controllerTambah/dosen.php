<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $dosen = $_POST['dosen'];
    $gambar = $_FILES['foto'];

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
            window.location.href = '../tambah/dosen.php';
            </script>";
        } else {
            if ($_FILES['foto']['size'] > 5242880) {
                echo "<script>
                alert('Ukuran foto terlalu besar. Maksimal 5MB');
                window.location.href = '../tambah/dosen.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                    $namafoto = $uniqueName;
                }
                $sql = "INSERT INTO dosen (nama, dosen, foto) VALUES ('$nama', '$dosen', '$namafoto')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/dosen.php');
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