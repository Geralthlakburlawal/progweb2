<?php
    if (isset ($_GET['nim'])) :
        $nim = $_GET['nim'];
        $sql = $con->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");
        if ($sql->rowCount() == 0) {
            echo "NIM Tidak Terdaftar";
        }
        else {
            $row = $sql->fetch();
?>
<h3>Edit Data Mahasiswa</h3><hr>
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="index.php?page=mahasiswa_update" method="POST">
                    <div class="mb-2 row">
                        <div class="col-2">
                            <label for="nim" class="form-label">NIM</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="nim" class="form-control" 
                            value="<?= $row['nim'] ?>" readonly>
                        </div>
                        <div class="col-2">
                            <label for="nama" class="form-label">Nama</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="nama" class="form-control" 
                            value="<?= $row['nama'] ?>">
                        </div>
                        <div class="col-2">
                            <label for="jurusan" class="form-label">Jurusan</label>
                        </div>
                        <div class="col-10 mb-2">
                            <select name="jurusan" id="jurusan" class="form-select">
                                <option disabled>--Pilih Jurusan--</option>
                                <option <?= ($row['jurusan'] == "Teknik Informatika") ? 
                                "selected" : "" ?> >Teknik Informatika</option>
                                <option <?= ($row['jurusan'] == "Sistem Informasi") ? 
                                "selected" : "" ?> >Sistem Informasi</option>
                                <option <?= ($row['jurusan'] == "Bisnis Digital") ? 
                                "selected" : "" ?> >Bisnis Digital</option>
                                <option <?= ($row['jurusan'] == "Desain Komunikasi Visual") ? 
                                "selected" : "" ?> >Desain Komunikasi Visual</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="alamat" class="form-control" 
                            value="<?= $row['alamat'] ?>">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    }
endif; 
?>