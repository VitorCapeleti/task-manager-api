<?php
require_once '../src/read.php';
$read = new Read($resultado);
$value = $read->listarUsuario();

// Verifica se o retorno é uma instância de mysqli_result ou se é false (caso não haja usuários)
if ($value !== false) {
    // Verifica se o retorno é uma instância de mysqli_result
    assert($value instanceof mysqli_result, 'TESTE NÃO PASSOU - Retorno não é uma instância de mysqli_result');
    echo 'TESTE PASSOU - Consulta retornou resultados';
} else {
    echo 'TESTE NÃO PASSOU - Nenhum usuário encontrado ou erro na consulta';
}
?>