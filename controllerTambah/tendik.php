<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gambar = $_FILES['foto'];

    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $foto = $_FILES['foto']['name'];
        $targetDir = "../fotoStaff/";
        $uniqueName = uniqid() . "." . strtolower(pathinfo($foto, PATHINFO_EXTENSION));
        $targetFile = $targetDir . $uniqueName;
        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        if (!in_array($fileExtension, $allowedExtensions)) {
            echo "<script>
            alert('Maaf file yang anda masukkan bukan foto');
            window.location.href = '../tambah/tendik.php';
            </script>";
        } else {
            if ($_FILES['foto']['size'] > 5242880) {
                echo "<script>
                alert('Ukuran foto terlalu besar. Maksimal 5MB');
                window.location.href = '../tambah/tendik.php';
                </script>";
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                    $namafoto = $uniqueName;
                }
                $sql = "INSERT INTO tendik (nama, jabatan, foto) VALUES ('$nama', '$jabatan', '$namafoto')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/tendik.php');
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