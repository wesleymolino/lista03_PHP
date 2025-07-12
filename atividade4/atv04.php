<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $senha = $_POST['senha'];
    $senhaCorreta = "minhaSenha123";

    if ($senha === $senhaCorreta) {
        echo "Senha correta!";
    } else {
        echo "Senha incorreta.";
    }
}
?>
