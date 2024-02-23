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
        <form action="POST" class="form">
            <h2>Login</h2>
            <div class="content-input">
                <input name="name" type="text" placeholder="John Lopez" required>
                <label for="name">Nome</label>
            </div>
            <div class="content-input">
                <input name="email" type="email" placeholder="johnlopez@gmail.com" required>
                <label for="email">Email</label>
            </div><div class="content-input">
                <input name="password" type="password" required>
                <label for="password">Senha</label>
            </div>
            <input type="submit" value="Entrar" class="btn">
            <a href="/register">Não tem conta? Faça seu registro</a>
        </form>

    </section>
</body>
</html>