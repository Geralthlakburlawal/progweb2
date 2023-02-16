<h3>User</h3><hr>
<div class="row">
    <div class="col-10 mx-auto">
        <div class="card">
            <div class="card-body">
                <form action="index.php?page=user_save" method="POST">
                    <div class="mb-2 row">
                        <div class="col-2">
                            <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="col-10 mb-2">
                            <input type="text" name="username" class="form-control">
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
                                <option>Admin</option>
                                <option>User</option>
                            </select>
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
                            <th>No</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $sql = $con->query("SELECT * FROM user");
                            while ($row = $sql->fetch()) {
                                echo "<tr>
                                <td>$no</td>
                                <td>$row[username]</td>
                                <td>$row[level]</td>
                                <td>
                                    <a href='index.php?page=user_edit&id=$row[id]'
                                    class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='index.php?page=user_delete&id=$row[id]' 
                                    onclick=\"return confirm('Hapus Data?')\"class='btn 
                                    btn-danger btn-sm'>Hapus</a>
                                </td>
                            </tr>";
                            $no++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>