<?php 
require_once '../src/delete.php';
require_once '../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();

$delete = new Delete($resultado);
$retorno = $delete->deleteUsuario();
if(!isset($_SESSION)){
    session_start();
}
if(isset( $_SESSION['id'])){
    $id = $_SESSION['id'];
    $sql_code = "SELECT * FROM user WHERE id_int_user='$id'";
    $busacaId = mysqli_query($resultado, $sql_code);
    $verifica = mysqli_num_rows($busacaId);

assert(empty($verifica), 'TESTE NÃO PASSOU');
echo 'TESTE PASSOU';
}else{
assert(!empty($verifica), 'TESTE SESSÃO NÃO PASSOU');
echo 'TESTE SESSAO PASSOU';
}



session_destroy();
?>