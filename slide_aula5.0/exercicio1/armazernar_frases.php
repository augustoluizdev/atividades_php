<?php
$arquivo = "frases.txt";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase1 = $_POST["frase1"];
    $frase2 = $_POST["frase2"];
    $frase3 = $_POST["frase3"];

    $conteudo = $frase1 . PHP_EOL . $frase2 . PHP_EOL . $frase3 . PHP_EOL;

    file_put_contents($arquivo, $conteudo);

    echo "<h2>Frases gravadas com sucesso!</h2>";
    echo "<h3>Conteúdo do arquivo:</h3>";

    $conteudoArquivo = file_get_contents($arquivo);
    echo "<pre>" . htmlspecialchars($conteudoArquivo) . "</pre>";
} else {
    echo "Acesse o formulário primeiro.";
}
?>