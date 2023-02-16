<?php
    if (isset ($_GET['id'])) :
        $id = $_GET['id'];
        $sql = $con->query("SELECT * FROM user WHERE id = '$id'");
        if ($sql->rowCount() == 0) {
            echo "User Tidak Terdaftar";
        }
        else {
            $row = $sql->fetch();
?>
<h3>Edit Data User</h3><hr>
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="index.php?page=user_update" method="POST">
                    <div class="mb-2 row">
                        <input type="hidden" name="id" id="id" value="<?= $row['id']?>">
                        <div class="col-2">
                            <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="username" class="form-control" 
                            value="<?= $row['username'] ?>">
                        </div>
                        <div class="col-2">
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="col-2">
                            <label for="level" class="form-label">Level</label>
                        </div>
                        <div class="col-10 mb-2">
                            <select name="level" id="level" class="form-select">
                                <option <?= ($row['level'] == "Admin") ? 
                                "selected" : "" ?> >Admin</option>
                                <option <?= ($row['level'] == "User") ? 
                                "selected" : "" ?> >User</option>
                            </select>
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