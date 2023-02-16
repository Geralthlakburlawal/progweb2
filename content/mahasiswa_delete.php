<?php
if (isset ($_GET['nim'])) {
    $nim = $_GET['nim'];

    $delete = $con->prepare("DELETE FROM mahasiswa WHERE nim = ?");
    $delete->bindParam(1, $nim);
    $delete->execute();

    if ($delete->rowCount() > 0) {
        echo "<script>
                alert('Data Berhasil Dihapus!');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    } else {
        echo "<script>
                alert('Data Gagal Dihapus!');
                window.location.href = 'index.php?page=mahasiswa';
            </script>";
    }
}