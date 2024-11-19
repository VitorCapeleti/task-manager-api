
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read</title>
    <!--<link rel="stylesheet" href="../src/css/style.css">-->
    <style type="text/css">
        body{
    background: rgb(9, 0, 134);
    overflow-x: hidden;
}
.container{
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
.box{
    width: 300px;
    height: 350px;
    background: #e6e6e6;
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 10px;
    box-shadow: 5px 5px 5px black;;
}
.elementstxt{
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;

}
.elementstxt label{
    color: rgb(0, 26, 255);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
}
.elementstxt input{
    border: none;
    border-radius: 20px;
    padding: 7px;
}
.elements{
    padding: 10px;
    display: flex;
    flex-direction: column;
}
.elements input{
    border: none;
    border-radius: 20px;
    font-size: 15px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: rgb(43, 116, 226);
    color: aliceblue;
    font-weight: bolder;
    padding: 15px;
    cursor: pointer;
}
.read{
    padding: 15px;
}
.read button{
    border: none;
    border-radius: 20px;
    font-size: 15px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: rgb(43, 116, 226);
    color: aliceblue;
    font-weight: bolder;
    padding: 15px;
    cursor: pointer;
}
.voltar{
    padding: 0px;
}
.voltar button{
    border: none;
    border-radius: 20px;
    font-size: 15px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background-color: rgb(43, 116, 226);
    color: aliceblue;
    font-weight: bolder;
    padding: 15px;
    cursor: pointer;
}
.box h1{
    text-align: center;
    color: rgb(43, 116, 226);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
  <body class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
  <div class="voltar">
            <a href="index.php"><button>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                </svg>
            </button></a>
        </div>
    <div class="m-5 ">
    <table class="table table-striped ">
        <thead>
            <tr class="table-info p-3 mb-2 bg-success text-white">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col" >Email</th>
            <!--<th scope="col">Senha</th>-->
            <th scope="col" style="text-align:center;">...</th>
            <!--<th scope="col" style="text-align:center;">delete</th>-->
            </tr>
        </thead>
        <tbody>
            <?php
            //require_once 'delete.php';
            //$delete = new Delete($resultado);
            //$retorno = $delete->deleteUsuario();


            require_once 'read.php';
            $read = new Read($resultado);
            $value = $read->listarUsuario();
                while($user_data = mysqli_fetch_assoc($value )){
                    echo"<tr>";
                    echo"<th scope=\"col\">".$user_data['id']."</th>";
                    echo"<th>".$user_data['nome']."</th>";
                    echo"<th>".$user_data['email']."</th>";
                    //echo"<th>".$user_data['password_var_user']."</th>";
                    echo"<th style=\"text-align:center;\">
                            <a class='btn btn-primary' href='edit.php?id=$user_data[id]'>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pencil\" viewBox=\"0 0 16 16\">
                                <path d=\"M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325\"/>
                                </svg>
                            </a>
                            <a class='btn btn-danger' href='verificar.php'>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-trash-fill\" viewBox=\"0 0 16 16\">
                                <path d=\"M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0\"/>
                                </svg>
</a>

                    </th>";


                    echo"</tr>";    
                }
    
            ?>
        </tbody>
    </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    </body>
</html>