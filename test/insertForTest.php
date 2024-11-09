<?php
require_once __DIR__ . '/../src/connection.php';
$connObj = new connectionClass();
$connection = $connObj->ConectarBD();

$nome = "TestPipeline";
$email = "pipeline@test.com";
$password = "123";
$sql = "INSERT INTO user(nome_var_user, email_var_user, password_var_user) values('$nome', '$email', '$password')";
$value = $connection->query($sql);
//print($value);
$result = assert($value == 1);
if($result == 1){
    echo"Insert test passed. \n";
    exit(0);
}else{
    echo"Insert test failed. \n";
    exit(1);
}


?>