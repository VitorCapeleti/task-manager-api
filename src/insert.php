<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
$dados = array();
class Insert{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function InserirUsuario(){
        if(isset($_POST['Cadastrar']) AND !empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['password'])){
            
            $nome = mysqli_real_escape_string($this->connection, $_POST['name']);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            //$queryEmail = "SELECT email FROM usuario WHERE email = '$email' ";
            //$busacaEmail = mysqli_query($this->connection, $queryEmail);
            //$verifica = mysqli_num_rows($busacaEmail);
            $sql = "INSERT INTO users (nome, email, senha) VALUES ('$nome', '$email', '$password')";
            $exquery = $this->connection->query($sql);
            if ($exquery === TRUE) {
                $sql_code = "SELECT email FROM usuario WHERE email='$email'";
                $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
                $quantidade = $sql_query->num_rows;
                if($quantidade == 1){
                    $usuario = $sql_query->fetch_assoc();
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['email'] = $usuario['email'];
                }
                //echo "Usuário inserido com sucesso!";
                //return true;
            } else {
                echo "Erro ao inserir usuário: " . $this->connection->error;
                //return false;
            }
            
        }
    }
}


?>