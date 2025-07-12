<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if ($n1 > $n2) {
    echo "$n1 é maior.";
} else if ($n2 > $n1) {
    echo "$n2 é maior.";
} else {
    echo "Os dois números são iguais.";
}
?>
