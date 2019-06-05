<!doctype html>
<html lang="pt-br">
<head>
    <?php include_once('includes/head.php'); ?>
    <style type="text/css">
        body{
            width: 100%;
            background-image: url(img/background-nature.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>

<div id="container-login">
    <h1 class="title-page">Bem-vindo ao CB Factory</h1>
    <form id="form-login" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="password">
        </div>
        <div class="form-group">
            <small id="emailHelp" class="form-text text-muted">Você está acessando uma área restita.</small>
        </div>
        <button type="submit" class="btn btn-primary" name="action" value="login">Fazer Login</button>
    </form>
</div>

</body>
</html>

<?php

if (isset($_POST['action']) && $_POST['action'] == 'login'){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)){
        echo '<script>alert("Preencha todos os campos!");</script>';
    } else {
        //function_verifca usuario
        $reply = main->getLogin($email, $password);
        //if ()
    }

}
?>