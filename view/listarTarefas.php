<?php
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listar Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
        <?php
        if(isset($_SESSION['tarefas']) && count($_SESSION['tarefas']) > 0){
        foreach($_SESSION['tarefas'] as $id => $tarefa){
            echo "<p>";
            echo $tarefa->getTarefa();
            echo " | <a href='excluirTarefa.php?id=$id'>Excluir</a>";
            echo "</p>";
        }
        }else{
        echo "Nenhuma tarefa cadastrada.";
        }
        ?>
<br>
<a href="index.php">Voltar</a>
</body>
</html>

