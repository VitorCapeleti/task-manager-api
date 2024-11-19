<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
class SaveUpdate {
    private $connection;
    public function __construct($connection) {
        $this->connection = $connection;
    }
    public function saveUpdateUsuario() {
        if (isset($_POST['Update'])) {
            $id = $_GET['id'];
            $nome = $_POST['name'];
            $email = $_POST['email'];
            $querySave = "UPDATE users SET nome = '$nome', email = '$email' WHERE id = $id";
            $excuteQuerySave = $this->connection->query($querySave);
            if ($excuteQuerySave === TRUE) {
                $sql_code = "SELECT email FROM users WHERE email='$email'";
                $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
                if($sql_query == true){
                    header('Location: list.php');
                    exit();
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
}
?>