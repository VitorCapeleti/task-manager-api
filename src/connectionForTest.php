<?php
class connectionClass {
    private $localhost = "127.0.0.1";  // ou 'localhost', se for local
    private $username = "test_user";    // Usuário de teste do banco de dados
    private $password = "test_password"; // Senha de autenticação para o usuário
    private $bdname = "crud";          // Nome do banco de dados

    public function ConectarBD() {
        $connection = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if ($connection->error) {
            die("Falha na conexão: " . $connection->connect_error);
        } else {
            return $connection;
        }
    }
}

?>