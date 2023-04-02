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
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <label for="">E-mail: </label>
            <input name="email" type="email">
            <br>
            <label for="">Senha: </label>
            <input nome="senha" type="password">
            <br>

            <input type="submit" value="Logar">
            <br>
            <br>
        </form>
        <a href="cadastro.php">Cadastrar</a>
        <div>
            <?php
                if(isset($_GET["acao"]) && $_GET["acao"]== 1){
                    echo"Usuário cadastrado com sucesso";
                }else if((isset($_GET["acao"]) && $_GET["acao"]== 2)){
                    echo"Usuário e senha inválido";
                }
            ?>
        </div>
    </div>
</body>

</html>