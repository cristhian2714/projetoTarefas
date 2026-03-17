<?php
session_start();
$resultado = "";

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_SESSION['usuarios'][$email])){
        if($_SESSION['usuarios'][$email] == $senha){
            $_SESSION['usuario'] = $email;
            header("Location: index.php");
            exit;
        }else{
            $resultado = "Senha incorreta";
        }
        
        }else{
            $resultado = "Usuário não encontrado";
        }
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
    <h1>Login</h1>
    <form method="POST">
        <label>Digite seu login: </label>
        <input type="text" name="email">
        <br><br>
        <label>Digite sua senha: </label>
        <input type="number" name="senha">
        <br><br>
        <button type="submit">Entrar</button>
    </form>
<br>
<button><a href="cadastrarPessoa.php">Cadastrar novo usuário</a></button>
<br><br>
<?php echo $resultado; ?>