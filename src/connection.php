<?php
class connectionClass {
    private $localhost = $_ENV['DB_HOST'];  // Vai pegar a variável de ambiente DB_HOST
    private $username = $_ENV['DB_USER'];  // Vai pegar a variável de ambiente DB_USER
    private $password = $_ENV['DB_PASSWORD'];  // Vai pegar a variável de ambiente DB_PASSWORD
    private $bdname = $_ENV['DB_NAME'];    // Nome do banco de dados (adicionar no Railway também)

    public function ConectarBD() {
        $connection = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);

        if ($connection->error) {
            die("Falha na conexão: " . $connection->connect_error);
        } else {
            return $connection;
        }
    }
}

