<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
</head>
<body>
<?php
            require_once 'read.php';
            $read = new Read($resultado);
            $value = $read->listarUsuario();
            $user_data = mysqli_fetch_assoc($value );

            require_once 'delete.php';
            $delete = new Delete($resultado);
            $retorno = $delete->deleteUsuario();
?>

    <div class="container">
        
        <form action="" method="post" class="box">
        <h1>Tem certeza que deseja excluir?</h1>
            <div class="elementstxt">
                <input type="text" name="id" value="<?php echo $_GET['id']?>" >
            </div>
            <div class="elements">
                <input type="submit" name="Delete" value="Sim">
            </div>

        </form>
        <div class="read">
            <a href="list.php">
                <button>                
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                </svg>
                </button>
            </a>
        </div>
    </div>
</body>
</html>
