<?php
require_once 'connection.php';
$connObj = new connectionClass();
$connection = $connObj->ConectarBD();

        $sql = "SELECT * FROM user";
        $result = $connection->query($sql);


if ($result) {
    echo "Insert test passed.\n";
    exit(0);
} else {
    echo "Insert test failed.\n";
    exit(1);
}



?>