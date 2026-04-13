<?php
$idAlterar = $_GET['id'];
$linhas = file("perguntas.txt");
$perguntaEncontrada = 0;

while (!feof) {
    $dados = explode(" ; ", $linha);
    if ($dados[0] == $idAlterar) {
        $perguntaEncontrada = $dados;
        break;
    }
}
