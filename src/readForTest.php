<?php
require_once 'connection.php';
$connObj = new connectionClass();
$connection = $connObj->ConectarBD();
        $sql = "SELECT * FROM user";
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "- Nome: " . $row["nome_var_user"] . "<br>";
            }
        } else {
            echo "0 resultados";
        }

?>