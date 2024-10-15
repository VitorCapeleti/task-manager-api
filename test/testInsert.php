<?php
require_once '../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
include_once '../src/insert.php';
if(!isset($_SESSION)){
    session_start();
}
class TestInsert{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function testInsert(){
            $queryEmail = "SELECT email_var_user FROM user ORDER BY id_int_user DESC LIMIT 1";
            $busacaEmail = mysqli_query($this->connection, $queryEmail);
            $verifica = mysqli_num_rows($busacaEmail);
            if($verifica == 1){
                $usuario = $busacaEmail->fetch_assoc();
                //var_dump($usuario);
                //echo $_SESSION['email'];
                if($usuario['email_var_user'] === $_SESSION['email']){
                    return true;
                }else{
                    return false;
                }
            }
    }
    
}
$teste = new TestInsert($resultado);
$aprovado = $teste->testInsert();

assert($aprovado === true, 'TESTE NÃO PASSOU');
echo'TESTE PASSOU';


session_destroy();
?>