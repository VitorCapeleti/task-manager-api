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
            $sql_code = "SELECT * FROM users WHERE id='$id'";
            $sql_query = $this->connection->query($sql_code) or die("Erro no código sql");
            $sql = "DELETE FROM users WHERE id = '$id'";
            $exquery = $this->connection->query($sql);
            if ($exquery === TRUE) {
                echo '<script>
                    window.location.href = "list.php";
                </script>';
                exit();
                
            } else {
                echo "Erro ao exclui usuário: " . $this->connection->error;
            }  
        }
    }
}
?>
