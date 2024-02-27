<?php 
    require 'class/User.php';
    $user = new User();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="container-section">
        <form method="POST" class="form">
            <h2>Login</h2>
            <div class="content-input">
                <input name="email" type="email" placeholder="johnlopez@gmail.com" required>
                <label for="email">Email</label>
            </div><div class="content-input">
                <input name="password" type="password" required>
                <label for="password">Senha</label>
            </div>
            <input type="submit" value="Entrar" class="btn">
            <a href="register.php">Não tem conta? Faça seu registro</a>
        </form>
    </section>

    <?php 
        if(isset($_POST['email']) and isset($_POST['password'])) {
            $email = addslashes($_POST['email']);
            $psw = addslashes($_POST['password']);

            if(!empty($email) and !empty($psw)) {
                $user->conect("login_project", "localhost", "root", "");
                if($user->login($email, $psw)) {
                    header('location: home.php');
                } else {
                    echo "Email ou Senha incorretos!";
                }

            } else {
                echo "preencha todos os campos!";
            }

            
            
        }
    ?>
</body>
</html>