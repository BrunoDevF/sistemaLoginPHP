<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    // verifica se o button foi acionado
    if(isset($_POST['acao'])){
        //Valores capturados
        $user = $_POST['user'];
        $password = $_POST['senha'];

        $sql = MySql::conectar()->prepare('SELECT * FROM `tb.admin.usuarios` WHERE nome = ? AND senha = ?');
        //Por questoes de segurança é passado um array com os valores.
        $sql->execute(array($user,$password));
        if($sql->rowCount() == 1){//caso seja retornado uma linha do banco de dados
            //LOGADO
            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $password;
            header('location: main.php');
            die();
        }else{
            Painel::alert('erro','Nome ou senha incorretos');
        }
    } 
?>
<div class="box-login">
    <form  method="POST">

        Nome: <input type="text" name="user">
        <br>
        Senha: <input type="password" name="senha">
        <br>
        <input type="submit" name="acao" value="Enviar"> 
    </form>
</div>
</body>
</html>