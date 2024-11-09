<?php
require_once 'readForTest.php';

if ($result) {
    echo "Insert test passed.\n";
    exit(0);
} else {
    echo "Insert test failed.\n";
    exit(1);
}



?>