<?php
require_once __DIR__ . '/../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();

$result =  assert($resultado instanceof mysqli, 'A conexão com o Banco de dados falhou');
if($result == 1){
    echo"Connection test passed. \n";
    exit(0);
}else{
    echo"Connection test failed. \n";
    exit(1);
}

?>