<?php
$tel = $_POST['telefone'];
$ddd = substr($tel, 0, 2);

$validos = ['11', '21', '27'];

if (in_array($ddd, $validos)) {
    echo "DDD $ddd válido.";
} else {
    echo "DDD $ddd inválido.";
}
?>
