<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Cadastrar</h1>
        <form action="cad_acoes.php" method="POST">
            <label for="">Nome: </label>
            <input type="text" name="nome">
            <br>
            <label for="">E-mail: </label>
            <input type="email" name="email">
            <br>
            <label for="">Senha: </label>
            <input type="password" name="senha" maxlength="8">
            <br>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
        <div>
            <?php
                if(isset($_GET["acao"]) && $_GET["acao"]== 1)
                echo"Usuário já cadastrado";
            ?>
        </div>
    </div>
</body>

</html>

