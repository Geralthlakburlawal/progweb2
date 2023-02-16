<?php
    $id = ($_POST['id']);
    $username = htmlspecialchars( $_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $level = htmlspecialchars($_POST['level']);

    if (empty($username) || empty($password) || empty($level)) {
        echo "<script>
                    alert('Data Tidak Boleh Kosong!');
                    window.location.href = 'index.php?page=user';
                </script>";
    } else {
        $sql = "UPDATE  user set username = :username, password = :password, level = :level WHERE id = :id";
        $simpan = $con->prepare($sql);
        $simpan->bindParam('username', $username);
        $simpan->bindParam('password', $password);
        $simpan->bindParam('level', $level);
        $simpan->bindParam('id', $id);
        $simpan->execute();
        if ($simpan-> rowCount() > 0) {
            echo "<script>
                    alert('Data Berhasil Diubah!');
                    window.location.href = 'index.php?page=user';
                </script>";
        } else {
            echo "<script>
                    alert('Data Gagal Diubah!');
                    // window.location.href = 'index.php?page=user';
                </script>";
        }
    }