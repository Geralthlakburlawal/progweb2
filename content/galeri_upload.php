<?php
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $type_file = $_FILES['gambar']['type'];
    $size_file = $_FILES['gambar']['size'];

    $allowedFile = ['png','jpg','jpeg'];
    $tipe = pathinfo($nama_file, PATHINFO_EXTENSION);

    if (in_array($tipe, $allowedFile)) {
        if ($size_file > 2000000) {
            echo "<script>
                    alert('Ukuran Gambar Tidak Boleh Lebih Dari 2MB');
                    window.location.href = 'index.php?page=Galeri'
                </script>";
        }
        else {
            if (move_uploaded_file($tmp_file, "img/".$nama_file)) {
                echo "<script>
                    alert('File Berhasil Diupload');
                    window.location.href = 'index.php?page=Galeri'
                </script>";
            }
            else {
                echo "<script>
                    alert('File Gagal Diupload');
                    window.location.href = 'index.php?page=Galeri'
                </script>";
            }
        }
    }
    else {
        echo "<script>
        alert('Eksistensi File Tidak Didukung');
        window.location.href = 'index.php?page=Galeri'
    </script>";
    }
    
