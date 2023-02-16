<?php
    try {
        //koneksi
        $con = new PDO('mysql:host=localhost;dbname=projectmhs', 'root', '');
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    } catch (PDOException $e) {
        echo "Koneksi Gagal : ". $e->getMessage(). "<br>";
        die();
    }