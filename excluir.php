<?php
$id = $_GET['id'];
$linhas = file("perguntas.txt");
$txt = "";

foreach ($linhas as $linha) {
    $dados = explode(";", trim($linha));
    if ($dados[0] != $id) {
        $txt .= $linha;
    }
}

file_put_contents("perguntas.txt", $txt);
header("Location: listar.php");
?>