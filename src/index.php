<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" href="../src/css/style.css">
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
        <a href="read.php"><button>Listar</button></a>
    </div>
    </div>
</body>
</html>