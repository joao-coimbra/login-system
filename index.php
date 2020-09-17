<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="shortcut icon" href="src/assets/ico/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="src/css/global.css">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <section class="form">
        <img src="src/assets/ico/user.svg" alt="login">
        <form action="login.php" method="post">
            <label id="email">
                <input name="email" type="email" placeholder="Email">
            </label>
            <label id="password">
                <input name="senha" type="password" placeholder="Password">
            </label>
            <?php
                if(isset($_SESSION['nao_preenchido'])):
            ?>
                <div class="error" style="
                display: flex;
                align-items: center;
                justify-items: center;
                text-align: center;
                color: rgba(255, 255, 255, 0.6);
                ">
                <p>Preencha todos os campos</p>
                </div>
            <?php
                endif;
                unset($_SESSION['nao_preenchido']);
            ?>
            <?php
                if(isset($_SESSION['nao_autenticado'])):
            ?>
                <div class="error" style="
                display: flex;
                align-items: center;
                justify-items: center;
                text-align: center;
                color: rgba(255, 255, 255, 0.6);
                ">
                <p>Usuário ou senha inválidos.</p>
                </div>
            <?php
            endif;
                unset($_SESSION['nao_autenticado']);
            ?>
            <button type="submit">Log In</button>
        </form>
        <a href="#">forgot your password?</a>
    </section>

    <script src="src/js/script.js"></script>
</body>
</html>