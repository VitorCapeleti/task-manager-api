<?php
//como o teste vai ser realizado na máquina virtual, eu tenho que definir as mesmas variáveis criada para o teste no yml
//por isso criei um novo connection, com a mesma função original, porém definindo as variáveis
class connectionClass {
    private $localhost = "127.0.0.1";  
    private $username = "test_user";    
    private $password = "test_password"; 
    private $bdname = "crud";  

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