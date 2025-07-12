<?php
$venda = $_POST['venda'];

if ($venda <= 1000) {
    $comissao = $venda * 0.05;
} elseif ($venda <= 5000) {
    $comissao = $venda * 0.10;
} else {
    $comissao = $venda * 0.15;
}

echo "Comissão: R$ " . number_format($comissao, 2, ',', '.');
?>
