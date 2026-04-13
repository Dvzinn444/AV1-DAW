<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = time(); 
    $tipo = $_POST['tipo'];
    $enunciado = $_POST['enunciado'];
    $respostas = $_POST['respostas']; 

    $linha = $id . " ; " . $tipo . " ; " . $enunciado . " ; " . $respostas .;

    $arquivo = fopen("perguntas.txt", "a");
    fwrite($arquivo, $linha);
    fclose($arquivo);

    echo "<b>Pergunta cadastrada com sucesso!</b>";
}
?>

<form method="POST">
    <h3>Novo Desafio</h3>
    <select name="tipo">
    <option value="multipla"></option>
    <option value="texto"></option>
    </select><br><br>
    <input type="text" name="enunciado" required><br><br>
    <br>
    <textarea name="respostas" required></textarea><br><br>
    <button type="submit"></button>
</form>
<a href="listar.php"></a>
