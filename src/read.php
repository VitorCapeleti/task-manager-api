<?php
require_once 'connection.php';
$conexao = new connectionClass();
$resultado = $conexao->ConectarBD();
$dados = array();
class Read{
    private $connection;
    public function __construct($connection){
        $this->connection = $connection;
    }
    public function listarUsuario(){
            $query = "SELECT * FROM user ORDER BY id_int_user DESC";
            $excuteQuery = $this->connection->query($query);
            $verifica = mysqli_num_rows($excuteQuery);
            if($verifica >= 1){
                return $excuteQuery;
            }else{
                return -1;
            }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <style>
        /*Read*/
        body{
            background: rgb(68, 0, 255);
        }
        .m-5{
            background: rgba(0, 0, 0, 0.555);
        }
        .thead{
            background: rgb(68, 0, 255);
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="m-5">
    <table class="table text-white table-bg">
        <thead class="thead">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $read = new Read($resultado);
            $value = $read->listarUsuario();
                while($user_data = mysqli_fetch_assoc($value )){
                    echo"<tr>";
                    echo"<th scope=\"col\">".$user_data['id_int_user']."</th>";
                    echo"<th >".$user_data['nome_var_user']."</th>";
                    echo"<th >".$user_data['email_var_user']."</th>";
                    echo"<th > </th>";
                    echo"</tr>";    
                }
    
            ?>
        </tbody>
    </table>
    </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>