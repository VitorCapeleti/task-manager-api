<?php
require_once '../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();

assert($resultado instanceof mysqli, 'A conexão com o Banco de dados falhou');
echo'TESTE PASSOU';

?>