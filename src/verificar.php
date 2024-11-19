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
                <input type="text" name="id" value="<?php echo $user_data['id']?>" style="display:none;">
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
