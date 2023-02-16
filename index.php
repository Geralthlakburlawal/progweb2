<?php
session_start();
require_once 'config/fungsi.php';
require_once 'config/koneksi.php';

if (empty($_SESSION['progweb_2'])) {
    echo "<script>
        alert('Anda belum login');
        window.location.href = 'login.php';
    </script>";
} else {
    # code...
    $user = $_SESSION['progweb_2'];
    $level = $_SESSION['progweb_2_level'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h3>GER</h3></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <?php 
                if ($level == "Admin") {
                    require_once 'config/menu.php';
                } else {
                    require_once 'config/menu_user.php';
                } ?>

            </div>
        </div>
    </nav>
    <div id="container">
        <?php
            $dir = "content";
            $page = @$_GET['page'];

            if (empty($page)) {
                include "content/home.php";
            }
            else {
                $scan = scanFile($dir, $page);
                if ($scan === 1) {
                    include "content/$page.php";
                }
                else {
                    include "content/404.php";
                }
            }
        ?>
    </div>
</body>
</html>

<?php } ?>