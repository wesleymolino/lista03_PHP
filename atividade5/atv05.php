<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if ($usuario === "admin" && $senha === "123") {
    echo "Acesso permitido.";
} else {
    echo "Acesso negado.";
}
?>
