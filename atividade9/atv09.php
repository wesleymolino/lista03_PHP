<?php
$salario = $_POST['salario'];

if ($salario <= 1500) {
    $novo = $salario * 1.2;
} elseif ($salario <= 3000) {
    $novo = $salario * 1.15;
} else {
    $novo = $salario * 1.10;
}

echo "Novo salário: R$ " . number_format($novo, 2, ',', '.');
?>
