<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
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
        include_once 'insert.php';
        $insert = new Insert($resultado);
        $insert->InserirUsuario();
    ?>
    <div class="container">
    <form action="" method="post" class="box">
        <div class="elementstxt">
            <label for="name">Nome</label>
            <input type="text" name="name" id="" placeholder="Insira o nome...">
        </div>
        <div class="elementstxt">
            <label for="email">Email</label>
            <input type="text" name="email" id="" placeholder="Insira o email...">
        </div>
        <div class="elementstxt">
            <label for="password">Senha</label>
            <input type="password" name="password" id="" placeholder="Insira a senha...">
        </div>
        <div class="elements">
            <input type="submit" name="Cadastrar" value="Cadastrar">
        </div>
    </form>
    <div class="read">
        <a href="list.php"><button>Listar</button></a>
    </div>
    </div>
</body>
</html>