<?php
$idade = $_POST['idade'];

if ($idade >= 0 && $idade <= 12) {
    echo "Criança";
} elseif ($idade <= 17) {
    echo "Adolescente";
} elseif ($idade <= 59) {
    echo "Adulto";
} else {
    echo "Idoso";
}
?>
