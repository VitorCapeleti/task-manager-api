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
        require_once 'update.php';
        
        // Cria a conexão e chama o método updateUsuario()
        $update = new Update($resultado);
        $requisito = $update->updateUsuario();
        
        // Verifica se os dados foram retornados corretamente
        if ($requisito) {
            $nome = $requisito['nome'];
            $email = $requisito['email'];
        } else {
            $nome = '';
            $email = '';
        }
    ?>
    <div class="container">
        <form action="" method="post" class="box">
            <div class="elementstxt">
                <label for="name">Nome</label>
                <input type="text" name="name" id="" value="<?php echo htmlspecialchars($nome); ?>" placeholder="Insira o nome...">
            </div>
            <div class="elementstxt">
                <label for="email">Email</label>
                <input type="text" name="email" id="" value="<?php echo htmlspecialchars($email); ?>" placeholder="Insira o email...">
            </div>
            <?php 
            require_once'saveUpdate.php';
            $save = new SaveUpdate($resultado);
            $atualizado = $save->saveUpdateUsuario();
            ?>
            <div class="elements">
                <input type="submit" name="Update" value="Update">
            </div>
        </form>
        <div class="read">
            <a href="list.php"><button>Listar</button></a>
        </div>
    </div>
</body>
</html>
