<?php

session_start();

if(!isset($_SESSION['usuarios'])){
    $_SESSION['usuarios'] = [];
}

if(isset($_POST['email'])){
    $email        = $_POST['email'];
    $senha        = $_POST['senha'];
    $nomecompleto = $_POST['nome'];
    $telefone     = $_POST['telefone'];
    $_SESSION['usuarios'][$email] = $senha;

    echo "<h3>Cadastro realizado com sucesso!</h3>";
    echo "<a href='loginPessoa.php'>Voltar para Login</a>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <h1>Cadastrar Usuário</h1>
    <form method="POST">
        <label>Digite seu e-mail: </label>
        <input type="text" name="email" required>
        <br><br>
        <label>Digite sua senha: </label>
        <input type="number" name="senha" required>
        <br><br>
        <label>Digite seu nome completo: </label>
        <input type="text" name="nome" required>
        <br><br>
        <label>Digite seu telefone com ddd: </label>
        <input type="number" name="telefone" required>
        <br><br>
        <button type="submit">Cadastrar</button>
        <br><br>
    </form>
<br>
<a href="loginPessoa.php">Voltar</a>