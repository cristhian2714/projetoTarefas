<?php
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Lista de Tarefas</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Lista de Tarefas</h1>
<?php

if(isset($_SESSION['tarefas']) && count($_SESSION['tarefas']) > 0){

    $total = 0;
    foreach($_SESSION['tarefas'] as $tarefa){
        if($tarefa->getStatus() != "Removida"){
            $total++;
        }
    }

    echo "Total de tarefas: ".$total;
    echo "<br><br>";

    foreach($_SESSION['tarefas'] as $id => $tarefa){
        if($tarefa->getStatus() != "Removida"){
            $status = $tarefa->getStatus();
            if($status == "Concluída"){
                $cor = "green";
            }else{
                $cor = "red";
            }

            echo "<p style='color:$cor'>";
            echo $tarefa->getTarefa();
            echo " | <a href='concluirTarefa.php?id=$id'>Concluir</a>";
            echo " | <a href='excluirTarefa.php?id=$id'>Excluir</a>";
            echo "</p>";
        }
    }

}else{
    echo "Nenhuma tarefa cadastrada.";
}
?>
<br>
<a href="index.php">Voltar</a>
</body>
</html>
