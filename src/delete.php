<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
class Delete {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function deleteUsuario() {
        $id = $_GET['id'];
        if (!empty($id)) {
            $queryCount = "SELECT COUNT(*) FROM `user` ";
            $excuteQueryCount = $this->connection->query($queryCount);
            $query = "SELECT * FROM user WHERE id_int_user = $id";
            $excuteQuery = $this->connection->query($query);
            $verifica = mysqli_num_rows($excuteQuery);

            if ($verifica > 0) {
                $queryDelete = "DELETE * FROM user WHERE id_int_user = $id";
                $excuteQueryDelete = $this->connection->query($query);
                if($excuteQueryDelete === TRUE){
                    return $excuteQueryCount;
                }else{
                    echo 'Erro ao executar o delete';
                    return false;
                }
            } else {
                echo 'Erro ao requisitar o usuário';
                return false;
            }
        } else {
            echo 'ID inválido.';
            return false;
        }
    }
}
?>
