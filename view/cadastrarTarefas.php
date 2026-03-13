<?php
namespace Projeto\view;
require_once "../model/Tarefa.php";
use Projeto\model\Tarefa;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Tarefas</title>
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
        <button type="submit"><a href="listarTarefas.php">Cadastrar
        <?php
            session_start();
            $titulo = $_POST['titulo'];
            $prioridade = $_POST['prioridade'];
            $prazo = $_POST['prazo'];

            $tarefas = new Tarefa($titulo, $prioridade, $prazo);
            $_SESSION['titulo'] = $titulo;
            $_SESSION['prioridade'] = $prioridade;
            $_SESSION['prazo'] = $prazo;

            echo "<h3>Tarefa cadastrada com sucesso!</h3>";
        ?>


        </button>
    </form>
<br>
<a href="index.php">Voltar</a>
</body>
</html>