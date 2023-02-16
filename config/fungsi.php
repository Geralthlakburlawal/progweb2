<?php
    function scanFile($dir, $namaFile) {
        $scan = scandir($dir);
        $status = 0;

        foreach ($scan as $file) {
            if (strstr($file, $namaFile . '.php')) {
                $status = 1;
            }
        }
        return $status;
    }