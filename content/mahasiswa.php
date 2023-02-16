<h3>Mahasiswa</h3><hr>
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="index.php?page=mahasiswa_save" method="POST">
                    <div class="mb-2 row">
                        <div class="col-2">
                            <label for="nim" class="form-label">NIM</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="nim" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="nama" class="form-label">Nama</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="nama_mhs" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="jurusan" class="form-label">Jurusan</label>
                        </div>
                        <div class="col-10 mb-2">
                            <select name="jurusan" id="jurusan" class="form-select">
                                <option selected disabled>--Pilih Jurusan--</option>
                                <option>Teknik Informatika</option>
                                <option>Sistem Informasi</option>
                                <option>Bisnis Digital</option>
                                <option>Desain Komunikasi Visual</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="alamat" class="form-control">
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-secondary">
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = $con->query("SELECT * FROM mahasiswa");
                            while ($row = $sql->fetch()) {
                                echo "<tr>
                                <td>$row[nim]</td>
                                <td>$row[nama_mhs]</td>
                                <td>$row[jurusan]</td>
                                <td>$row[alamat]</td>
                                <td>
                                    <a href='index.php?page=mahasiswa_edit&nim=$row[nim]' 
                                    class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='index.php?page=mahasiswa_delete&nim=$row[nim]' 
                                    onclick=\"return confirm('Hapu Data?')\"class='btn btn-danger btn-sm'>Hapus</a>
                                </td>
                            </tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>