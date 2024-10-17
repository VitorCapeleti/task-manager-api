<?php
require_once '../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
include_once '../src/saveUpdate.php';
if(!isset($_SESSION)){
    session_start();
}
class TestSave{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function testSave(){
            $email = $_SESSION['email'];
            $queryEmail = "SELECT email_var_user FROM user WHERE email_var_user = '$email'";
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
$teste = new TestSave($resultado);
$aprovado = $teste->testSave();

assert($aprovado === true, 'TESTE NÃO PASSOU');
echo'TESTE PASSOU';


session_destroy();
?>