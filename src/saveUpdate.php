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
            $querySave = "UPDATE user SET nome_var_user = '$nome', email_var_user = '$email' WHERE id_int_user = $id";
            $excuteQuerySave = $this->connection->query($querySave);

            if ($excuteQuerySave === TRUE) {
                $sql_code = "SELECT email_var_user FROM user WHERE email_var_user='$email'";
                $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
                $quantidade = $sql_query->num_rows;
                if($quantidade == 1){
                    $usuario = $sql_query->fetch_assoc();
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    $_SESSION['email'] = $usuario['email_var_user'];
                    header('Location: list.php');
                    return $excuteQuerySave;
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