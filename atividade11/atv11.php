<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$op = $_POST['operacao'];

switch ($op) {
    case '+': echo $n1 + $n2; break;
    case '-': echo $n1 - $n2; break;
    case '*': echo $n1 * $n2; break;
    case '/':
        if ($n2 != 0) {
            echo $n1 / $n2;
        } else {
            echo "Divisão por zero!";
        }
        break;
    default:
        echo "Operação inválida";
}
?>
