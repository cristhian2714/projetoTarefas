<?php 
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    use Projeto\model\Pessoa;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>
<body>
    <h1>Digite seu Usuário:</h1>
    <br><br>
    <form method="POST">
        <label>Usuário: </label>
        <input type="text" name="email" id="email"/>
        <br><br>
        <label>Senha: </label>
        <input type="number" name="senha" id="senha"/>
        <br><br>

        <button type="submit">Login
            <?php
    
                    $email   = $_POST['email'];
                    $senha     = $_POST['senha'];
                    $resultado = validarSenha($email, $senha);
                   
                    if($resultado == true){
                        header('location: ');
                    }else{
                        echo "Erro!!! Digite novamente!";
                    }

                    
        

            ?>
        </button><br>
        <?php 
            echo $resultado;

             
        ?>
        <br>
        <button><a href="index.php">Login</a></button>

    </form>
   
        
    
</body>
</html>