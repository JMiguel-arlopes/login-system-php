<?php 
    require './class/User.php';
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
            <h2>Registre-se</h2>
            <div class="content-input">
                <input name="name" type="text" placeholder="John Lopez" required>
                <label for="name">Nome</label>
            </div>
            <div class="content-input">
                <input name="email" type="email" placeholder="johnlopez@gmail.com" required>
                <label for="email">Email</label>
            </div><div class="content-input">
                <input name="password" type="password" placeholder="shva92s3#si3" required>
                <label for="password">Senha</label>
            </div>
            <input type="submit" value="Cadastrar" class="btn">
            <a href="index.php">Voltar para o Login</a>
        </form>
    </section>
</body>
</html>

<?php 
    // $state = isset($_POST['name']);
    if(isset($_POST['name'])) {
        $name = addslashes($_POST['name']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);

        if(!empty($name) && !empty($password) && !empty($email)) {
            $user->conect("login_project", "localhost", "root", "");
            if($user->msgErro == "") {
                if($user->register($name, $email, $password)) {
                    ?>
                        <span class="ntf-sucess">Cadastrado com sucesso, irmão!</span>;
                    <?php
                }else {
                    ?>
                        <span class="ntf-error"><?php echo $user->msgErro?></span>;
                    <?php
                };
            } else {
                    ?>
                        <span class="ntf-error">
                            <?php echo "erro: $user->msgErro" ?>
                        </span>
                    <?php
            }
        } else { 
            ?>
                <span class="ntf-error">
                    Preencha todos os campos!
                </span>;
            <?php
        }
    }
?>