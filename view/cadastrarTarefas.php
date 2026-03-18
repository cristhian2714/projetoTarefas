<?php
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;
session_start();

if(!isset($_SESSION['tarefas'])){
    $_SESSION['tarefas'] = [];
}

if(isset($_POST['titulo'])){
    $titulo     = $_POST['titulo'];
    $prioridade = $_POST['prioridade'];
    $prazo      = $_POST['prazo'];
    $tarefa     = new Tarefa($titulo,$prioridade,$prazo);
    $_SESSION['tarefas'][] = $tarefa;
    
    echo "<h3>Tarefa cadastrada com sucesso!</h3>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastrar tarefas</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="container">

<h1>Cadastrar Tarefa</h1>
<form method="POST">
    <label>Título</label>
    <br>
    <input type="text" name="titulo">
    <br><br>
    <label>Prioridade</label>
    <br>
    <select name="prioridade">
        <option value="Alta">Alta</option>
        <option value="Media">Média</option>
        <option value="Baixa">Baixa</option>
    </select>
    <br><br>
    <label>Prazo</label>
    <br>
    <input type="date" name="prazo">
    <br><br>
    <button type="submit">Cadastrar</button>
    
</form>
<br>
<a href="index.php">Voltar</a>