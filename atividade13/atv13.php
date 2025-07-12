<?php
$idade = $_POST['idade'];

if ($idade >= 18) {
    echo "Acesso permitido.";
} else {
    echo "Acesso negado.";
}
?>
