<?php
if (isset ($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $con->prepare("DELETE FROM user WHERE id = ?");
    $delete->bindParam(1, $id);
    $delete->execute();

    if ($delete->rowCount() > 0) {
        echo "<script>
                alert('User Berhasil Dihapus!');
                window.location.href = 'index.php?page=user';
            </script>";
    } else {
        echo "<script>
                alert('User Gagal Dihapus!');
                window.location.href = 'index.php?page=user';
            </script>";
    }
}