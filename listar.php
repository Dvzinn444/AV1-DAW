<?php
$arquivo = "perguntas.txt";
if (file_exists($arquivo)) {
    $linhas = file($arquivo);
    echo "<table border='1'>";
    foreach ($linhas as $linha) {
        $dados = explode(";", trim($linha));
        echo "<tr>
                <td>$dados[0]</td>
                <td>$dados[1]</td>
                <td>$dados[2]</td>
                <td>$dados[3]</td>
                <td>
                    <a href='alterar.php?id=$dados[0]'>Alterar</a> | 
                    <a href='excluir.php?id=$dados[0]'>Excluir</a>
                </td>
              </tr>";
    }
    echo "</table>";
}
?>