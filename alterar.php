<?php
$id = $_GET['id'];
$arquivo = "perguntas.txt";
$linhas = file($arquivo);
$atual = [];

foreach ($linhas as $linha) {
    $dados=explode(";", trim($linha));
    if ($dados[0]==$id) {
        $atual=$dados;
        break;
    }
}

if (isset($_POST['salvar'])) {
    $novaLinha=$id . ";" . $_POST['tipo'] . ";" . $_POST['enunciado'] . ";" . $_POST['respostas'] . PHP_EOL;
    $txt="";

    foreach ($linhas as $linha) {
        $dados=explode(";", trim($linha));
        
        if ($dados[0]==$id) {
            $txt=$txt . $novaLinha;
        } else { 
            $txt=$txt . $linha;
        }
    }

    file_put_contents($arquivo, $txt);
    header("Location: listar.php");
}
?>

<form method="POST">
    <h3>Alterar Pergunta <?php echo $id; ?></h3>
    <input type="text" name="tipo" value="<?php echo $atual[1]; ?>"><br>
    <input type="text" name="enunciado" value="<?php echo $atual[2]; ?>"><br>
    Respostas: <input type="text" name="respostas" value="<?php echo $atual[3]; ?>"><br>
    <button type="submit" name="salvar">Atualizar</button>
</form>
