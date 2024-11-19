<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
class Update {
    private $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }

    public function updateUsuario() {
        $id = $_GET['id'];
        if (!empty($id)) {
            $query = "SELECT * FROM users WHERE id = $id";
            $excuteQuery = $this->connection->query($query);
            $verifica = mysqli_num_rows($excuteQuery);

            if ($verifica > 0) {
                // Obtém os dados do usuário
                $user_data = mysqli_fetch_assoc($excuteQuery);
                $nome = $user_data['nome'];
                $email = $user_data['email'];

                // Retorna os dados como um array associativo
                return ['nome' => $nome, 'email' => $email];
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
