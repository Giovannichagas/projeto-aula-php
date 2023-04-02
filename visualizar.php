<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
session_start();
$id = $_GET["id"];

?>

<body>
    <div>
        <h1>Olá <?= $_SESSION["usuario"][$id][0] ?></h1>
        <table>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Excluir</td>
                <td>Cadastrar Livro</td>
            </tr>
            <?php 
            foreach($_SESSION["usuario"] as $usu){
            ?>
                <tr>
                <td><?=$usu[0]?></td>
                <td><?=$usu[1]?></td>
                <td><button>Excluir</button></td>
                <td><a href="cadastrarLivros.php"><button>Cadastrar</button></td>
            </tr>
            <?php
            }
            ?>

        </table>
    </div>
</body>

</html>