<?php

session_start();

if(isset($_GET['id'])){

    $id = $_GET['id'];

    if(isset($_SESSION['tarefas'][$id])){

        unset($_SESSION['tarefas'][$id]);

    }

}

header("Location: listarTarefas.php");

exit;

?>
 