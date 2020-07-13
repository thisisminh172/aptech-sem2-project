<?php

function getConnect() {
    /*
      test ket noi den csdl 1910.M1 cua MySQL
     */
    define('DB_HOST', 'db4free.net:3306');
    define('DB_USER', 'haygear');
    define('DB_PASS', 'haygear!@#');
    define('DB_NAME', 'haygeardb');

    $cn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (!$cn) {
        echo "<h3>ket noi that bai</h3>";
    }
    return $cn;
}

?>