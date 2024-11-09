<?php
class connectionClass {
    private $localhost;
    private $username;
    private $password;
    private $bdname;

    public function __construct() {
        // Pega as configurações do banco de dados a partir de variáveis de ambiente
        $this->localhost = getenv('DB_HOST') ?: '127.0.0.1';
        $this->username = getenv('DB_USER') ?: 'root';
        $this->password = getenv('DB_PASSWORD') ?: '';
        $this->bdname = getenv('DB_NAME') ?: 'crud';
    }

    public function ConectarBD() {
        $connection = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if ($connection->connect_error) {
            die("Falha na conexão: " . $connection->connect_error);
        }
        return $connection;
    }
}
