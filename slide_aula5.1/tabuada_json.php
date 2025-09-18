<?php

$arquivo = "usuarios.json";
$usuarios = file_exists($arquivo) ? json_decode(file_get_contents($arquivo), true) : [];

if (!empty($_POST['numero'])) {
    $n = (int) $_POST['numero'];

    $txt = "Tabuada do $n\n";
    for ($i = 1; $i <= 10; $i++) {
        $txt .= "$i x $n = " . ($i * $n) . "\n";
    }

    echo "<h2>Tabuada do $n</h2>";
    echo "<pre>$txt</pre>";

    if (!empty($_POST['nome']) && !empty($_POST['email'])) {
        $novoUsuario = [
            "nome" => $_POST['nome'],
            "email" => $_POST['email']
        ];

        $usuarios[] = $novoUsuario;

        file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        echo "<h2>Usuário cadastrado com sucesso!</h2>";
    }

    if (!empty($usuarios)) {
        echo "<h3>Lista de Usuários:</h3>";
        echo "<ul>";
        foreach ($usuarios as $u) {
            echo "<li><b>{$u['nome']}</b> - {$u['email']}</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhum usuário cadastrado ainda.";
    }
}
?>