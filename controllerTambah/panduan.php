<?php

include('../db/koneksi.php');

if(isset($_POST['simpan'])) {
    $deskripsi = $_POST['deskripsi'];

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
            window.location.href = '../tambah/panduan.php';
            </script>";
        } else {
            if ($_FILES['foto']['size'] > 9097152) {
                echo "<script>
                alert('Ukuran foto terlalu besar. Maksimal 5MB');
                window.location.href = '../tambah/panduan.php';
                </script>";
                return back();
            } else {
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $targetFile)) {
                    $namafoto = $uniqueName;
                }
                $sql = "INSERT INTO panduan (deskripsi, foto) VALUES ('$deskripsi', '$namafoto')";
        
                if ($conn->query($sql) === TRUE) {
                    header('location:../backend/panduan.php');
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