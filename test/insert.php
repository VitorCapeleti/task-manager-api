<?php
require_once '../src/connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
$dados = array();
class Insert{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function InserirUsuario(){

            
            $nome = "Pipeline Teste";
            $email = "pipeline@test.com";
            $password = "123";

            //$queryEmail = "SELECT email_var_user FROM user WHERE email_var_user = '$email' ";
            //$busacaEmail = mysqli_query($this->connection, $queryEmail);
            //$verifica = mysqli_num_rows($busacaEmail);
            $sql = "INSERT INTO user (nome_var_user, email_var_user, password_var_user) VALUES ('$nome', '$email', '$password')";
            $exquery = $this->connection->query($sql);
            if ($exquery === TRUE) {
                $sql_code = "SELECT email_var_user FROM user WHERE email_var_user='$email'";
                $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
                //echo "Usuário inserido com sucesso!";
                return true;
            } else {
                //echo "Erro ao inserir usuário: " . $this->connection->error;
                return false;
            }
    }
}

$insert = new Insert($resultado);
$result = $insert->InserirUsuario();

if ($result) {
    echo "Insert test passed.\n";
    exit(0);
} else {
    echo "Insert test failed.\n";
    exit(1);
}



?>