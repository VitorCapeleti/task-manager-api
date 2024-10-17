<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="../src/css/style.css">
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
