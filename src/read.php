<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
class Read{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function listarUsuario(){
            $query = "SELECT * FROM users ORDER BY id DESC";
            $excuteQuery = $this->connection->query($query);
            $verifica = mysqli_num_rows($excuteQuery);
            if($verifica >= 1){
                return $excuteQuery;
            }else{
                return false;
            }
    }
}

?>
