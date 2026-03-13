<?php
namespace Projeto\view;
require_once ("../model/Tarefa.php");
use Projeto\model\Tarefa;

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
        <?php
        session_start();
        echo $_SESSION['titulo'];
        echo $_SESSION['prioridade'];
        echo $_SESSION['prazo'];
        /*
        if(isset($_SESSION['tarefas'])){
        foreach($_SESSION['tarefas'] as $dado){
            echo "Título: ";
            echo "<br>";
            echo "Prioridade:";
            echo "<br>";
            echo "Prazo: "; 
            echo "<br><br>";
            echo "----------------------";
            echo "<br><br>";
        }
        }else{
        echo "Nenhuma tarefa cadastrada.";*/
        
        ?>
    <br>
    <a href="index.php">Voltar</a>
</body>
</html>