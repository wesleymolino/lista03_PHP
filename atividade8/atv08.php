<?php
$ano = $_POST['ano'];

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}
?>
