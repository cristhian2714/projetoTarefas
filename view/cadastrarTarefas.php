<?php
namespace Projeto\view;
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Tarefas</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Cadastrar Tarefa</h1>
    <form method="POST">
        <label>Título</label>
        <br>
        <input type="text" name="titulo" required>
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
<?php
session_start();
if(isset($_POST['titulo'])){
   $titulo = $_POST['titulo'];
   $prioridade = $_POST['prioridade'];
   $prazo = $_POST['prazo'];
   $tarefa = new Tarefa($titulo, $prioridade, $prazo);
   $_SESSION['tarefas'][] = $tarefa;
   echo "<h3>Tarefa cadastrada com sucesso!</h3>";

}
?>
</body>

