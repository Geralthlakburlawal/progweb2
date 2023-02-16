<?php
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars( $_POST['password']);
    $level = htmlspecialchars($_POST['level']);

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        echo "<script>
                    alert('Data Tidak Boleh Kosong!');
                    window.location.href = 'index.php?page=user';
                </script>";
    } else {
        $cek = $con->query("SELECT * FROM user WHERE id = '$id'");

        if ($cek->rowCount() == 0) {
            $sql = "INSERT INTO user (username, password, level) VALUES (?, ?, ?)";
            $simpan = $con->prepare($sql);
            $simpan->bindParam(1, $username);
            $simpan->bindParam(2, $password_hash);
            $simpan->bindParam(3, $level);
            $simpan->execute();
        
            if ($simpan-> rowCount() > 0) {
                echo "<script>
                        alert('Data Berhasil Ditambahkan!');
                        window.location.href = 'index.php?page=user';
                    </script>";
            } else {
                echo "<script>
                        alert('Data Gagal Ditambahkan!');
                        window.location.href = 'index.php?page=user';
                    </script>";
            }
        } else {
            echo "<script>
                        alert('Username Sudah Ada');
                        window.location.href = 'index.php?page=user';
                    </script>";
        }
    }