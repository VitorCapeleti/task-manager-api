<?php
require_once 'readForTest.php';

// Aqui, verifique se o $result foi definido corretamente no arquivo `readForTest.php`
if (isset($result) && $result->num_rows > 0) {
    echo "Read test passed.\n";
    exit(0);
} else {
    echo "Read test failed.\n";
    exit(1);
}
?>
