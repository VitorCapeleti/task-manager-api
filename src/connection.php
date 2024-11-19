<?php
class connectionClass {
    private $localhost;
    private $username;
    private $password;
    private $bdname;

    public function __construct() {
        // Configure as variáveis de ambiente do Railway
        $this->localhost = $_ENV['MYSQLHOST'];       // Host do banco de dados
        $this->username = $_ENV['MYSQLUSER'];       // Usuário do banco de dados
        $this->password = $_ENV['MYSQLPASSWORD'];   // Senha do banco de dados
        $this->bdname = $_ENV['MYSQLDATABASE'];     // Nome do banco de dados
    }

    public function ConectarBD() {
        $connection = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if ($connection->connect_error) {
            die("Falha na conexão: " . $connection->connect_error);
        } else {
            return $connection;
        }
    }
}
?>