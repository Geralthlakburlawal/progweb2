<?php
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars( $_POST['nama_mhs']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $alamat = htmlspecialchars($_POST['alamat']);

    if (empty($nim) || empty($nama) || empty($jurusan) || empty($alamat)) {
        echo "<script>
                    alert('Data Tidak Boleh Kosong!');
                    window.location.href = 'index.php?page=mahasiswa';
                </script>";
    } else {
        $cek = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");

        if ($cek->rowCount() == 0) {
            $sql = "INSERT INTO mahasiswa VALUES (?, ?, ?, ?)";
            $simpan = $con->prepare($sql);
            $simpan->bindParam(1, $nim);
            $simpan->bindParam(2, $nama);
            $simpan->bindParam(3, $jurusan);
            $simpan->bindParam(4, $alamat);
            $simpan->execute();
        
            if ($simpan-> rowCount() > 0) {
                echo "<script>
                        alert('Data Berhasil Ditambahkan!');
                        window.location.href = 'index.php?page=mahasiswa';
                    </script>";
            } else {
                echo "<script>
                        alert('Data Gagal Ditambahkan!');
                        window.location.href = 'index.php?page=mahasiswa';
                    </script>";
            }
        } else {
            echo "<script>
                        alert('NIM Sudah Ada');
                        window.location.href = 'index.php?page=mahasiswa';
                    </script>";
        }
    }