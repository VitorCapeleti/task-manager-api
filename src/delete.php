<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
//$dados = array();
class Delete{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function deleteUsuario(){
        if(isset($_POST['Delete'])){
            $id = $_POST['id'];

            //$queryEmail = "SELECT email_var_users FROM users WHERE email_var_users = '$email' ";
            //$busacaEmail = mysqli_query($this->connection, $queryEmail);
            //$verifica = mysqli_num_rows($busacaEmail);
            $sql_code = "SELECT * FROM users WHERE id='$id'";
            $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
            $usuario = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];

            $sql = "DELETE FROM users WHERE id = '$id'";
            $exquery = $this->connection->query($sql);
            if ($exquery === TRUE) {
                header('Location: list.php');
                return true;
            } else {
                echo "Erro ao inserir usuário: " . $this->connection->error;
                //return false;
            }
            
        }
    }
}


?>
