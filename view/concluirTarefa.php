<?php
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;
session_start();

if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_SESSION['tarefas'][$id])){
        $_SESSION['tarefas'][$id]->concluir();
    }
}

header("Location: listarTarefas.php");
exit;

?>