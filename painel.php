<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    
</body>
</html>
<h2>Olá, <?php
echo $_SESSION['usuario'];
?></h2>
<h2><a href="logout.php">Sair</a></h2>