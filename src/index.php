<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
        include_once 'insert.php';
        $insert = new Insert($resultado);
        $insert->InserirUsuario();
    ?>

    <form action="" method="post">
        <label for="name">Nome</label>
        <input type="text" name="name" id=""><br><br>
        <label for="email">Email</label>
        <input type="text" name="email" id=""><br><br>
        <label for="password">Senha</label>
        <input type="password" name="password" id=""><br><br>

        <input type="submit" name="Cadastrar" value="Cadastrar">
    </form>
</body>
</html>