<?php
class connectionClass{
    private $localhost = "localhost";
    private $username = "root";
    private $password = "";
    private $bdname = "crud";
    public function ConectarBD(){
        $connection = new mysqli($this->localhost, $this->username, $this->password, $this->bdname);
        if($connection->error){
            die("Falha na conexão: " . $connection->connect_error);
        }else{
            return $connection;
        }
    }

}


?>